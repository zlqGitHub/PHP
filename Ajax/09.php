<?php
    header("content-type:text/xml;charset=utf-8");
    /*$products = array(
        "xg"=>array("title"=>"清凉一夏","des"=>"雪糕好好吃呀","image"=>"images/1.png"),
        "rw"=>array("title"=>"超新星全运会","des"=>"姑娘好漂亮呀","image"=>"images/2.jpg"),
        "yx"=>array("title"=>"绝地求生","des"=>"今晚吃鸡大吉大利","image"=>"images/3.png")
    );
    $name = $_GET["name"];
//    print_r($products[$name]);
    $product = $products[$name];
    /*
        存在的问题：用 | 将字符串分开时，容易与字符串本身中的 | 混淆   因此引入xml文件
    */

/*echo $product["title"];
echo "|";
echo $product["des"];
echo "|";
echo $product["image"];*/
    echo file_get_contents("09.xml")

?>