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
<!--用户访问的主页-->
    <?php
    @session_start();
    include "inc/mysql.inc";
    include "inc/myfunction.inc";
    include "inc/head.php";
    $aa = new mysql();
    $bb = new myfunction();
    $aa->link("");
    include "inc/total_info.php";
    ?>

    <table class="indextemp" width="98%" border="0" align="center" bgcolor="#FFFFFF">
        <tr>
            <td width="50%" height="25" align="center" valign="middle" bgcolor="#5F8AC5">
                <span class="STYLE2">讨论区</span>
            </td>
            <td width="10%" align="center" valign="middle" bgcolor="#5F8AC5">
                <span class="STYLE2">主题</span>
            </td>
            <td width="10%" align="center" valign="middle" bgcolor="#5F8AC5">
                <span class="STYLE2">帖子</span>
            </td>
            <td width="20%" align="center" valign="middle" bgcolor="#5F8AC5">
                <span class="STYLE2">最新帖子</span>
            </td>
            <td width="10%" align="center" valign="middle" bgcolor="#5F8AC5">
                <span class="STYLE2">版主</span>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <?php
                    $query = "select * from father_module_info order by id";
                    $result = $aa->excu($query);
                    while($father_module = mysqli_fetch_array($result)){
                        ?>
                        <table width="100%" border="0">
                            <tr>
                                <td height="2" colspan="6" bgcolor="#98B2CC">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<img src="pic_sys/li-1.png" width="16" height="15">&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php echo $father_module['module_name']?>
                                </td>
                            </tr>
                            <?php
                                $query2 = "select * from son_module_info where father_module_id='".$father_module['id']."' order by id";
                                $result2 = $aa->excu($query2);
                                while ($son_module = mysqli_fetch_array($result2)){
                                    ?>
                                    <tr>
                                        <td width="5%" height="40" align="center" valign="middle">
                                            <img src="pic_sys/li-2.png" width="32" height="32">
                                        </td>
                                        <td width="45%" align="left" valign="middle">
                                            <?php
                                                echo "<b><a class='a' href='module_list.php?module_id=".$son_module['id']."'><font color='#0000ff'>".$son_module['module_name']."</font></a></b><br>";
                                                echo $son_module['module_cont'];
                                            ?>
                                        </td>
                                        <td width="10%" align="center" valign="middle">
                                            <?php echo $bb->son_module_idtonote_num($son_module['id']); ?>
                                        </td>
                                        <td width="10%" align="center" valign="middle">
                                            <?php echo $bb->son_module_idtonote_num2($son_module['id']); ?>
                                        </td>
                                        <td width="20%" align="center" valign="middle">
                                            <?php echo $bb->son_module_idtolast_note($son_module['id']); ?>
                                        </td>
                                        <td width="10%" align="center" valign="middle">
                                            <?php echo $bb->son_module_idtouser_name($son_module['id']); ?>
                                        </td>

                                    </tr>
                                    <?php
                                }
                            ?>
                        </table>
                        <?php
                    }
                ?>
            </td>
        </tr>

    </table>

    <?php
        include "inc/foot.php";
    ?>

</body>
</html>