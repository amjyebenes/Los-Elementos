<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tower 3D Game</title>
    <?php include("includes/head-tag-contents.php");?>
    <link rel="stylesheet" href="./css_juegos/juego_miguel_main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cannon.js/0.6.2/cannon.min.js" integrity="sha512-avLcnGxl5mqAX/wIKERdb1gFNkOLHh2W5JNCfJm5OugpEPBz7LNXJJ3BDjjwO00AxEY1MqdNjtEmiYhKC0ld7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.147.0/three.min.js" integrity="sha512-GWXLkqxMENYgBdQvA/lTeOV+R2auhasgKQxjMTWBFt3Z6GJVZ9owiyAMOzz0Wt6J1ri8bf/g2kHJV0uvWpJTuw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="title">
        <h1 class="display-1">Tower Game</h1>
    </div>
    <div class="goBack">
        <a href="index.php">Volver a Inicio</a>
    </div>
    <div class="parallax-bg" style="transform: translateY(0px);"></div>
    <div class="con-score">
        <h1 class="score">0</h1>
    </div>
    <div class="con-gamemode">
        <h1 class="gamemode-title">Selecciona modo de juego</h1>
        <div class="list">
            <span>
                <p id="normal">Normal</p>
            </span>
            <span>
                <p id="hell">Hell</p>
            </span>
            <span>
                <p id="swing">Swing</p>
            </span>
            <span>
                <p id="speed">Speed</p>
            </span>
        </div>
    </div>
    <div class="con-restart">
        <h1>Has perdido</h1>
        <a href="">Volver a jugar</a>
    </div>
    <script type="module" src="js/js_juego_miguel/app.js"></script>
</body>
</html>