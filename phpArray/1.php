<?php
    //按照数组的下表的数据类型来分类：索引数组和关联数组
    //索引数组：下标是整数类型
    $arr1 = array(1,2,3,4);
    p($arr1);

    //关联数组：下标是字符串类型
    $arr2 = array("apple"=>"苹果","banana"=>"香蕉");
    p($arr2);

    //按数组的维度
    $arr3 = array();  //定义一个一维空数组
    p($arr3);

    $arr4 = array("a"=>array(1),"b"=>array(2));  //定义一个二维数组
    p($arr4);

    $arr5 = array(array(array()));  //三维...
    p($arr5);

    //打印函数
    function p($arr,$bool = false){
        if($bool){
            var_dump($arr);
            return;
        }
        //判断类型如果是标量类型
        if(is_scalar($arr)){
            echo $arr."<br>";
        }
        //判断类型如果是数组类型
        if(is_array($arr)){
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
        }
    }



?>