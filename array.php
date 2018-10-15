<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>数组的实战演习</title>
</head>
<body>
	<?php 
		//=>为数组赋值
		$arr1 = array
				(
					'0' => 'aaa', 
					'2' => 'bbb',
					'1' => 'ccc'
				);
		for($i=0;$i<count($arr1);$i++){
			echo "$arr1[$i]<br>";
		}

		echo "<br>";

		$arr2 = array('1111',2222,3333);
		for($j=0;$j<count($arr2);$j++){
			echo "$arr2[$j]<br>";
		}

		echo "<br>";

		$arr3[0][0] = 12;
		$arr3[0][1] = 23;
		$arr3[1][0] = 34;
		$arr3[1][1] = 45;

		echo $arr3[0][0].'<br><br>';
		for($p=0;$p<count($arr3);$p++){
			for($q=0;$q<count($arr3[$p]);$q++){
				// $arr4 = each($arr3[$p]);
				// echo "$arr4[value]";
				echo $arr3[$p][$q]."<br>";
			}
		}

	?>
	
</body>
</html>