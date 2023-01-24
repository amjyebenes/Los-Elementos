window.onbeforeunload = function () {
    window.scrollTo(0,0);
};

window.focus();

/**
 * DOM Constants & Variables
 */
const scoreDom = document.querySelector('.score');
const restartDom = document.querySelector('.con-restart');
const lvlMenu = document.querySelector('.con-gamemode');
const title = document.querySelector('.title');
const bg = document.querySelector('.parallax-bg');

/**
 * Sound
 */
let music;
let lvlup;

/**
 * Three.js globals
 */
let camera, scene, renderer, soundLoader;
let ambientLight, directionalLight;
const width = 15; // Camera width
const height = width * (window.innerHeight / window.innerWidth); // Camera height

// Global Textures & Images
let textureLoader;
let bgBlue;

/**
 * Cannon.js
 */
let world; // CannonJs world

/**
 * Others
 */
let lastTime; // Last timestamp of animation
let stack = []; // Parts that stay solid on top of each other
let overhangs = []; // Overhanging parts that fall down

/**
 * Flags
 */
let gameEnded;
let gamemode;

/**
 * Variables
 */
let score = 0;
let speed = 0.20; // Speed of boxes
let gravity = -10; // Gravity
const boxHeight = 1; // Height of each layer
const zoom = 1;
const originalBoxSize = 4; // Original width and height of a box

/**
 * Init
 */
init();

function init() {
    lastTime = 0;
    gameEnded = false;

    // Window Resize
    window.addEventListener('resize', onWindowResize, false);

    // Initialize CannonJs
    world = new CANNON.World();
    world.gravity.set(0, gravity, 0);
    world.broadphase = new CANNON.NaiveBroadphase();
    world.solver.iterations = 40;

    // Initialize ThreeJS
    scene = new THREE.Scene();

    // Texture loader
    textureLoader = new THREE.TextureLoader();
    textureLoader.setCrossOrigin("");
    loadTextures();

    // Foundation
    addLayer(0, 0, originalBoxSize, originalBoxSize);

    // First Layer
    addLayer(-10, 0, originalBoxSize, originalBoxSize, "x");

    // Set up lights
    ambientLight = new THREE.AmbientLight(0xffffff, 0.6);
    scene.add(ambientLight);

    directionalLight = new THREE.DirectionalLight(0xffffff, 0.6);
    directionalLight.position.set(10, 20, 0);
    scene.add(directionalLight);

    // Set up floor
    addFloor(originalBoxSize);

    // Camera
    camera = new THREE.OrthographicCamera(
        width / -zoom, // left
        width / zoom, // right
        height / zoom, // top
        height / -zoom, // bottom
        -5, // near
        100000 // far
    );
    camera.position.set(4, 4, 4);
    // skybox.position.copy(camera.position); // Skybox Position
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.lookAt(0, 0, 0);

    // Helpers
    const AxesHelper = new THREE.AxesHelper(5);
    // scene.add(AxesHelper);

    // Create an AudioListener and add it to the camera
    const listener = new THREE.AudioListener();
    camera.add( listener );

    // Create a global audio source
    // music = new THREE.Audio( listener );
    lvlup = new THREE.Audio( listener );
    music = new THREE.Audio( listener );

    // Load a sound and set it as the Audio object's buffer
    const audioLoaderLvlUp = new THREE.AudioLoader();
    audioLoaderLvlUp.load( '../assets/assets_juego_miguel/Sonidos-Efectos/Cofre.wav', function( buffer ) {
        lvlup.setBuffer( buffer );
        lvlup.setLoop( false );
        lvlup.setVolume( 0.2 );
    });

    const audioLoaderMusic = new THREE.AudioLoader();
    audioLoaderMusic.load( '../assets/assets_juego_miguel/dance.mp3', function( buffer ) {
        music.setBuffer( buffer );
        music.setLoop( true );
        music.setVolume( 0.5 );
    });

    // Renderer
    renderer = new THREE.WebGLRenderer({ antialias : true, alpha: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.render(scene, camera);

    // Add it to HTML
    document.body.appendChild(renderer.domElement);
}

/**
 * Adds a new layer (cube) to the scene
 * @param {*} x 
 * @param {*} z 
 * @param {*} width 
 * @param {*} depth 
 * @param {*} direction 
 */
function addLayer (x, z, width, depth, direction) {
    const y = boxHeight * stack.length;
    const layer = generateBox(x, y, z, width, depth, false);
    layer.direction = direction;
    stack.push(layer);
}

/**
 * Loads all materials and textures
 */
function loadTextures() {
    // Scene Background Images
    bgBlue = textureLoader.load('../assets/assets_juego_miguel/bg_blue.jpg');
}

/**
 * Generates a Three.js Box
 * @param {*} x 
 * @param {*} y 
 * @param {*} z 
 * @param {*} width 
 * @param {*} depth 
 * @param {*} falls 
 * @returns 
 */
function generateBox(x, y, z, width, depth, falls) {
    // ThreeJS Box 3D Model
    const geometry = new THREE.BoxGeometry(width, boxHeight, depth, 10, 5, 10);

    // Control the color of the falling boxes
    let stackLenght = stack.length;
    if (falls) {
        stackLenght = stack.length - 1;
    }

    // Box Color
    const color = new THREE.Color(`hsl(${200 + stackLenght * 8}, 100%, 50%)`);
    const material = new THREE.MeshPhongMaterial({ color, shininess: 900, transparent: true, opacity: .98});
    // material.wireframe = true;

    // Box Mesh
    const mesh = new THREE.Mesh(geometry, material);
    mesh.material.needsUpdate = true;
    mesh.position.set(x, y, z);
    scene.add(mesh);

    // CannonJS Box Collision Model
    const shape = new CANNON.Box(
        new CANNON.Vec3(width / 2, boxHeight / 2, depth / 2)
    );
    let mass = falls ? 5 : 0;
    const body = new CANNON.Body({ mass, shape});
    body.position.set(x, y, z);
    world.addBody(body);

    return {
        threejs: mesh,
        cannonjs: body,
        width,
        depth,
    };
}

/**
 * Creates the floor
 * @param {*} boxHeight 
 * @returns 
 */
function addFloor(boxHeight) {
    // Three JS Geometry
    const cylinder = new THREE.CylinderGeometry( 3.5, 0, 6, 64);

    // Three JS Materials
    const color = new THREE.Color(`hsl(${200 + (stack.length - 1) * 8}, 100%, 50%)`);
    const floorMaterial = new THREE.MeshLambertMaterial({ color, opacity: 1, transparent: true });
    // floorMaterial.wireframe = true;

    // Three JS Meshes
    const ThreeFloor = new THREE.Mesh(cylinder, floorMaterial);
    ThreeFloor.material.side = THREE.DoubleSide;
    // ThreeFloor.rotation.x = 90 * Math.PI / 180;
    ThreeFloor.position.set(0, -boxHeight, 0);
    scene.add(ThreeFloor);

    // Cannon JS Floor
    const cylinderShape = new CANNON.Cylinder(3.5, 3, 0, 32);
    const cylinderBody = new CANNON.Body({mass: 0});
    cylinderBody.addShape(cylinderShape);
    cylinderBody.quaternion.setFromAxisAngle(new CANNON.Vec3(-1, 0, 0), Math.PI * 0.5);
    cylinderBody.position.set(0, -.5, 0);
    world.addBody(cylinderBody);

    return {
        threejs: ThreeFloor,
        cannonjs: cylinderBody,
    };
}

let gameStarted = false;

/**
 * Main Click Event Listener
 */
window.addEventListener('click', (e) => {
    if (!gameStarted) {
        gamemode = checkGamemode(e.target);
        if (gamemode != null) {
            // Styles
            document.querySelector('canvas').style.opacity = 1;
            document.querySelector('canvas').style.transform = 'translateY(0)';
            scoreDom.style.opacity = 1;
            scoreDom.style.transform = 'translateY(0)';
            lvlMenu.style.opacity = 0;
            lvlMenu.style.display = 'flex';
            title.style.opacity = 0;

            // Background Music
            music.play();

            // 1 second delay on game start
            setTimeout(() => {
                renderer.setAnimationLoop(animation);
                lvlMenu.style.display = 'none';
            }, 1000);

            // Invert gravity in "hell" gamemode
            if (gamemode == "hell") {
                gravity *= -1;
                world.gravity.set(0, gravity, 0);
            }

            gameStarted = true;
        }
        
    } else {
        if (gameEnded) {
            return;
        }

        // Allow game ejecution only when menu is hidden
        if (lvlMenu.style.display == 'none') {
            // Layers
            const topLayer = stack[stack.length - 1]; // Actual box
            const previousLayer = stack[stack.length - 2]; // Previous box
            
            const direction = topLayer.direction; // Direction of movement
            const delta = topLayer.threejs.position[direction] - previousLayer.threejs.position[direction]; // Box cutted piece delta
            const overhangSize = Math.abs(delta); // Make it absolute
            const size = direction == "x" ? topLayer.width : topLayer.depth; // The size of the box depends on it's direction
            const overlap = size - overhangSize; // Box overlap size

            // If player fails, the overlap is positive
            if (overlap > 0) {
                cutBox(topLayer, overlap, size, delta);
                
                // Overhang
                const overhangShift = (overlap / 2 + overhangSize / 2) * Math.sign(delta);
                const overHangX = direction == "x" ? topLayer.threejs.position.x + overhangShift : topLayer.threejs.position.x;
                const overHangZ = direction == "z" ? topLayer.threejs.position.z + overhangShift : topLayer.threejs.position.z;
                const overHangWidth = direction == "x" ? overhangSize : topLayer.width;
                const overHangDepth = direction == "z" ? overhangSize : topLayer.depth;

                addOverHang(overHangX, overHangZ, overHangWidth, overHangDepth);

                // Next layer
                const nextX = direction == "x" ? topLayer.threejs.position.x : -10;
                const nextZ = direction == "z" ? topLayer.threejs.position.z : -10;
                const newWidth = topLayer.width;
                const newDepth = topLayer.depth;
                const nextDirection = direction == "x" ? "z" : "x";

                //if (scoreElement) scoreElement.innerText = stack.length - 1;
                addLayer(nextX, nextZ, newWidth, newDepth, nextDirection);

                // Level completed sound
                if (stack.length == 7 || stack.length == 12 || stack.length == 17 ||stack.length == 22 || stack.length == 27
                    || stack.length == 32 || stack.length == 37 || stack.length == 42 || stack.length == 47 || stack.length == 52) {
                    lvlup.play();
                    if (gamemode == "speed") speed += .02;
                }

                success();
            }
            else {
                missedTheSpot();
            }
        }
    }
});

/**
 * Creates the overhang cubes
 * @param {*} x 
 * @param {*} z 
 * @param {*} width 
 * @param {*} depth 
 */
function addOverHang(x, z, width, depth) {
    const y = boxHeight * (stack.length - 1);
    const overhang = generateBox(x, y, z, width, depth, true);
    overhangs.push(overhang);
}

/**
 * 
 * @param {*} topLayer 
 * @param {*} overlap 
 * @param {*} size 
 * @param {*} delta 
 */
function cutBox(topLayer, overlap, size, delta) {
    const direction = topLayer.direction;
    const newWidth = direction == "x" ? overlap : topLayer.width;
    const newDepth = direction == "z" ? overlap : topLayer.depth;

    // Update metadata
    topLayer.width = newWidth;
    topLayer.depth = newDepth;

    // Update ThreeJS model
    topLayer.threejs.scale[direction] = overlap / size;
    topLayer.threejs.position[direction] -= delta / 2;

    // Update CannonJS model
    topLayer.cannonjs.position[direction] -= delta / 2;

    // Replace shape to a smaller one (in CannonJS you can't just simply scale a shape)
    const shape = new CANNON.Box(
        new CANNON.Vec3(newWidth / 2, boxHeight / 2, newDepth / 2)
    );
    topLayer.cannonjs.shapes = [];
    topLayer.cannonjs.addShape(shape);
}

/**
 * Animation frames
 * @param {*} time 
 */
function animation(time) {
    if (lastTime) {
        const topLayer = stack[stack.length - 1];
        topLayer.threejs.position[topLayer.direction] += speed;
        topLayer.cannonjs.position[topLayer.direction] += speed;

        // Move the camera upwards, 4 is the initial camera height
        if (camera.position.y < boxHeight + (stack.length - 2) + 4) {
            camera.position.y += speed;
        }

        // Gamemodes
        switch (gamemode) {
            case "hell":
                camera.rotation.z += .002;
                break;
            case "swing":
                camera.rotation.y += .002;
                camera.lookAt(topLayer.threejs.position);
            default:  
        }

        // skybox.rotation.y += .001;
        updatePhysics();
        renderer.render(scene, camera);
    }
    lastTime = time;
}

/**
 * Checks the gamemode selected
 * @param {*} target 
 * @returns 
 */
function checkGamemode(target) {
    console.log(target);
    if (target.id == "hell") {
        console.log("HELL MODE");
        return "hell";
    }
    if (target.id == "swing") {
        console.log("SWING MODE");
        return "swing";
    }
    if (target.id == "speed") {
        console.log("SPEED MODE");
        return "speed";
    }
    if (target.id == "normal") {
        console.log("NORMAL MODE");
        return "normal";
    }
    return null;
}

function updatePhysics() {
    world.step(1 / 60); // Step the physics world
    // cannonDebugger.update();

    // Copy coordinates from Cannon.js to Three.js
    overhangs.forEach(element => {
        element.threejs.position.copy(element.cannonjs.position);
        element.threejs.quaternion.copy(element.cannonjs.quaternion);
    });
}

function updateScroll() {
    let translate = bg.style.transform.split(' ', 1);
    console.log(translate[0]);
    let top = translate[0].match(/\d+/);
    console.log(top);
    bg.style.transform = `translateY(${(Number(top) + 400) * -1}px)`;
}

function missedTheSpot() {
    const topLayer = stack[stack.length - 1];
    
    // Turn to top layer into an overhang and let it fall down
    addOverHang(
      topLayer.threejs.position.x,
      topLayer.threejs.position.z,
      topLayer.width,
      topLayer.depth
    );

    world.remove(topLayer.cannonjs);
    scene.remove(topLayer.threejs);

    ambientLight.color.setStyle("#FF0000");
    // directionalLight.color.set("#FF0000");
    // scene.remove(ambientLight);
    // ambientLight.color.setScalar(0);

    restartDom.style.opacity = 1;
    restartDom.style.pointerEvents = 'all';

    music.setVolume(.2);
    music.setDetune(-200);

    gameEnded = true;
    // window.removeEventListener('click');
}

function success() {
    score++;
    scoreDom.innerHTML = score;
    updateScroll();
    // let bg = scene.background == bgCatClose ? bgCatOpen : bgCatClose;
    // scene.background = bg;
}

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
}