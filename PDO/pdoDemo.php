<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 16-5-30
 * Time: 下午11:19
 */
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '1';
const DB_DATABASENAME = 'study';
const DB_TABLENAME = 'study.phpstudy';

$pdoDsnString = sprintf("mysql:host=%s;dbname=%s",DB_HOST,DB_DATABASENAME);


try{
 //   $pdo = new PDO($pdoDsnString,DB_USER,DB_PASS); //first
    $pdo = new PDO("uri:mysqlPdo.conf",DB_USER,DB_PASS); //second
    $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,1);

}catch (PDOException $e){
    die("failed to connect db".$e->getMessage());

}

echo $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT)."<br>";
echo $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION)."<br>";
print_r($pdo);