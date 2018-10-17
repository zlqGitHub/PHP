<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>时间大小的比较</title>
</head>
<body>
	<?php
		//mktime()将日期和时间解析为时间戳
		$time1 = mktime(0,0,0,4,4,1997);
		$time2 = mktime(0,0,0,6,1,1995);
		if ($time1 > $time2) {
			# code...
			echo "1997-4-4的时间戳比1995-6-1的时间戳大";
		}else if($time1 < $time2){
			echo "1997-4-4的时间戳比1995-6-1的时间戳小";
		}else{
			echo "两个时间的时间戳相等";
		}

	 ?>
</body>
</html>