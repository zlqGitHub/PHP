<?php
    include "session.inc";
?>

<html>
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
    <frameset id="frame" cols="200,*" scrolling="yes">
        <frame name="left" src="index_left.php" scrolling="yes">
        <frameset rows="53,*,50" cols="*" scrolling="yes">
            <frame name="top" src="index_top.php" scrolling="no">
            <frame name="main" src="index_right.php">
            <frame name="bottom" src="index_bottom.php">
        </frameset>

    </frameset>
</html>