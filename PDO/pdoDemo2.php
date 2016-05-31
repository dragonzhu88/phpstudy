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
$stmt = $pdo->query($sql);
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($list);

//decode data
foreach($list as $val){
    echo $val['id']."----".$val['name']."<br>";
}

//release resource
$stmt = null;
$pdo = null;