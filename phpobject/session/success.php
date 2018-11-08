<?php

    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
            echo $username . "<br>";
            echo $password . "<br>";
        echo "登录成功!<br>";
        //            setcookie();设置cookie  存在有效期
        session_start();
        $_SESSION["user"] = $username;
        $_SESSION["pass"] = $password;
        $param = session_get_cookie_params();
        var_dump($param );
        var_dump($_SESSION);
        var_dump($_SESSION["user"]);
        setcookie("user",$_SESSION["user"],time()+30);
        setcookie("pass",$_SESSION["pass"],time()+30);
    }

?>
    <a href="session.php">返回</a>
