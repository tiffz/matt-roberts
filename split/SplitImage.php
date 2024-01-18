<?php

$imageFile = 'wedding';
$source = imagecreatefrompng($imageFile);
list($width,$height,$type, $attribute) = getimagesize($imageFile);
$splitInt = '100';

$modWidth = $width % $splitInt;
$modHeight = $height % $splitInt;

	if($modWidth > 0) {
		$newWidth = intval($width / $splitInt) * $splitInt + 100;
	}
	else {
		  $newWidth = $width;
		 }

	if ($modHeight > 0) {
	        $newHeight = intval($height / $splitInt) * $splitInt + 100;
	} 
	else {
	        $newHeight = $height;
	    }
    
    if ($width > 1200) {
        $width = 1200;
        $newWidth = 1200;
    }

    $xComponent = intval($newWidth / $splitInt);
    $yComponent = intval($newHeight / $splitInt);

    /*

    $newImage = imagecreatetruecolor($newWidth, $newHeight);
    $image = imagecreatefrompng($imageFile);

    imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
    imagepng($newImage, $imageFile, 100);

    

    $wintring = '';
    $imageNames = '';

    $source = imagecreatefrompng($imageFile);
    */
    $dest = imagecreatetruecolor($splitInt, $splitInt);

    for ($x = 0; $x < $xComponent; $x++) {
        for ($y = 0; $y < $xComponent; $y++) {
            $imageName = $imageFile."_".$x."_".$y; 
            imagecopy($dest, $source, 0, 0, $x * $splitInt, $y * $splitInt, $splitInt, $splitInt);
            imagepng($dest, $imageName.".png");
        }
    }
?>
