<?php
	//文件的读取
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

	@$fp = fopen("$DOCUMENT_ROOT/PHP/phpfiel/userInfo12.txt","rb");   //1.打开文件,@符号用来排除错误(当文件不存在时)

	if(!$fp){
		echo "没有订房信息<br>";
		exit();  
	}

	while (!feof($fp)) {    //feof() 函数检测是否已到达文件末尾 
		# code...
		$order = fgets($fp);    //fgets()函数读取文件内容,用于从文件读取单行
		echo $order."<br>";
	}

	fclose($fp);

	
?>