<?php
    //实现登录功能

    //接收登录表单提交的数据

    // 超全局变量$_POST,本质上就是一个数组

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

     echo $_POST['username'];

    // 超全局变量$_GET,本质上就是一个数组

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    // echo $_GET['username'];
?>