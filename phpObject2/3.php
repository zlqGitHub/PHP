<?php
    //构造方法:它会在在实例化对象时自动调用，用于对类中的成员进行初始化。

    //定义一个人类 Person
    class Person{
        //成员属性
        var $name;
        var $age;
        var $sex;

        //定义一个构造方法，用于实例化的时候为成员属性初始化
        public function __construct($name,$age,$sex){
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
        }

        //成员方法
        //定义一个说话的方法
        function say(){
            echo "我叫".$this->name."性别".$this->sex."我今年".$this->age."岁。<br>";
        }
    }

    $p1 = new Person('张利强',21,"男");

    $p1->say();


    $p2 = new Person('小丽',20,"女");

    $p2->say();


?>