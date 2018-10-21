<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>测试GD库是否能用</title>
</head>
<body>
	<?php
		if(extension_loaded('gd')){
			echo "你可以使用gd<br>";
			foreach (gd_info() as $cate => $value) {
				echo "$cate: $value<br>";
				# code...
			}
		}else{
			echo "你没有安装gd库";
		}

	?>

	
</body>
</html>