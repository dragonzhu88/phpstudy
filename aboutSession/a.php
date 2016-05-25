<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-5-25
 * Time: 下午7:48
 */

session_start();

if(isset($_SESSION['name'])){
    echo $_SESSION['name'];
}else{
    echo 'name not found';
}