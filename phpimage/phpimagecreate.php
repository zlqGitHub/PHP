<?php
		// 图像文件的创建方法
		$ysize = 300;
		$xsize = 200;

		$theimage = imagecreatetruecolor($xsize, $ysize);  //创建画布
		$color1 = imagecolorallocate($theimage, 249,38,114);  //在画布上选定颜色
		$color2 = imagecolorallocate($theimage, 8, 2, 133);

		imagefill($theimage, 0, 0, $color2);  //对画布填充颜色
		imageline($theimage, 0, 0, $xsize, $ysize, $color1);  //在画布内画线

		header('content-type:image/png');   //定义输出的文件时image的png格式

		imagepng($theimage);    //生成$theimage画布中的所有内容

		imagedestroy($theimage);  //清楚$theimage对象

?>

	