<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-5-25
 * Time: 下午5:30
 */

echo time();
echo "<br>";

echo date_default_timezone_get();
echo date('Y-m-d H:i:s');
echo "<br>";

date_default_timezone_set('Asia/Shanghai');
echo date_default_timezone_get();
echo date('Y-m-d H:i:s');
echo "<br>";

echo date('Y-m-d H:i:s',time());
echo "<br>";

echo date('Y-m-d H:i:s','2000');