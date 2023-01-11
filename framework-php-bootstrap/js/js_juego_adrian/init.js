import Bootloader from './bootloader.js';
import Scene_play from './scenes/scene_play.js';
import Scene_end from './scenes/scene_end.js';
const config = {
    width: 640,
    height: 400,
    parent: "container",
    type: Phaser.AUTO, /*En auto el navegador puede coger canvas o webgl.*/
    physics: { // El tipo de fisicas del juego
        default: "arcade",
    },
    scene: [
        Bootloader,
        Scene_play,
        Scene_end
    ]
}

var game = new Phaser.Game(config);
