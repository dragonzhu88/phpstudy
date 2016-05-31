<html>
<head>
    <title>Student infomation system</title>
</head>
<body>
<center>
    <?php include("menu.php");

        const DB_USER = 'root';
        const DB_PASS = '1';
        const DB_TABLE = 'stu.stuMsg';

        try{
            $pdo = new PDO("mysql:host=localhost;dbname=stu;",DB_USER,DB_PASS);
        }catch(PDOException $e){
            die("connect failed".$e->getMessage());
        }

        $id = $_GET['id'];
        $sql = sprintf("SELECT * FROM %s WHERE  id='%s'",DB_TABLE,$id);
        $ret = $pdo->query($sql);
        if($ret>0){
            $list = $ret->fetch(PDO::FETCH_ASSOC);
        }else {
            die("failed edit");
        }


    ?>
    <h3>Edit</h3>
    <form action="action.php?action=edit" method="post">
        <input type="hidden" name="id" value="<?php echo $list['id'];?>">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $list['name'];?>"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age" value="<?php echo $list['age'];?>"></td>
            </tr>
            <tr>
                <td>gender</td>
                <td>
                    <input type="radio" name="gender" value="1" <?php echo ($list['gender']=="1")?"checked":"";?>>man
                    <input type="radio" name="gender" value="2" <?php echo ($list['gender']=="2")?"checked":"";?>>woman
                </td>
            </tr>
            <tr>
                <td>classid</td>
                <td><input type="text" name="classid" value="<?php echo $list['classid'];?>"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" value="edit">
                    <input type="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>
</center>

</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 16-5-31
 * Time: 下午4:06
 */


