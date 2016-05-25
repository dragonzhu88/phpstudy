<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-5-25
 * Time: 下午1:12
 */

require_once 'ClassTest.php';
require_once 'NamespaceTest.php';
require_once 'ClassMethodTest.php';
require_once 'ExtendsClass.php';

$classTest = new ClassTest();
$classTest->testPrint();

$classTest = new \NamespaceTest\ClassTest();
$classTest->testPrint();

$classMethodTest = new ClassMethodTest(10);
echo "<br>";
echo $classMethodTest->getData();
echo "<br>";
$classMethodTest->setData(20);
echo $classMethodTest->getData();

//for($i=1;$i<300;$i++){
//    new ClassMethodTest(10);
//}

//for($i=1;$i<200;$i++){
//    new ClassMethodTest(10);
//}

$classMethodTest = new ExtendsClass();

$classMethodTest->testPrint();
$classMethodTest->fatherMethod();
