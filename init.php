<?php

require "vendor/autoload.php";

use Google\Cloud\Vision\VisionClient;
$vision = new VisionClient(['keyFile' => json_decode(file_get_contents('axial-sunup-244209-23e60c20989a.json'), true)]);

$familyPhotoResource = fopen("anuncio.png", 'r');

$image = $vision->image($familyPhotoResource, ['FACE_DETECTION', 'WEB_DETECTION']);
$result = $vision->annotate($image);

var_dump($result);
