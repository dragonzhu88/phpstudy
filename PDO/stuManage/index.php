<html>
    <head>
        <title>Student infomation system</title>
    </head>
<body>
<center>
    <?php include ("menu.php");?>
    <h3>browse</h3>
    <table width="600" border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Class</th>
        <th>Opertion</th>
    </tr>

        <?php
        /**
         * Created by PhpStorm.
         * User: dragon
         * Date: 16-5-31
         * Time: 下午4:05
         */

        const DB_USER = 'root';
        const DB_PASS = '1';
        const DB_TABLE = 'stu.stuMsg';

        try{
            $pdo = new PDO("mysql:host=localhost;dbname=stu;",DB_USER,DB_PASS);
        }catch(PDOException $e){
            die("connect failed".$e->getMessage());
        }

        //print_r($pdo);
        $sql = sprintf("SELECT * FROM %s",DB_TABLE);
        $ret = $pdo->query($sql);
        $list = $ret->fetchAll(PDO::FETCH_ASSOC);

        foreach($list as $val){
            echo "<tr>";
            echo "<td>{$val['id']}</td>";
            echo "<td>{$val['name']}</td>";
            echo "<td>{$val['gender']}</td>";
            echo "<td>{$val['age']}</td>";
            echo "<td>{$val['classid']}</td>";
            echo "<td>
            <a href='javascript:doDel({$val['id']})'>delete</a>
            <a href='edit.php?id={$val['id']}'>edit</a>
</td>";
            echo "</tr>";
        }

        ?>


    </table>
</center>
</body>
</html>

<script>
    function doDel(id) {
        if(confirm('sure delete?')){
            window.location='action.php?action=del&id='+id;
        }
    }
    
</script>