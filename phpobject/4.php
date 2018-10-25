<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>类的继承与接口</title>
</head>
<body>
	<?php
		class roomtypes{
			public $customertype;
			private $hotelname = "GoodHome";
			protected $rooomface = "适合所有人";

			function __construct(){
				$this->customertype = "everyonefit";
			}

			function telltype(){
				echo "此房间类型为".$this->customertype."。<br>";
			}

			function hotelface(){
				echo "此房间".$this->rooomface."。<br>";
			}

			//final关键字表示此类不能再继承、此方法不能再被覆写或重新定义
			final function welcomeshow(){   
				echo "欢迎光临".$this->hotelname."。<br>";
			}

		};

		//继承:子类拥有父类的公共属性和方法及自己独有的属性和方法
		class viproom extends roomtypes{
			function __construct(){
				$this->customertype = "vip";
			}

			function telltype(){    //对继承的方法进行覆写
				//__CLASS__变量代表当前类的名称
				echo "此".__CLASS__."房间类型为".$this->customertype."。<br>";

			}

		};

		//定义接口
		interface showprice{
			function showprice();
		};

		//实现接口
		class viproom2 extends roomtypes implements showprice{
			function __construct(){
				$this->customertype = "vip2";
			}
			//重写接口方法
			function showprice(){
				if(__CLASS__  == "superviprooms"){
					echo "价格高于500元。<br>";
				}
				else{
					echo "价格低于500元。<br>";
				}
			}
		};

		$room1 = new roomtypes;
		$room1->telltype();
		$room1->hotelface();
		$room1->welcomeshow();

		$room2 = new viproom;
		$room2->telltype();

		$room3 = new viproom2;
		$room3->telltype();   //使用继承的父类方法
		$room3->showprice();  //调用重写的接口方法

	?>
	
</body>
</html>