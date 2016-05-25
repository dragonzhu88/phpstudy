<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-5-25
 * Time: 下午7:19
 */

$img = imagecreatefrompng('CreateImg.png');

imagestring($img, 5,5 ,5 ,'dragon' ,imagecolorallocate($img, 255,0 ,0 ) );

header('Content-type: image/png');
imagepng($img);