<?php
    header("Content-type:text/html;charset=utf-8");

    //数组的使用
    //$数组名[下标];

    $info = array('name'=>'张利强','age'=>21,'city'=>'山西');

    p($info);

    p($info['name']);
    p($info['age']);
    p($info['city']);

    $infos = array(
        array('name'=>'尚贞妮','age'=>21,'city'=>'吕梁'),
        array('name'=>'吴志华','age'=>15,'city'=>'大同'),
        array('name'=>'李林','age'=>20,'city'=>'太原')
    );

    p($infos);

    p($infos[0]['name']);
    p($infos[1]['name']);

    p($infos[0]['age']);
    p($infos[1]['age']);


    //删除数组中指定下标的元素
    unset($infos[2]);

    p($infos);

    //删除整个数组
//    unset($infos);

    //数组的遍历
    //无键值遍历

    foreach($info as $value){
        p($value);
    }

    foreach($infos as $value){
        p($value['name']);
    }

    //键值对遍历
    foreach ($infos as $key => $value){
        p($value);
    }



    //打印函数
    function p($var,$bool=false)
    {
        if($bool)
        {
            var_dump($var);
            return;
        }

        //判断变量如果是标量类型的
        if(is_scalar($var))
        {
            echo $var."<br>";
        }

        //判断变量如果是数组类型
        if(is_array($var))
        {
            echo "<pre>";
            print_r($var);
            echo "</pre>";
        }
    }

?>