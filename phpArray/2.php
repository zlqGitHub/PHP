<?php
    header("Content-type:text/html;charset=utf-8");
    //数组的定义，有两种方式：赋值方式和array()函数方式

    //1、通过array()函数方式
    //$数组名 = array(key1=>value1,key2=>value2,…);


    //通过array()定义一个一维关联数组
    $info = array('name'=>'张利强','age'=>21,'city'=>'山西');

    p($info);

    //通过array()定义一个二维索引数组
    $infos = array(
        array('name'=>'张利强','age'=>21,'city'=>'吕梁'),
        array('name'=>'吴志华','age'=>15,'city'=>'大同')
    );

    p($infos);


    //2、通过赋值方式
    //$数组名[键名] = 键值;

    $info2['name'] = "张利强";
    $info2['age'] = 21;
    $info2['city'] = '山西';
    $info2['name'] = 'zlq';  //数组中存在相同的下标时，后面出现的元素值会覆盖前面的元素值。


    p($info2);

    $number[] = 1;
    $number[] = 2;
    $number[0] = 3;
    $number[] = 4;

    p($number);


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