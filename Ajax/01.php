<?php
header('content-type:text/html,charset=utf-8');
//超全局变量：https://www.runoob.com/php/php-superglobals.html
//  $_GET 接收到的值是个数组
print_r($_GET);
echo $_GET['userName'];
echo $_GET['userPass'];
?>