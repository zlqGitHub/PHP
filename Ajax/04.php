<?php
//    echo "post page";
    print_r($_POST);
    echo "<br>";
    print_r($_FILES);
    echo "<br>";
    //1.获取上传文件对应的字典即对象
    $fileInfo = $_FILES['upFile'];
    print_r($fileInfo);
    echo "<br>";

    //2.获取上传文件的名称
    $fileName = $fileInfo["name"];
    echo $fileName;
    echo "<br>";
    //3.获取上传文件保存的临时路劲
    $filePath = $fileInfo["tmp_name"];
    echo $filePath;

    //4.移动文件  http://www.w3school.com.cn/php/func_filesystem_move_uploaded_file.asp
    //  注意：PHP中字符串的连接使用 "."
    move_uploaded_file($filePath,"./sources/.$fileName");

?>