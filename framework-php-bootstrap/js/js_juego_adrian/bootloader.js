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
    this.load.video("fondo", "../assets/assets_juego_adrian/vecteezy_line-neon.mp4");

    // Para cargar la imagen con el nombre y la url
    this.load.image("ball", "../assets/assets_juego_adrian/ball.png");
    this.load.image("left_paddle", "../assets/assets_juego_adrian/paddle_izq.png");
    this.load.image("right_paddle", "../assets/assets_juego_adrian/paddle_der.png");
    this.load.image("separator", "../assets/assets_juego_adrian/dividing-line-2.png");

    // Para cargar los audios
    this.load.audio("bounce_paddle", "../assets/assets_juego_adrian/bounce-paddle.wav");
    this.load.audio("bounce_wall", "../assets/assets_juego_adrian/bounce-wall.wav");
    this.load.audio("missed_ball", "../assets/assets_juego_adrian/missed-ball.wav");
  }
}

export default Bootloader;
