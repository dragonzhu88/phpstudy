<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-5-26
 * Time: 上午11:09
 */

//ge_info
$gdInfo;
$gdInfo = gd_info();
print_r($gdInfo);
echo "<br>";
echo "<br>";
echo json_encode($gdInfo);

//get picture size
echo "<br>";
echo "<br>";
$img = 'CreateImg.png';
$size = getimagesize($img);
print_r($size);

//get picture size from string
echo "<br>";
echo "<br>";
$data       = file_get_contents($img);
$size_info2 = getimagesizefromstring($data);
print_r($size_info2);