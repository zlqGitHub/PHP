<?php
//论坛的总信息文件
    //@session_start();
    //用户登录并注册SESSION
    if(isset($_POST['tijiao'])){
        $tijiao = $_POST['tijiao'];
    }
    //在此处无需实例化类,在index中已存在
    if(@$tijiao == '提交'){
        $user_name = @$_POST['user_name'];
        $user_pw = @$_POST['user_pw'];
        $check_query = "select * from user_info where user_name='".$user_name."'";
        $check_rst = $aa->excu($check_query);
        $user = mysqli_fetch_array($check_rst);
        if($user_pw == $user['user_pw']){
            $_SESSION['user_name'] = $user['user_name'];
            $today = date("Y-m-d H:i:s");
            $query = "update user_info set time2='".$today."' where user_name='".$_SESSION['user_name']."'";
            $aa->excu($query);
        }

    }
    if(@tijiao == "安全退出"){
        $_SESSION['user_name']="";
    }
?>

<table width="98%" border="0" align="center" cellspacing="1" cellpadding="0">
    <tr>
        <form id="form1" name="form1" method="post" action="#">
            <td width="80%" height="25" align="left" valign="middle" bgcolor="#5F8AC5">&nbsp;
                <?php
                    if(@$_SESSION['user_name'] != ""){
                        echo "<font color='#ffffff'>欢迎您".$_SESSION['user_name']."</font>";
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type='submit' value='安全退出' name='titiao'/>";
                    }
                    else{
                ?>
                        用户名：<input type="text" name="user_name" size="8"/>
                        密码：<input type="password" name="user_pw" size="8"/>
                        <input type="submit" name="tijiao" value="提交"/>
                        &nbsp;&nbsp;<a href="register.php"><font color="#FFFFFF">我要注册</font></a>
                    <?php
                    }
                    ?>
            </td>
        </form>

        <td width="20%" align="center" valign="middle" bgcolor="#5F8AC5">
            <?php
                $today = date("Y-m-d H:i:s");
                echo $today;
            ?>
        </td>
    </tr>
    <tr>
        <td height="25" colspan="2" align="right" valign="middle">
            帖子总数：<?php echo $bb->note_total_num(); ?>&nbsp;&nbsp;
            会员总数：<?php echo $bb->user_total_num(); ?>&nbsp;&nbsp;
            欢迎新会员：<?php echo $bb->last_username(); ?>&nbsp;&nbsp;
        </td>
    </tr>

    <tr>
        <td height="13" colspan="2" align="right" valign="middle">&nbsp;</td>
    </tr>

</table>
