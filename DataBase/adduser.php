<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 16-5-30
 * Time: 下午3:56
 */

const DB_HOST = '127.0.0.1:3306';
const DB_USER = 'root';
const DB_PASS = '1';
const DB_DATABASENAME = 'study';
const DB_TABLENAME = 'study.phpstudy';

echo 'enter';

if(!isset($_POST['name'])){
    die('user name not set');
}

if(!isset($_POST['age'])){
    die('user age not set');
}

$userName = $_POST['name'];
$userAge = $_POST['age'];

echo $userName;
echo $userAge;

$conn = mysql_connect(DB_HOST,DB_USER,DB_PASS);
if($conn){
    echo 'connect successed';
    mysql_select_db(DB_DATABASENAME);
}
else{
    echo 'connect failed';
}
$sql = sprintf("SELECT * FROM %s",DB_TABLENAME);
$result = mysql_query($sql,$conn);
echo "<br>";
while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
    print_r($row);
}

$sql = sprintf("INSERT INTO %s(name,age) VALUES ('%s','%s')",DB_TABLENAME,$userName,$userAge);
mysql_query($sql);

$sql = $sql = sprintf("SELECT * FROM %s",DB_TABLENAME);
$result = mysql_query($sql,$conn);
echo "<br>";
while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
    print_r($row);
}

