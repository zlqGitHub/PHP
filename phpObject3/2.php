<?php

    //私有成员的访问：__set() 、 __get()

    //定义一个人类 Person
    class Person
    {
        public $name; //定义一个name成员属性存储人的姓名
        private $age;  //定义一个age成员属性存储人的年龄,并且私有化
        private $telphone;//定义一个telphone成员属性存储人的电话号码

        //构造方法
        function __construct($name,$age,$telphone)
        {
            $this->name 	= $name;
            $this->age  	= $age;
            $this->telphone = $telphone;
        }

        //声明一个__get()：为了获取私有成员属性值，参数只能是一个
        public function __get($key)
        {
            if($key == "age")
            {
                return;
            }
            return $this->$key;
        }

        //申明一个__set()：为了给私有成员属性赋值，参数必须是两个
        public function __set($key,$value)
        {
            if($value<0 || $value >100)
            {
                return;
            }
            $this->$key = $value;
        }

        public function say()
        {
            echo "我叫".$this->name."我今年".$this->age."岁。";
        }
    }

    $p1 = new Person("张利强",21,"15513268481");

    echo $p1->telphone;
    echo $p1->age;

//$p1可以直接添加属性并赋值,相当于调用了__set函数
    $p1->age = 200;

    echo $p1->age;

?>