<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>构造函数</title>
</head>
<body>
	<?php
		class guests{
			private $name;
			private $sex;
			//构造函数
			function __construct($name,$sex){
				$this->name = $name;
				$this->sex = $sex;
			}
			function getname(){
				return $this->name;
			}

			function getsex(){
				return $this->sex;
			}

		};
		$zlq = new guests("张利强","男");   //实例化一个的对象()
	
		echo $zlq->getname()."\t".$zlq->getsex();
		echo "string";


	?>
</body>
</html>