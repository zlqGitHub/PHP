<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		//判断表单提交方式
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			echo "POST方式提交！<br>";
		}else{
			echo "GET方式提交！<br>";
		}

		$name = $_POST['name'];
		echo $name."<br>";

		//复选框处理
		/*  先去判断是否选中，否则未选中时报错
		$achecked = $_POST['achecked'];
		$bchecked = $_POST['bchecked'];
		$cchecked = $_POST['cchecked'];
		*/
	
		if(isset($_POST['achecked'])){
			$achecked = $_POST['achecked'];
		}
		if(isset($_POST['bchecked'])){
			$achecked = $_POST['bchecked'];
		}
		if(isset($_POST['cchecked'])){
			$achecked = $_POST['cchecked'];
		}
	
		if(isset($achecked) && $achecked == 'A'){
			echo "A选项被选中<br>";
		}else{
			echo "A选项未被选中<br>";
		}
		if(isset($bchecked) && $bchecked == 'A'){
			echo "B选项被选中<br>";
		}else{
			echo "B选项未被选中<br>";
		}
		if(isset($cchecked) && $cchecked == 'A'){
			echo "C选项被选中<br>";
		}else{
			echo "C选项未被选中<br>";
		}

		//单选框处理
		$radio = $_POST['radio'];
		if($radio  == "蓝天"){    //变量与字符串是否相等直接用"=="
			echo "选中了蓝天<br>";
		}
		if($radio  == "白云"){
			echo "选中了白云<br>";
		}
		if($radio  == "大海"){
			echo "选中了大海<br>";
		}


	?>
	
</body>
</html>