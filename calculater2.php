<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP计算机的实现</title>
</head>
<body>
	<?php 
		$num1 = '';
		$num2 = '';
		$op = '';
		$result = '';
		$tip = '';
		
		/*表单的提交方式
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			echo "POST方式的提交";
		}
		if ($_SERVER['REQUEST_METHOD']=="GET") {
		 	echo "GET方式的提交";
		}
		*/
		

		if ($_SERVER['REQUEST_METHOD']=="POST") { //判断是否为POST请求
			# code...
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$op = $_POST['op'];
			if(is_numeric($num1) && is_numeric($num2)){
				switch ($op) {
				case '+':
					$result = $num1 + $num2;
					break;
				case '-':
					$result = $num1 - $num2;
					break;
				case '*':
					$result = $num1 * $num2;
					break;
				case '/':
					if($num2 == 0){
						$tip = "除数不能为0！";
						break;
					}
					$result = $num1 / $num2;
					break;			
				default:
					break;
				}

			}else{
				$tip = "请输入数字";
			}
			
		}
		

	?>

	<font color="red"> <?php echo "$tip"; ?> </font>
	<form action="calculater2.php" method="post" name="calculater">
		<input type="text" name="num1" value="<?php echo $num1 ?>">
		<select name="op">
			<option value="+" <?php if($op == "+") echo "selected" ?> >+</option>
			<option value="-" <?php if($op == "-") echo "selected" ?> >-</option>
			<option value="*" <?php if($op == "*") echo "selected" ?> >*</option>
			<option value="/" <?php if($op == "/") echo "selected" ?> >/</option>
		</select>
		<input type="text" name="num2" value="<?php echo $num2 ?>">
		<input type="submit" value="=" name="submit">
		<input type="text" value="<?php echo $result ?>">
	
	
	</form>
	
</body>
</html>