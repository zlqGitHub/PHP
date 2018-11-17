<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="inc/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--新用户注册页面-->
    <?php
        include "inc/mysql.inc";
        include "inc/myfunction.inc";
        include "inc/head.php";
        $aa = new mysql();
        $bb = new myfunction();
        $aa->link("");
        include "inc/total_info.php";
    ?>

    <table width="98%" border="0" align="center">
        <tr>
            <!--<a href="#">是链接到本页，因为你有的时候需要有个链接的样式，但是又不希望他跳转-->
            <!--<a href="./">是跳转到index.php 首页中-->
            <td width="73%" height="30"><a href="./"> 迅捷 BBS 系统</a>>>新用户注册</td>
            <td width="27" align="center" valign="middle"><a href="new_note.php">new_note.php</a></td>
        </tr>
    </table>

    <table width="98%" border="0" align="center" bgcolor="#FFFFFF">
        <tr>
            <td height="25" align="center" valign="middle" bgcolor="#5F8AC5">发布新帖</td>
        </tr>
        <tr>
            <td height="25" align="center" valign="middle">
                <?php
                //接收提交表单内容检验数据库是否已经存在此用户,不存在写入数据库
                $tijiao = @$_POST['user_name'];
                if($tijiao == "提交"){
                    $user_name = @$_POST['user_name'];
                    $query = "select * from user_info where user_name='$user_name'";
                    $rst = $aa->excu($query);
                    if(mysqli_num_rows($rst) != 0){
                        echo "***您注册的用户名已经存在，请选择其他用户名重新注册！***";
                    }
                    else{
                        $user_pw1 = $_POST['user_pw1'];
                        $user_pw2 = $_POST['user_pw2'];
                        if($user_pw1 != $user_pw2){
                            echo "***您输入的两次密码不匹配，请重新输入***";
                        }
                        else{
                            $today = date("Y-m-d H:i:s");
                            $query = "insert into user_info (user_name,user_pw,time1) values ('$user_name','$user_pw1','$today')";
                            $rst = $aa->excu($query);
                            if($rst){
                                echo "***恭喜您，注册成功！请<a href='./'>返回主页</a>登录***";
                                $register_tag=1;
                            }
                        }
                    }

                }
                //显示注册表单
                if(@$register_tag != 1){    //@符号防止报错
                    ?>
                    <form action="#" name="form1" method="post">     <!-- # 表示提交到当前页面-->
                        <table width="500" border="0" cellpadding="0" cellspacing="2">
                            <tr>
                                <td width="122" height="26" align="right" valign="middle" bgcolor="#CCCCCC">用户名：</td>
                                <td width="372" height="26" align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="user_name"></td>
                            </tr>
                            <tr>
                                <td width="122" height="26" align="right" valign="middle" bgcolor="#CCCCCC">密码：</td>
                                <td width="372" height="26" align="left" valign="middle" bgcolor="#CCCCCC"><input type="password" name="user_pw1"></td>
                            </tr>
                            <tr>
                                <td width="122" height="26" align="right" valign="middle" bgcolor="#CCCCCC">用户名：</td>
                                <td width="372" height="26" align="left" valign="middle" bgcolor="#CCCCCC"><input type="password" name="user_pw2"></td>
                            </tr>

                            <tr>
                                <td height="26" colspan="2" align="center" valign="middle" bgcolor="#CCCCCC">
                                    <input type="submit" name="tijiao" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="reset" name="reset" value="重置">
                                </td>
                            </tr>

                        </table>

                    </form>
                    <?php
                }
                ?>
            </td>
        </tr>
        <tr>
            <td height="1" bgcolor="#CCCCCC"></td>
        </tr>

    </table>

    <?php
        include "inc/foot.php";
    ?>

</body>
</html>