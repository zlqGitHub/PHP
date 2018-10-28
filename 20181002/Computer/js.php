<?php

    //实现计算器的运算功能


    //接收表单提交的数据  $_POST
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $numone = $_POST['numone']; //接收第一个数并赋值给变量$numone

    $numtwo = $_POST['numtwo']; //接收第二个数并赋值给变量$numtwo

    $operator = $_POST['operator']; //接收运算符号并赋值给变量$operator

    // 判断输入的值是否为空


    if($numone == '')
    {
        header('Location:index.php?error=第一个数不能为空！');
        exit;//退出当前脚本
    }


    if($numtwo == '')
    {
        header('Location:index.php?error=第二个数不能为空！');
        exit;//退出当前脚本
    }

    if(!is_numeric($numone))
    {
        header('Location:index.php?error=第一个数非法！');
        exit;//退出当前脚本
    }


    if(!is_numeric($numtwo))
    {
        header('Location:index.php?error=第二个数非法！');
        exit;//退出当前脚本
    }

    //实现运算功能
    $result = 0;
    switch($operator)
    {
        case '+':
            //加
            $result = $numone + $numtwo;
            break;
        case '-':
            //减
            $result = $numone - $numtwo;
            break;
        case '*':
            //乘
            $result = $numone * $numtwo;
            break;
        case '/':
            //除
            if($numtwo == 0)
            {
                header('Location:index.php?error=除数不能为0！');
                exit;//退出当前脚本
            }
            $result = $numone / $numtwo;
            break;
    }

    // echo $result;
    //跳转到表单页面，同时将计算结果传递过去
    header("Location:index.php?r={$result}");
?>