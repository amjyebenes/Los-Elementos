import Palas from "../gameObjects/palas.js";

// Variables creadas para el contador
let score1 = 0;
let score2 = 0;

let scoreText1;
let scoreText2;

// Variable para el video
let video;

class Scene_play extends Phaser.Scene {
    constructor() {
        super({ key: "Scene_play" });
    }
    create() {
        // Variables para obtener la mitad del ancho y alto
        let center_width = this.sys.game.config.width / 2;
        let center_height = this.sys.game.config.height / 2;

        //Video para cargarlo de fondo de pantalla. Para la posición escojo la mitad de lo que mide el video
        video = this.add.video(center_width, center_height, "fondo");

        // Ajusta el tamaño del video al tamaño de la pantalla. La Escala es aproximada
        video.setScale((this.sys.game.scale.width / video.width) * 1.065, (this.sys.game.scale.height / video.height) * 1.06);

        // Reproduce el video en loop
        video.play(true);

        // Separador
        this.add.image(center_width, center_height, "separator");

        // Palas
        this.left_paddle = new Palas(this, 30, center_height, "left_paddle");
        this.right_paddle = new Palas(this, this.sys.game.config.width - 30, center_height, "right_paddle");

        // Bola
        this.physics.world.setBoundsCollision(false, false, true, true); // Para que las colisiones solo sean de arriba y abajo
        this.ball = this.physics.add.image(center_width, center_height, "ball");
        this.ball.setCollideWorldBounds(true); // Esto es para que rebote cuando choque
        this.ball.setBounce(1); // Para cuando rebote con algo vaya a la misma velocidad
        this.ball.setVelocityX(-180); // para que vaya a la izq

        // Pared
        this.wallUp = this.add.sprite(0, 0);
        this.wallUp.displayWidth = this.sys.game.config.width * 2; // Para hacer la pared con el ancho total
        this.wallUp.displayHeight = 4; // Para hacer que el muro tenga 1px de alto
        this.physics.add.existing(this.wallUp); // Activar las Fisicas
        this.wallUp.body.immovable = true; // Para que el muro quede fijo

        this.wallDown = this.add.sprite(0, this.sys.game.config.height);
        this.wallDown.displayWidth = this.sys.game.config.width * 2; // Para hacer la pared con el ancho total
        this.wallDown.displayHeight = 4; // Para hacer que el muro tenga 1px de alto
        this.physics.add.existing(this.wallDown); // Activar las Fisicas
        this.wallDown.body.immovable = true; // Para que el muro quede fijo

        // Físicas
        this.physics.add.collider(this.ball, this.left_paddle, this.chocaPala, null, this);
        this.physics.add.collider(this.ball, this.right_paddle, this.chocaPala, null, this);
        this.physics.add.collider(this.ball, this.wallUp,this.colisionMuro, null, this);
        this.physics.add.collider(this.ball, this.wallDown, this.colisionMuro, null, this);

        // Controles
        // Pala izquierda (Teclas W, S)
        this.cursor_W = this.input.keyboard.addKey(Phaser.Input.Keyboard.KeyCodes.W);
        this.cursor_S = this.input.keyboard.addKey(Phaser.Input.Keyboard.KeyCodes.S);

        // Pala derecha (Teclas de direccion)
        this.cursor = this.input.keyboard.createCursorKeys(); // Para crear en esta variable el cursor de la derecha

        // Audio
        this.audio_bounce_paddle = this.sound.add("bounce_paddle", {
            loop: false,
            volume: 2,
        });
        this.audio_bounce_wall = this.sound.add("bounce_wall", {
            loop: false,
            volume: 2,
        });

        this.audio_missed_ball = this.sound.add("missed_ball", {
            loop: false,
            volume: 1.2,
        });

        // Números de puntuación
        // Crea el texto para mostrar la puntuación del jugador 1
        scoreText1 = this.add.text(30, 16, "Puntos: 0", {
            fontSize: "24px",
            fill: "#ffffff",
            fontFamily: "verdana, arial, sans-serif",
        });

        // Crea el texto para mostrar la puntuación del jugador 2
        scoreText2 = this.add.text(
            this.sys.game.config.width / 2 + 30,
            16,
            "Puntos: 0",
            {
                fontSize: "24px",
                fill: "#ffffff",
                fontFamily: "verdana, arial, sans-serif",
            }
        );

    }

    update() {
        // Si la bola en X es menor a 0 es decir toca la pared izquierda, aumento en 1 el marcador derecho
        if (this.ball.x < 0) {
            this.audio_missed_ball.play();
            score2++;
        }
        // Si la bola en X es mayor a el ancho total es decir toca la pared derecha, aumento en 1 el marcador izquierdo
        if (this.ball.x > this.sys.game.config.width) {
            this.audio_missed_ball.play();
            score1++;
        }

        // Si la bola en su posición es menor a 0 en el ancho o superior
        if (this.ball.x < 0 || this.ball.x > this.sys.game.config.width) {
            this.ball.setPosition(
                this.sys.game.config.width / 2,
                this.sys.game.config.height / 2
            );
        }

        // Control de las palas. Agrego velocidad a la pala cuando se pulsan sus teclas
        // Pala Izquierda
        if (this.cursor_S.isDown) {
            // Si el cursor va hacia abajo
            this.left_paddle.body.setVelocityY(350);
        } else if (this.cursor_W.isDown) {
            // Si va hacia arriba
            this.left_paddle.body.setVelocityY(-350);
        } else {
            this.left_paddle.body.setVelocityY(0);
        }

        // Pala Derecha
        if (this.cursor.down.isDown) {
            this.right_paddle.body.setVelocityY(350);
        } else if (this.cursor.up.isDown) {
            this.right_paddle.body.setVelocityY(-350);
        } else {
            this.right_paddle.body.setVelocityY(0);
        }

        // Actualiza el texto para mostrar la puntuación actual del jugador 1
        scoreText1.setText("Puntos: " + score1);

        // Actualiza el texto para mostrar la puntuación actual del jugador 2
        scoreText2.setText("Puntos: " + score2);

        // Si la puntuación de uno marcadores llega a 3 finalizamos el juego
        if (score1 == 3 || score2 == 3) {
            // Detengo el video en loop
            video.play(false);
            //Para cargar la escena end
            this.scene.start("Scene_end");
            // Reestablezco los marcadores a 0
            score1 = 0;
            score2 = 0;
        }
    }

    /**
     * Para cuando choque la bola con la pala tenga movimiento en el eje Y
     */
    chocaPala() {
        this.ball.setVelocityY(Phaser.Math.Between(-120, 120));
        this.audio_bounce_paddle.play(); // Activo el audio cuando la bola choque con la pala
    }

    /**
     * Cuando colisione la bola con el muro reproduzco el sonido
     */

    colisionMuro() {
        // Reproduce el sonido de la colisión
        this.audio_bounce_wall.play();
    }
}

export default Scene_play;
