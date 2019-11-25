<?php

session_start();

require "vendor/autoload.php";

use Google\Cloud\Vision\VisionClient;

$vision = new VisionClient(['keyFile' => json_decode(file_get_contents('axial-sunup-244209-23e60c20989a.json'), true)]);

$familyPhotoResource = fopen($_FILES['image']['tmp_name'], 'r');

$image = $vision->image($familyPhotoResource, ['FACE_DETECTION', 'WEB_DETECTION']);
$result = $vision->annotate($image);

if ($result){
    $imagetoken = random_init(11111111, 999999999);
    move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/feed/' . $imagetoken . ".png"); 
}else{
    header("location: index.php");
    die();
}