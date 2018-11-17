<?php
//论坛页面相关文件：head.php
//用$_SESION之前必须要session_start()，php 配置文件里有 可以设置 session.auto_start =1 这样就不需要调用session_start()，直接就能使用session
@session_start();  //创建新会话或者重用现有会话
?>

<style>
<!--    /* <!-- -->在css样式里边的意思就是css的开头<!--  结尾-->  */
    @font-face {
        font-family: 'Hanyihei';
        src: url("inc/hanyihei.ttf").format("truetype");
        font-style: normal;
    }
    @font-face {
        font-family: 'Minijanxixingkai';
        src: url("inc/minijanxixingkai.ttf").format("truetype");
        font-style: normal;
    }
    .STYLEI1{
        font-family: Hanyihei;
        font-size: 36px;
        color: #024f6c;
    }
    .STYLEI2{
        font-family: Hanyihei;
    }

-->
</style>

<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="60" bgcolor="#f0b604"><span class="STYLEI1">&nbsp;&nbsp;迅捷 BBS 系统</span></td>
    </tr>
    <tr>
        <td height="2"></td>
    </tr>

</table>