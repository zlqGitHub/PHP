<?php
    // PHP常量
    //自定义常量  define()函数
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    echo HOST;

//    mysql_connect() 函数打开非持久的 MySQL 连接。
    $link = @mysql_connect(HOST,USER,PASS);  //@符号用来排除错误
    var_dump($link);

    //预定义常量
    // M_PI：圆周率
    echo M_PI;
    // __FILE__ ：获取php程序文件名
    echo "<br>";
    echo __FILE__;
    echo "<br>";
    // __LINE__ ：获取PHP程序文件当前的代码行数
    echo __LINE__;
    // PHP_VERSION：获取当前PHP版本号
    echo "<br>";
    echo PHP_VERSION;
    // PHP_OS：获取当前PHP版本的操作系统名称
    echo "<br>";
    echo PHP_OS;
?>