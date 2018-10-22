<?php
	//使用TrueType字体处理中文生成的图片
	$xsize = 300;
	$ysize = 200;

	$theimage = imagecreatetruecolor($xsize, $ysize);

	$color = imagecolorallocate($theimage,8,2,133);
	$color2 =imagecolorallocate($theimage, 230, 22, 22);

	imagefill($theimage, 0, 0, $color);
	$fontname = 'C:\Windows\Fonts\fzstk.ttf';  //确认当前目录下字体的ttf文件
	$fontname2 = 'C:\Windows\Fonts\stcaiyun.ttf';

	// imagestring($theimage, 5, 10, 10, "张利强", $color2);
	imagettftext($theimage, 18, -30, 5, 15, $color2, $fontname, "张利强");
	imagettftext($theimage, 20, 0, 100, 100, $color2, $fontname2, "张利强");

	header('content-type:image/png');

	imagepng($theimage);

	imagedestroy($theimage);

?>