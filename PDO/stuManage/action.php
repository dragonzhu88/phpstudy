'<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 16-5-31
 * Time: 下午4:06
 */

const DB_USER = 'root';
const DB_PASS = '1';
const DB_TABLE = 'stu.stuMsg';

try{
    $pdo = new PDO("mysql:host=localhost;dbname=stu;",DB_USER,DB_PASS);
}catch(PDOException $e){
    die("connect failed".$e->getMessage());
}

//operaiton

switch($_GET['action']){
    case "add":
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $classid = $_POST['classid'];

        $sql = sprintf("INSERT into %s VALUES(NULL,'%s','%s','%s','%s')",DB_TABLE,$name,$age,$gender,$classid);
        $ret = $pdo->exec($sql);
        if($ret>0){
            echo "<script>alert('add successfully');window.location='index.php'</script>";
        }else{
            echo "<script>alert('add failed');window.history.back()</script>";
        }
    break;

    case "del":
        $id=$_GET['id'];
        $sql = sprintf("DELETE FROM %s WHERE id='%s'",DB_TABLE,$id);
        $pdo->exec($sql);
        header("Location:index.php");
    break;

    case "edit":
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $classid = $_POST['classid'];
        $id = $_POST['id'];

        $sql = sprintf("UPDATE %s SET name='%s',age='%s',gender='%s',classid='%s' WHERE id='%s'",DB_TABLE,$name,$age,$gender,$classid,$id);
        $ret = $pdo->exec($sql);
        if($ret>0){
            echo "<script>alert('edit successfully');window.location='index.php'</script>";
        }else{
            echo "<script>alert('edit failed');window.history.back()</script>";
        }
    break;

}