<?php 
    $img = imagecreatefrompng('../assets/images/php.png');
    $titleColor = imagecolorallocate($img, 0, 0, 0);

    imagestring($img, 5, 620, 230, utf8_decode("Linguagem de Programação"), $titleColor);
    header('Content-Type: image/png');
    imagepng($img);
    imagedestroy($img);
?>