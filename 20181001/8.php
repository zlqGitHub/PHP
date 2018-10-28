<?php
    // 选择结构语句
    // if 语句
    // if(小明如果考了100分)
    // {
    // 	带你去游乐园玩耍
    // }

    $chenji = 99;
    if($chenji==100)
    {
        echo "可以去游乐园玩耍";
    }
    // if … else 语句
    if($chenji==100)
    {
        echo "可以去游乐园玩耍";
    }
    else
    {
        echo "打屁股！";
    }
    // if … elseif …else 语句

    // date — 格式化一个本地时间／日期
    echo date('Y-m-d H:i:s');

    echo "<br>";

    $week = date('N');  //1~7

    if($week==1)
    {
        echo "今天是星期一";
    }
    elseif($week==2)
    {
        echo "今天是星期二";
    }
    elseif($week==3)
    {
        echo "今天是星期三";
    }
    elseif($week==4)
    {
        echo "今天是星期四";
    }
    elseif($week==5)
    {
        echo "今天是星期五";
    }
    elseif($week==6)
    {
        echo "今天是星期六";
    }
    elseif($week==7)
    {
        echo "今天是星期日";
    }
    else
    {
        echo "……………………………………";
    }
    // switch … case 语句

    /*
    switch(条件)
    {
        case 条件1:
            执行代码1
            break;
        case 条件2:
            执行代码2
            break;
        ……
    }
    */

    switch($week)
    {
        case 1:
            echo "今天是星期一";
            break;
        case 2:
            echo "今天是星期二";
            break;
        case 3:
            echo "今天是星期三";
            break;
        case 4:
            echo "今天是星期四";
            break;
        case 5:
            echo "今天是星期五";
            break;
        case 6:
            echo "今天是星期六";
            break;
        case 7:
            echo "今天是星期日";
            break;
        default:
            echo "………………………………";
            break;
    }

    // 例子：1~5 输出工作日，6~7 输出休息日。

    //在使用switch语句的时候，如果多个case条件后面执行的语句是一样的时候，可以考虑简写

    switch($week)
    {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "今天是工作日";
            break;
        case 6:
            echo "今天是休息日";
            break;
        case 7:
            echo "今天是休息日";
            break;
        default:
            echo "………………………………";
            break;
    }

?>