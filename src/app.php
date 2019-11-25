<?php
namespace Google\Cloud\Samples\Vision;

use Google\Cloud\Vision\V1\ImageAnnotatorClient;

// $path = 'path/to/your/image.jpg'
$_ENV["GOOGLE_APPLICATION_CREDENTIALS"] = "axial-sunup-244209-23e60c20989a.json";

function detect_label($path)
{
    $imageAnnotator = new ImageAnnotatorClient();

    # annotate the image
    $image = file_get_contents($path);
    $response = $imageAnnotator->labelDetection($image);
    $labels = $response->getLabelAnnotations();

    if ($labels) {
        print("Labels:" . PHP_EOL);
        foreach ($labels as $label) {
            print($label->getDescription() . PHP_EOL);
        }
    } else {
        print('No label found' . PHP_EOL);
    }

    $imageAnnotator->close();
}
