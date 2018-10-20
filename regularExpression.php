<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>正则表达式</title>
</head>
<body>
	<?php 
		//使用正则对字符串进行匹配
		$email = "zhangliqiang1997@qq.com";
		$email2 = "The email is zlq_1997@qq.com";
		$email3 = "This is zlq_1997@qq";

		$regex = '^[a-zA-Z0-9_.]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9.]+$';
		$regex2 = '[a-zA-Z0-9_.]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9.]+$';
		$regex3 = '[a-zA-Z0-9_.]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9.]+$';

		if(eregi($regex, $email,$a)){
			echo "This is a email:";
			print_r($a);
			echo "<br>";
		}
		else{
			echo "This isn't a email!<br>";
		}

		if(eregi($regex2, $email2,$a)){
			echo "This is a email:";
			print_r($a);
			echo "<br>";
		}
		else{
			echo "This isn't a email!<br>";
		}

		if(eregi($regex3, $email3)){
			echo "This is a email<br>";
		}
		else{
			echo "This isn't a email!<br>";
		}

		//使用正则替换字符串子串
		$searchurl = "这是搜索引擎链接：https://www.baidu.com";
		echo ereg_replace("(https://)([a-zA-Z0-9_.]+)", "<a href='\\0'>\\0</a>", $searchurl)."<br>";
		echo ereg_replace("(https://)([a-zA-Z0-9_.]+)", "<a href='\\2'>\\2</a>", $searchurl)."<br>";

		//使用正则切分字符串
		$someinput = "1509874021@qq.com";
		$arr = split("@|\.|0", $someinput);//"@|\.|0"表示已@，0，.将字符串分割
		print_r($arr);


	?>
	
</body>
</html>