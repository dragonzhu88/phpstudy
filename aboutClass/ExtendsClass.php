<?php

/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-5-25
 * Time: 下午5:16
 */
class ExtendsClass extends ClassTest
{
    public function __construct()
    {
        echo "extends class construct";
    }

    public function testPrint(){
        parent::testPrint();
       // echo "this is extends class output";
    }

}