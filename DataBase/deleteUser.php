<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 16-5-30
 * Time: 下午8:13
 */

const DB_HOST = '127.0.0.1:3306';
const DB_USER = 'root';
const DB_PASS = '1';
const DB_DATABASENAME = 'study';
const DB_TABLENAME = 'study.phpstudy';

if(!isset($_POST['id'])){
    die('id not set');
}

$id = $_POST['id'];

$conn = mysql_connect(DB_HOST,DB_USER,DB_PASS);
mysql_select_db(DB_DATABASENAME);

$sql = sprintf("DELETE FROM %s WHERE id=%s",DB_TABLENAME,$id);
$result = mysql_query($sql);

$sql = sprintf("SELECT * FROM %s",DB_TABLENAME);
$result = mysql_query($sql);

while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
    print_r($row);
}