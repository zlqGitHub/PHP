<?php
    //PHP 回调函数：一个函数的参数是一个函数。

    //案例：在0-100的整数中，通过自定义条件过滤不要的数字。
    
    //定义一个过滤函数，在0-100的整数中，通过自定义的条件来过滤

    function filter($func)
    {
        for($i=0;$i<=100;$i++)
        {
            if($func($i))
            {
                continue;
            }
            echo $i."<br>";
        }
    }

    //定义一个one函数，过滤掉所有偶数
    function one($x)
    {
        return $x%2 == 0;
    }

    //定义一个two函数，过渡掉所有是3倍数的数
    function two($x)
    {
        return $x%3 == 0;
    }

    filter("one");

    echo "……………………………………………………………………<br>";

    filter("two");


?>