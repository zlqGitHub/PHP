<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>类的声明和实例的生成</title>
</head>
<body>
	<?php 
		class guests{
			private $name;
			private $sex;

			function setname($name){
				$this->name=$name;  //$this是对类本身的引用，“->”链接类属性
			}
			function getname(){
				return $this->name;
			}

			function setsex($sex){
				$this->sex=$sex;
			}
			function getsex(){
				return $this->sex;
			}

		};

		$zlq = new guests;   //实例化一个的对象()
		$zlq->setname("张利强");
		$zlq->setsex("男");
		echo $zlq->getname()."\t".$zlq->getsex();


	?>

</body>
</html>