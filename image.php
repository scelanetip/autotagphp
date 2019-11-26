<?php

session_start();

$imagetoken = $_GET['token'];
$faces = $_SESSION['faces'][$imagetoken];

$image = imagecreatefromjpeg("feed/" . $imagetoken . ".jpg");
$white = imagecolorallocate($image, 0, 0, 0);
// Set the line thickness to 5
imagesetthickness($image, 8);

foreach ($faces as $key => $face){
    $face = json_decode($face);
    //var_dump($face);
    $faceColorR = $_SESSION['faces']['colors'][$key][0];
    $faceColorG = $_SESSION['faces']['colors'][$key][1];
    $faceColorB = $_SESSION['faces']['colors'][$key][2];

    foreach ($face as $part){
        $x = $part[0]->x;
        $y = $part[0]->y;
        $wx = $part[1]->x;
        $wy = $part[2]->y;

        imagerectangle($image, $x, $y, $wx, $wy, imagecolorallocate($image, $faceColorR, $faceColorG, $faceColorB));
    }
}

header("Content-type: image/jpeg");
imagejpeg($image);
imagedestroy($image);