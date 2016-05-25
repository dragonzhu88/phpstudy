<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-5-25
 * Time: 下午7:11
 */

$img = imagecreate(400,300 );
imagecolorallocate($img, 200,200 ,200 );

imageellipse($img,200 ,200 , 50, 50,imagecolorallocate($img,255 ,0 ,0 ) );
imageline($img, 200,200 , 50,20 , imagecolorallocate($img, 0,0 ,0 ));


header('Content-type: image/png');
imagepng($img);