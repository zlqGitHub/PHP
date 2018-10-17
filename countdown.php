<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>倒计时功能的实现</title>
</head>
<body>
	<?php
		date_default_timezone_set("PRC");
		$timestampfuture = mktime(0,0,0,1,1,2019);
		$timestampnow = time();
		// echo $timestampnow;
		// round()函数去约数，得到天数
		$timecount = round(($timestampfuture - $timestampnow)/60/60/24);
		echo "今天是".date("Y-m-d").",距离2019-1-1还有".$timecount."天";

	?>
	
</body>
</html>