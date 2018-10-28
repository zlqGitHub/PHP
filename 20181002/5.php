<?php
    //PHP的两种赋值及两种函数传参
//1、传值赋值
    $a = 10;
    $b = $a;
    echo $b."<br>";

// 2、引用赋值
    $c = 20;
    $d = &$c;
    echo $d."<br>";



    //1、普通传参,原来的值不变
    function demo($m)
    {
        $m = 100;
    }

    $m = 200;
    demo($m);

    echo $m;

    echo "<br>";


    //2、引用传参(传地址)，原来的值改变

   function test(&$n){
       $n = 10;
   }

   $n = 20;

   test($n);

   echo $n;

?>