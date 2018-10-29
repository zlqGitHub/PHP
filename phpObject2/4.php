<?php
    //析构方法：销毁对象之前被自动调用，用于完成清理工作，比如释放内存。

    //定义一个人类 Person
    class Person{
        //成员属性
        var $name;
        var $age;
        var $sex;

        //构造方法
        public function __construct($name,$age,$sex){
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
        }

        //析构方法:析构方法不带任何参数，否则出错,对象销毁之前自动被调用。
        function __destruct(){
            echo "……………………………………";
        }

        //成员方法
        //定义一个说话的方法
        function say(){
            echo "我叫".$this->name."性别".$this->sex."我今年".$this->age."岁。<br>";
        }

    }

    $p1 = new Person("牛嘉浩",21,"男");

    $p1->say();

?>