<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-5-25
 * Time: 下午7:45
 */

session_start();
$_SESSION['name']='dragon';

session_destroy();
header('Location:a.php');
//echo session_id();
