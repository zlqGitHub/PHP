<?php
//两张图片合成的应用
    header("content-type:image/jpg");
    $path1 = imagecreatefrompng("./images/1fpZNgQIcxoZKhXZ.png");  //从URL新建图像
    $path2 = imagecreatefromjpeg("./images/header.jpg");
    $image = imagecreatetruecolor(420,420);   //新建一个真彩图像
    $color = imagecolorallocate($image,73,186,255);  //为图像分配颜色
    imagefill($image,0,0,$color);    //区域填充

//    imagecolortransparent($image,$color);
//imagecopyresampled重采样拷贝部分图像并调整大小
    imagecopyresampled($image,$path2,0,0,0,0,420,420,959,959);
//imagecopymerge拷贝并合并图像的一部分
    imagecopymerge($image,$path1,0,0,0,0,420,420,100);

    imagejpeg($image);  //在浏览器中显示
    imagejpeg($image,"./images/newHeader".rand(0,9).".jpg");    //生成文件
//    var_dump($path1);
//    var_dump($path2);




?>