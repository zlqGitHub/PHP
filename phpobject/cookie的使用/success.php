<?php

    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
//        echo $username . "<br>";
//        echo $password . "<br>";
        echo "登录成功!<br>";
        //            setcookie();设置cookie  存在有效期
        setcookie("user", $username, time() + 3600);
        setcookie("pass", $password, time() + 3600);
    }

?>
<a href="cookie.php">返回</a>
