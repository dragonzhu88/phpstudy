<?php

/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-5-25
 * Time: 下午1:26
 */
class ClassMethodTest
{
    /**
     * ClassMethodTest constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->_data = $data;
        echo ClassMethodTest::$staticVal;

        ClassMethodTest::$staticVal++;

        if(ClassMethodTest::MAX_NUM<ClassMethodTest::$staticVal){
            throw new Exception('Max numer');
        }
    }


    public function getData(){
        return $this->_data;
    }

    public function setData($data){
        $this->_data = $data;
    }

    public static function staticMethod(){
        echo "<br>static method";
    }

    const MAX_NUM = 200;
    private $_data;
    private static $staticVal = 0;

}