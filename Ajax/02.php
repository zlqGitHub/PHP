<?php
header('content-type:text/html,charset=utf-8');
//超全局变量：https://www.runoob.com/php/php-superglobals.html
print_r($_POST);
echo $_POST['userName'];
echo $_POST['userPass'];
?>