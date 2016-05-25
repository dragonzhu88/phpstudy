
<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-5-25
 * Time: 下午5:44
 */
//JSON format
//[
//    1,2,5,7,8,"hello",[6,7,8]
//]
//
//{
//    "h":"hello","w":"world",[1,2,3]
//}


//encode json
echo "encode";
echo "<br>";
$arr = array(1,2,5,8,'Hello','dragon',array('h'=>'hello','name'=>'dragon'));
print_r($arr);

echo "<br>";
echo json_encode($arr);

echo "<br>";
$obj = array('h'=>'hello','w'=>'world',array(1,2,3));
echo json_encode($obj);

//decode
echo "<br>";
echo "decode";
echo "<br>";
$jsonStr = '{"h":"hello","w":"world","0":[1,2,3]}';
$obj = json_decode($jsonStr);
print_r($obj);

echo $obj->h;
