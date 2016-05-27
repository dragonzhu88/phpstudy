<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-5-26
 * Time: 下午3:51
 */
const DB_HOST = '127.0.0.1:3306';
const DB_USER = 'root';
const DB_PASS = '1';
const DB_DATABASENAME = 'study';
const DB_TABLENAME = 'Study.phpstudy';

$dbColArray = array('id','name','age');

$conn = mysql_connect(DB_HOST,DB_USER,DB_PASS) or die('connect failed'.mysql_error());
mysql_select_db(DB_DATABASENAME);

$sql = sprintf("SELECT COUNT(*) FROM %s",DB_TABLENAME);
$result = mysql_query($sql,$conn);
if($result){
    $count = mysql_fetch_row($result);
}else{
    die("query failed");
}

echo "the number of the table is $count[0]<br>";

$sql = sprintf("SELECT %s FROM %s",implode(",",$dbColArray ),DB_TABLENAME);
$result = mysql_query($sql,$conn);

while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
    echo "<tr>";
    $tdstr='';
    foreach ($dbColArray as $td){
        $tdstr .="<td>$row[$td]</td>";
        echo $tdstr;
        echo "</tr>";
    }

}

