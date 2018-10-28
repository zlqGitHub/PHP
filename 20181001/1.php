<?php
//PHP变量：$ 和变量名
//定义一个变量存储姓名
//如果变量存储的是字符串的话，必须使用引号围起来，成对出现。
    $name = "张利强";
    echo $name."<br>";
    $name = "zlq";
    echo $name."<br>";
//定义一个变量存储年龄
    $age = 21;
    echo $age."<br>";

    $title;
    $price = 20.66;
    echo gettype($price)."<br>";    //获取变量类型

    $s = "小s";
    $S = "大S";
    echo $S;

// 如果变量名由多个单词组成
    $newsList;   //骆驼命名法
    $news_list;     //下划线命名法

?>