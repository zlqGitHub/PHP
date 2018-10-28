<?php
    //打印函数
    function p($var,$bool=false)
    {
        if($bool)
        {
            var_dump($var);
            return;
        }

        //判断变量如果是标量类型的
        if(is_scalar($var))
        {
            echo $var."<br>";
        }

        //判断变量如果是数组类型
        if(is_array($var))
        {
            echo "<pre>";
            print_r($var);
            echo "</pre>";
        }
    }

    // 函数内部使用函数外部的变量

    // 1、在函数内部在变量前面加 global 关键字。

    $m = 100;//全局变量
    $n = 200;//全局变量

    function demo()
    {
        global $m,$n;
        p($m);
        p($n);
    }

    demo();

    // 使用预定义变量 $GLOBALS 。

    $x = 300;

    // p($GLOBALS);

    function test()
    {
        p($GLOBALS['m']);
    }

    test();

    p($m,true);

?>