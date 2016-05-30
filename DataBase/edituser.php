<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 16-5-30
 * Time: 下午7:19
 */


const DB_HOST = '127.0.0.1:3306';
const DB_USER = 'root';
const DB_PASS = '1';
const DB_DATABASENAME = 'study';
const DB_TABLENAME = 'study.phpstudy';

if(!isset($_POST['id'])){
    die('id not set');
}

if(!isset($_POST['name'])){
    die('name not set');
}

if(!isset($_POST['age'])){
    die('age not set');
}

$conn = mysql_connect(DB_HOST,DB_USER,DB_PASS);
if($conn){
    echo 'connect successed';
    mysql_select_db(DB_DATABASENAME);
}
else{
    echo 'connect failed';
}

$id = intval($_POST['id']);
$name = $_POST['name'];
$age = $_POST['age'];

$sql = sprintf("SELECT * FROM %s ",DB_TABLENAME);
$result = mysql_query($sql,$conn);
$rowsNum = mysql_num_rows($result);

echo "<br>".'Before'."<br>";
while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
    print_r($row);
}

$arr = mysql_fetch_assoc($result);

$sql = sprintf("UPDATE %s SET name='%s' ,age='%s' WHERE id = %d",DB_TABLENAME,$name,$age,$id);
echo "<br>".$sql;
$result = mysql_query($sql);

if(mysql_errno()){
    die('can not connect db');
}

$sql = sprintf("SELECT * FROM %s ",DB_TABLENAME);
$result = mysql_query($sql);

echo "<br>".'After'."<br>";
while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
    print_r($row);
}