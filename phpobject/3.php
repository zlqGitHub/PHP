<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>访问函数</title>
</head>
<body>
	<?php
		class guests{
			// public $property;  公用属性

			// __set、 __get函数对属性进行封装
			function __set($propName,$propValue){
				$this->$propName = $propValue;
			}

			function __get($propName){
				return $this->$propName;
			}

		};

		$zlq = new guests;
		//$zlq可以直接添加属性并赋值,相当于调用了__set函数
		$zlq->name = "张利强";
		$zlq->gender = "男性";

		//echo命令使用对象属性，相当于调用了__get函数
		echo $zlq->name."是".$zlq->gender;

	?>
	
</body>
</html>