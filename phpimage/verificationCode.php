<?php
    //4位验证码的生成
    header('content-type:text/html;charset=utf-8');
    $xsize = 70;
    $ysize = 20;

    $theiamge = imagecreatetruecolor($xsize, $ysize);
    $color = imagecolorallocate($theiamge,245,246,247);  //画布填充色
    $color2 = imagecolorallocate($theiamge,39,40,34);  //验证码颜色

    $code = "";   //存放验证码
    //rand(0,9)随机生成0-9直接的数
    for ($i=0; $i < 4; $i++) { 
        # code...
        // $code .= rand(0,9);
        $code = $code.rand(0,9)." ";
    }

    imagestring($theiamge, 5, 2, 0, $code, $color2);

    imagefill($theiamge, 0, 0, $color);


    header('content-type:image/png');
    imagepng($theiamge);

    imagedestroy($theiamge);



?>