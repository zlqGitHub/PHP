<?php

    $path_2 = "./image/a1e340eccc9eaf7b.jpg";  //获取两张图片的路径

    $path_1 = "./image/d409c772cd85445b.jpg";

    $image_1 = imagecreatefromjpeg($path_1);   //从JPEG文件或URL新建一图像
//    var_dump($image_1);
    $image_2 = imagecreatefromjpeg($path_2);

    $image_3 = imagecreatetruecolor(imagesx($image_1),imagesy($image_1));  //新建一个真彩色图像
//    var_dump($image_3);
//    var_dump(imagesx($image_1));

    $color = imagecolorallocate($image_3, 242,116,210);
    imagefill($image_3, 0, 0, $color);
    header('content-type:image/jpg');//定义输出的文件时image的jpg格式

    imagecolortransparent($image_3, $color);    //将某个颜色定义为透明色
//imagecopyresampled重采样拷贝部分图像并调整大小
    //imagecopyresampled($image_3,$image_1,50,50,30,30,imagesx($image_1),imagesy($image_1),imagesx($image_1),imagesy($image_1));
    imagecopyresampled($image_3,$image_1,0,0,0,0,imagesx($image_1),imagesy($image_1),imagesx($image_1),imagesy($image_1));

//    imagejpeg($image_3);
//    imagecopymerge($image_3,$image_2, 20,20,0,0,200,200, 100);
//imagecopymerge拷贝并合并图像的一部分
    imagecopymerge($image_3,$image_2, 25,25,25,30,200,200, 100);
    imagejpeg($image_3);
    //将画布保存到指定的gif文件
    imagejpeg($image_3, "./image/hero_gam.jpg");


?>