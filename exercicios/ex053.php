<?php 
    header("Content-Type: image/png");

    $img = imagecreate(1080, 720);
    $black = imagecolorallocate($img, 0, 0, 0);
    $red = imagecolorallocate($img, 255, 0, 0);

    imagestring($img, 5, 380, 350, 'Imagem criada por meio da biblioteca GD', $red);
    imagepng($img);
    imagedestroy($img);
?>