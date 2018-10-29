<?php
    //定义一个人类 Person

    class Person{
        var $name;//定义一个姓名属性
        var $age;//定义一个年龄属性
        //定义一个说话的方法
        function say($title){
            echo "我正在说话".$title;
        }
    }

    //对象创建
    $p1 = new Person;  //类的实例化结果
    var_dump($p1);

    //对象成员的访问

    //$对象名->成员属性;
    //$对象名->成员方法([参数列表]);
    echo $p1->name;  //访问对象的姓名属性，什么也没有
    echo $p1->age;  //访问对象的年龄属性，什么也没有

    $p1->name = "张利强";  //为对象的性别属性设置值

    echo $p1->name."<br>";//张利强

    $p2 = new Person; //类的实例化结果
    $p2->say("你好 ！");
    var_dump($p2);

?>