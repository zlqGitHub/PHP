<?php
    //PHP自定义函数：函数的定义和调用

    //函数的定义 function关键字
    /*
        function 函数名([参数1,参数2,…])
        {
            //函数体
        }
    */

    say("么么哒"); //当前脚本中函数一旦定义，可以任意调用！

    function say($text,$num=5)
    {
        for($i=1;$i<$num;$i++)
        {
            echo $text."<br>";
        }
    }

    //函数的调用
    say('I WANT YOU!',8);




?>