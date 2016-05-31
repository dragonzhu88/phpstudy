<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 16-5-31
 * Time: 上午11:28
 */

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '1';
const DB_DATABASENAME = 'study';
const DB_TABLENAME = 'study.phpstudy';

//create PDO
try{
    $pdo = new PDO("uri:mysqlPdo.conf",DB_USER,DB_PASS);
}catch (PDOException $e){
    die('can not connect db'.$e->getMessage());
}

//execute PDO
$sql = sprintf("SELECT * FROM %s",DB_TABLENAME);
//foreach($pdo->query($sql) as $val){
//    echo $val['id']."----".$val['name'];
//}

$res = $pdo->query($sql);
$list = $res->fetchAll(PDO::FETCH_ASSOC);
print_r($list);

//insert data
$id = 4;
$name = 'zdc';
$age = '66';

$sql = sprintf("INSERT INTO %s VALUES('%d','%s','%s')",DB_TABLENAME,$id,$name,$age);
$res = $pdo->exec($sql);
if($res){
    echo 'insert successed';
}

$id = 2;
$sql = sprintf("DELETE FROM %s WHERE id=%d",DB_TABLENAME,$id);
$res = $pdo->exec($sql);
if($res){
    echo 'delete successed';
}

$name = 'fff';
$id = 1;
$sql = sprintf("UPDATE %s SET name='%s' where id='%d' ",DB_TABLENAME,$name,$id);
$res = $pdo->exec($sql);
if($res){
    echo 'update sucessed';
}

$sql = sprintf("SELECT * FROM %s",DB_TABLENAME);
$stmt = $pdo->query($sql);
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($list);