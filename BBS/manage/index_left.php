<?php
    include "session.inc";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理导航菜单</title>
    <script src="menu.js"></script>
    <link rel="stylesheet" href="left.css" type="text/css">
</head>
<body>
<!--后台管理主页面的左侧页面-->
<table width="180" align="center">
    <tr>
        <td class="menu_title" id="menuTitle0" height="26">
            &nbsp;&nbsp;<a href="Admin_Main.php" target="_top"><b><span class="glow">管理首页</span></b></a>
            <span class="glow"> | </span><a href="login.php" target="_top"><b><span class="glow">退出</span></b></a>
        </td>
    </tr>
    <tr>
        <td>
            <div style="width: 180px;border: #000 solid 1px">
                <table width="130" align="center">
                    <tr>
                        <td height="16">您的用户名：<?php echo @$_SESSION['manage_name']; ?></td>
                    </tr>
                    <tr>
                        <td height="16">您的身份：<?php echo @$_SESSION['manage_name']; ?></td>
                    </tr>
                    <tr>
                        <td height="16">IP：<?php echo $_SERVER['REMOTE_ADDR']; ?></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>


</body>
</html>