<?php
//json_encode()——对变量进行json编码
//编码成功则返回一个以 JSON 形式表示的 string  或者在失败时返回 FALSE  。
    header('Content-type:text/html;charset=utf-8');
    $fruits = array('apple'=>'苹果','banana'=>'香蕉');
    echo json_encode($fruits)."<br>";

    $goods = array(
        "list"=>array(
            array("id"=>10,"name"=>"张利强"),
            array("id"=>20,"name"=>"zlq")
        )
    );
    echo json_encode($goods);

?>