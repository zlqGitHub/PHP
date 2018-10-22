<?php

	header("content-type:text/html;charset=UTF-8");
	$theimage = imagecreatefromjpeg("id.png");  //从当前路径下读取id.jpg图片文件
	$color = imagecolorallocate($theimage, 230,22,22);

	imagestring($theimage, 5, 0, 0, "China", $color);  //向对象图片添加字符串
	imagestring($theimage, 5, 50, 35, "China", $color);
	imagestring($theimage, 5, 100, 70, "China", $color);  
	imagestring($theimage, 5, 150, 115, "China", $color); 
	imagestring($theimage, 5, 200, 150, "China", $color); 
	imagestring($theimage, 5, 250, 185, "China", $color); 


	header('content-type:image/png');
	imagepng($theimage);
	imagepng($theimage,"newid.png");

	imagedestroy($theimage)


?>
	
