<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>日期和时间的练习</title>
</head>
<body>
	<?php  
		//设置时区
		date_default_timezone_set("PRC");
		//时间戳
		$t1 = time();
		echo "$t1 <br>";

		//当前的时间
		echo "目前的时间为：<br>";
		echo date(" Y 年 m 月 d 日  [l]  H 时 i 分 s a 秒",$t1)." <br>";
		echo date("Y-M-D  H:I:S",$t1)." <br>";
		echo date("Y-m-d  H:i:s",$t1)." <br>";
		echo date("Y",$t1)."<br>";

		//将格式化时间转换为时间戳
		$t2 = "2018-10-16 20:00:00";
		$t3 = strtotime($t2);
		echo "该时刻的时间戳为:$t3<br>";
		$arr1 = getdate($t3);  //返回一个数组
		echo $arr1["year"]."<br>";
		print_r($arr1);    //print_f输出数组

		//将日期和时间解析为时间戳
		$t4 = mktime(15,08,25,10,17,2018);
		echo $t4;

	?>
	
</body>
</html>
