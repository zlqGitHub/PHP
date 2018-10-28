<?php
//PHP变量输出：
//1、echo  只能输出标量类型的变量
    $name = "张利强";
    echo $name;
    $age = 21;
    echo $age;
//2、var_dump()  可以看到值，还可以看到值类型
    var_dump($name);   //一个中文字符占3个字节  length=9
    var_dump($age);
    $arr = array(1,2,3,4);
    var_dump($arr);

// 3、print_r():一般结合<pre>标签一起格式打印
    print_r($arr);
    echo "<pre>";
    print_r($arr);
    echo "<pre>";

    echo "<p>我是p标签</p>";  //可以输出html标签,可以被识别
?>

<p>我是p标签</p>
