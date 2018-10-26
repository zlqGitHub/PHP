<?php
	//文件数据写入
	date_default_timezone_set("PRC");   //设定为北京时间
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];     //通过超全局数组$_SERVER来确定本系统文件的根目录  D:/wamp/www/
	echo $DOCUMENT_ROOT."<br>";

	$username = trim($_POST['username']);
	$gender = $_POST['gender'];
	$arrivaltime = $_POST['arrivaltime'];

	$telphone = trim($_POST['telphone']);
	$email = trim($_POST['email']);

	if ($gender == "男") {
		# code...
		$gender = "先生";
	}else{
		$gender = "女士";
	}

	// echo $username."\t".$gender.",您的订房信息已经保存。我们会通过email和电话和您联系。<br>";

	$date = date("H:i:s Y m d");    //获取当前时间
	$string_to_be_added = $date."\t".$username."\t".$gender."\t将在".$arrivaltime."天后到达"."\t联系电话：".$telphone."\tEmail：".$email."\n";   //"\n"换行符
	// echo $string_to_be_added;

	// 文件处理:1、打开文件  2、从文件中读取数据或向文件中写入数据  3、关闭文件
	// $fp = fopen("D:/wamp/www//PHP/phpfiel/userInfo2.txt", "ab"); 
	$fp = fopen("$DOCUMENT_ROOT/PHP/phpfiel/userInfo.txt", "ab");     //"ab"表示写入数据为二进制格式

	if(fwrite($fp, $string_to_be_added)){
		echo $username."\t".$gender.",您的订房信息已经保存。我们会通过email和电话和您联系。<br>";
	}else{
		echo "信息存储出现错误！";
	}

	fclose($fp);

?>