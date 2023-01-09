class Scene_end extends Phaser.Scene {
    constructor() {
        super({ key: "Scene_end" });
    }

    create() {
        // Agrega un título al centro de la pantalla
        let title = this.add.text(this.sys.game.config.width / 2, 150, '¡Fin del juego!', { fontSize: '30px', fill: '#fff', fontFamily: "verdana, arial, sans-serif" });
        title.setOrigin(0.5);

        // Agrega un botón para volver al menú principal
        let button = this.add.text(this.sys.game.config.width / 2, 250, 'Volver a Jugar', { fontSize: '22px', fill: '#0f0', fontFamily: "verdana, arial, sans-serif" });
        button.setOrigin(0.5);
        button.setInteractive();
        button.on('pointerdown', function () {
            this.scene.start("Scene_play");
        }, this);
    }

}




export default Scene_end;