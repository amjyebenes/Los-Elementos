import Bootloader from './bootloader.js';
import Scene_play from './scenes/scene_play.js';
import Scene_end from './scenes/scene_end.js';
const config = {
    width: 740,
    height: 500,
    parent: "contenedor-pong", // El parent debe ser con un id del HTML de lo contrario puede producir errores
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
