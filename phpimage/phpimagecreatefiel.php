<?php
	// 图像文件的创建方法
	$ysize = 200;
	$xsize = 300;

	$theimage = imagecreatetruecolor($xsize,$ysize);

	$color1 = imagecolorallocate($theimage, 8, 2, 133);
	$color2 = imagecolorallocate($theimage, 230, 22, 22);

	imagefill($theimage, 0, 0, $color1);
	imagearc($theimage, 150, 100, 200, 150, 0, 360, $color2);  //画椭圆弧

	imagejpeg($theimage,"newimage.jpeg");
	//以JPEG的格式将图像输出到浏览器或文件，并将其直接存储在当前的路径下

	header('content-type:image/jpeg');
	imagepng($theimage);
	imagedestroy($theimage);


?>