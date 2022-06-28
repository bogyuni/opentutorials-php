<?php
// Load the stamp and the photo to apply the watermark to
$stamp = imagecreatefrompng('text.png');
$im = imagecreatefrompng('original.png');

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);
$posX = imagesx($im) - $sx - $marge_right;
$posY = imagesy($im) - $sy - $marge_bottom;


// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
imagecopy($im, $stamp, $posX, $posY, 0, 0, $sx, $sy);

// Output and free memory
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>