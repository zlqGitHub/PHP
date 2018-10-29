<?php
    //特殊的对象引用 $this，
    //代表当前对象，类似表达“我自己”的意思，用于完成对象内部成员之间的访问

    //定义一个人类 Person
    class Person{
        //成员属性
        var $name;
        var $age;
        var $sex;

        //成员方法
        //定义一个说话的方法
        function say(){
            echo "我叫".$this->name."性别".$this->sex."我今年".$this->age."岁。";
            $this->run();
        }

        //定义一个跑的方法
        function run(){
            echo "我正在跑步";
        }
    }

    $p1 = new Person(); //类的实例化创建了一个对象

    $p1->name = "张利强";
    $p1->sex = "男";
    $p1->age = 21;
    $p1->say();

    $p2 = new Person();

    $p2->name = "小丽";
    $p2->sex = "女";
    $p2->age = 20;
    $p2->say();

?>