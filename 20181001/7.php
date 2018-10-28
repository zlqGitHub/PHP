<?php
    //PHP变量检测：isset()和empty()
    // isset()：判断变量是否存在，如果存在就为真，如果不存在就为假。

    // empty()：判断变量是否为空，如果为空就为真，如果不为空就为假。

//PHP中变量不存在包括两种情况：null 和 未定义。
// 变量值为空的情况包括：空字符串、空数组、0、false、 ‘0’、null、变量不存在。

    $a1 = 0; 	  	//整数0
    $a2 = '0'; 	  	//字符串0
    $a3 = null;   	//NULL类型
    $a4 = 'null'; 	//字符串null
    $a5 = '';     	//空字符串
    $a6 = false;  	//布尔假
    $a7 = array();  //空数组
    $a8 = array(array()); //二维数组

    echo "<p>isset检测结果：</p>";

    if(isset($a0))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(isset($a1))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(isset($a2))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(isset($a3))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(isset($a4))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(isset($a5))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(isset($a6))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(isset($a7))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(isset($a8))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }


    echo "<p>empty检测结果：</p>";

    if(empty($a0))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(empty($a1))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(empty($a2))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(empty($a3))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(empty($a4))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(empty($a5))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(empty($a6))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(empty($a7))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

    if(empty($a8))
    {
        echo "true<br>";
    }
    else
    {
        echo "false<br>";
    }

?>