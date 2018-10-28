<?php
    //PHP中可变函数，又称为变量函数
    //可变变量
    $hello = "world";
    $world = "hello";

    echo $$world." ";
    echo $$hello."<br>";

    $func = "demo";

    function demo(){
        echo "demo";
    }

    function test(){
        echo "test";
    }

//在 PHP 中，如果一个变量后面跟上圆括号，程序会尝试执行与变量的值同名的函数。调用函数
    $func();


?>