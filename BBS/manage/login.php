<?php
    include "../inc/mysql.inc";
    include "../inc/myfunction.inc";
    $aa = new mysql();
    $bb = new myfunction();
    $aa->link("");
    $_SESSION['manage_name'] = "";
    $_SESSION['manage_tag'] = "";

?>

<head>
    <style>
        <!--
            td{
                font-size: 10pt;
            }
        -->
    </style>
    <title>:::管理员登录==迅捷 BBS 系统:::</title>
</head>

<body>
    <br>
    <div align="center">
        <center>
            <form action="auth.php">
                <table border="1" bordercolor="#111111" width="240">
                    <tr>
                        <td width="238" colspan="2" height="25" bgcolor="#A8A3AD">
                            <p align="center"><b><font color="#FFFFFF">迅捷 BBS 后台管理系统</font></b></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="64" height="26" bgcolor="#E3E1E6">
                            <p align="center">账&nbsp;号：</p>
                        </td>
                        <td height="26" width="173">
                            <input type="text" name="username" size="20" style="color: #A8A3AD;border-style: solid;border-width: 1;padding-left: 4;padding-top: 1;padding-bottom: 1;">
                        </td>
                    </tr>
                    <tr>
                        <td width="64" height="26" bgcolor="#E3E1E6">
                            <p align="center">密&nbsp;码：</p>
                        </td>
                        <td height="26" width="173">
                            <input type="password" name="password" size="20" style="color: #A8A3AD;border-style: solid;border-width: 1;padding-left: 4;padding-top: 1;padding-bottom: 1;">
                        </td>
                    </tr>


                </table>

            </form>
        </center>
    </div>

</body>



