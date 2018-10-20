<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>字符串的练习</title>
</head>
<body>
	<?php
		//字符串的长度（一个中文字符占3个，一个英文字符占1个）
		$someinput = "我叫张利强，我的长度是多少呢？";
		$someinput2 = "abcdefg";
		echo strlen($someinput)."<br>";
		echo strlen($someinput2)."<br>";

		//字符串单词长度的统计（str_word_count（）函数无法计算中文字符）
		$someinput3 = "This is the book";
		echo str_word_count($someinput3)."<br>";
		$someinput4 = "山西省太原市";
		echo str_word_count($someinput4)."<br>";

		//清理字符串的空格
		$someinput5 = "  张利强  ";
		echo "我叫".$someinput5."End<br>";
		echo "我叫".trim($someinput5)."End<br>";
		echo "我叫".ltrim($someinput5)."End<br>";
		echo "我叫".rtrim($someinput5)."End<br>";

		//字符串的切分和组合 
		$someinput6 = "How_to_split_this_sentance.";
		$someinput7 = "把 这个句子 按空格 拆分。";
		print_r(explode("_", $someinput6));
		echo "<br>";
		$b = explode(" ", $someinput7);
		print_r(explode(" ", $someinput7));
		echo "<br>";
		echo implode("",$b);  //将数组合并
		echo "<br>";

		//字符串的截取
		$someinput8 = "asdfjas;fjafha";
		echo substr($someinput8,2,2)."<br>";

		//字符串的替换
		$someinput9 = "ID:123456";
		echo substr_replace($someinput9, " *******", 3,6)."<br>";
		echo substr_replace($someinput9,"尾号为",3,2)."<br>";

		//字符串的查找
		$someinput10 = "我有一个梦想，能够找到理想";
		echo strstr($someinput10, "梦想");

	?>
	
</body>
</html>