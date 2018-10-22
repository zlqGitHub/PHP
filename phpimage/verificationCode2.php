<?php
	//4位验证码的生成(完善版)
	$xsize = 60;
	$ysize = 20;

	$theiamge = imagecreatetruecolor($xsize,$ysize);

	$color = imagecolorallocate($theiamge,243,243,245);   //填充颜色
	$color2 = imagecolorallocate($theiamge,210,33,71);    //验证码颜色
	$color3 = imagecolorallocate($theiamge,191,150,98);  //随机产生点的颜色

	imagefill($theiamge, 0, 0, $color);

	$code = "";
	for($i = 0; $i < 4; $i++){
		$code = $code.rand(0,9);
	}

	for ($j=0; $j < 100; $j++) {    //在画布上随机产生点，其干扰作用
		# code...
		imagesetpixel($theiamge, rand(0,60), rand(0,20), $color3);
	}

	$x = rand(3,8);
	for ($i=0; $i < 4; $i++) {    //让字符在一定范围内波动随机生成
		# code...
		$y = rand(1,6);
		imagestring($theiamge, 5, $x, $y, substr($code, $i,1), $color2);
		$x += rand(10,14);
	}

	header('content-type:image/png');
	imagepng($theiamge);
	imagedestroy($theiamge);

?>