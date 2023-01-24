<?php

//INSERTAR EN EL FORMULARIO DE REGISTRO

session_start();

// Generate a random string for the captcha
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$captchaString = '';
for ($i = 0; $i < 6; $i++) {
    $captchaString .= $characters[rand(0, $charactersLength - 1)];
}

// Store the captcha string in the session
$_SESSION['captcha_string'] = $captchaString;

// Create the image
$image = imagecreatetruecolor(200, 50);
$backgroundColor = imagecolorallocate($image, 255, 255, 255);
$textColor = imagecolorallocate($image, 0, 0, 0);
imagefilledrectangle($image, 0, 0, 200, 50, $backgroundColor);

// Add the captcha string to the image
imagettftext($image, 20, 0, 75, 25, $textColor, 'arial.ttf', $captchaString);

// Output the image
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);