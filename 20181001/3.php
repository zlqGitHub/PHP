<?php
    header("Content-type:text/html;charset=utf-8");
// PHP数据类型 ：8种
// 四种标量类型：字符串型、整型、浮点型、布尔型
    $title = "可以平凡，不可以平庸";
    var_dump($title);
    echo $title;

    $age = 21;
    var_dump($age);

    $price = 21.88;
    var_dump($price);

    $bool = true;
    var_dump($bool);
    echo $bool;  //输出1

    $bool = false;
    var_dump($bool);

//两种复合类型：数组和对象
    $arr = array("香蕉","苹果","葡萄");
    var_dump($arr);

//定义一个Person类
    class Person{
        public $name;
        public $age;
        function  say() {
            echo "我在说话";
        }

    }

    $people = new Person();
    $people->say();
    var_dump($people);

    $people2 = new Person();
    $people2->name = "张利强";
    echo $people2->name;
    var_dump($people2);

// 两种特殊类型：资源和NULL

    $link = @mysql_connect('localhost','root','');

    var_dump($link);

    $null = NULL;
    var_dump($null);


?>