<?php
	header('content-type:text/html;charset=utf-8');
	$user = "张利强 中北大学";
	$link1 = "index.php?userid=".urldecode($user)."<br>";
	$link2 = "index.php?userid=".rawurldecode($user)."<br>";
	echo $link1,$link2;
	echo urldecode($link1);
	echo urldecode($link2);
	echo rawurldecode($link2);


?>