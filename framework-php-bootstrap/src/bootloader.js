class Bootloader extends Phaser.Scene {
  constructor() {
    super({ key: "Bootloader" });
  }
  preload() {
    // Cuando este completo vamos a llamar a una función para cargar la escena
    this.load.on("complete", () => {
      // Para cargar la escena play
      this.scene.start("Scene_play");
    });

    // Para cargar el fondo de pantalla que es un video
    this.load.video("fondo", "../assets/img/vecteezy_line-neon.mp4");

    // Para cargar la imagen con el nombre y la url
    this.load.image("ball", "../assets/img/ball.png");
    this.load.image("left_paddle", "../assets/img/paddle_izq.png");
    this.load.image("right_paddle", "../assets/img/paddle_der.png");
    this.load.image("separator", "../assets/img/dividing-line-2.png");

    // Para cargar los audios
    this.load.audio("bounce_paddle", "../assets/img/bounce-paddle.wav");
    this.load.audio("bounce_wall", "../assets/img/bounce-wall.wav");
    this.load.audio("missed_ball", "../assets/img/missed-ball.wav");
  }
}

export default Bootloader;
