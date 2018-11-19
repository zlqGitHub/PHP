<?php
//检验Session是否存在的页面
    @session_start();
    if($_SESSION['manage_name'] == "" && $_SESSION['manage_tag'] != 1){
    header("location:./login.php");
}

?>