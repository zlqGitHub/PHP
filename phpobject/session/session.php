<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="success.php" method="post">
        用户名：<input type="text" name="username" value="<?php echo @$_COOKIE['user'] ?>"><br>
        密码：<input type="password" name="password" value="<?php echo @$_COOKIE['pass'] ?>"><br>
        <input type="submit" value="登录">

    </form>

</body>
</html>