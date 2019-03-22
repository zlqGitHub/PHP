<?php
    //如果结果中有中文，必须在PHP文件顶部设置
    //header("content-type:text/html;charset=utf-8");
    //如果PHP中需要返回xml数据，同样必须在文件顶部设置
    header("content-type:text/xml;charset=utf-8");
    echo file_get_contents("10.xml");
?>