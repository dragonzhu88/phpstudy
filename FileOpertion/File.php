<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-5-25
 * Time: 下午6:01
 */

//write data

//$file = fopen('data','w');
//
//if($file){
//fwrite($file,'Hello php');
//fclose($file);
//}else{
//    echo 'fail to create file';
//}
//
//echo 'ok';

//read data

$file = fopen('data','r');
//$content = fgets($file); //only read one line
//echo $content;

//while(!feof($file)){
//    $content = fgets($file); //only read one line
//    echo $content;
//}

echo file_get_contents('data');

fclose($file);