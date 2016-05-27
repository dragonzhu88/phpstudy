<html>
<body>

<table style='text-align: left;'border='1'
<tr><th> id</th><th> name</th><th> age</th></tr>


<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-5-27
 * Time: 下午7:30
 */

const DB_HOST = '127.0.0.1:3306';
const DB_USER = 'root';
const DB_PASS = '1';
const DB_DATABASENAME = 'study';
const DB_TABLENAME = 'Study.phpstudy';

function connectDb(){
    return mysql_connect(DB_HOST,DB_USER,DB_PASS);
}

$conn = connectDb();
mysql_select_db(DB_DATABASENAME);
$sql = sprintf("SELECT * FROM %s ORDER BY id DESC ",DB_TABLENAME);
$result = mysql_query($sql,$conn);
$dataCount = mysql_num_rows($result);
echo $dataCount;

for($i=0;$i<$dataCount;$i++){
    $result_arr = mysql_fetch_assoc($result);
    print_r($result_arr);

    $id = $result_arr['id'];
    $name = $result_arr['name'];
    $age = $result_arr['age'];

  //  echo "<tr><td> $id</td><td> $name</td><td> $age</td></tr>";
    ?>
    <tr><td><?php echo $id?></td><td><?php echo $name?></td><td><?php echo $age?></td></tr>
<?php
}
?>  
</table>
</body>
</html>

