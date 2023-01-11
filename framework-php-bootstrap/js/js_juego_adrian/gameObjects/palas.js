class Palas extends Phaser.GameObjects.Sprite{
    constructor(scene, x, y, type){
        super(scene, x, y, type);
        scene.add.existing(this);
        scene.physics.world.enable(this); // Activar las físicas
        this.body.immovable = true; // Immovable hace que no se pueda mover
        this.body.setCollideWorldBounds(true); // Para que las palas no se salgan del cuadro
    }
}

export default Palas;