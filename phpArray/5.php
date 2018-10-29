<?php
    //数组相关的函数
    // in_array()

    $number = array(12,34,67);

    if(in_array(12,$number))
    {
        echo "ok";
    }
    else
    {
        echo "no";
    }


    // range — 建立一个包含指定范围单元的数组
    // p(range(1,100,10));

    // p(range('a','z'));
//array_merge() 函数把一个或多个数组合并为一个数组
    $strArr  = array_merge(range(1,10),range('a','z'),range('A','Z'));

    p($strArr);

    shuffle($strArr);    //把数组中的元素按随机顺序重新排序

    p($strArr);

    // array_rand — 从数组中随机取出一个或多个单元
    $randKey = array_rand($strArr,4);

    // p($randKey);
//    echo gettype($randKey);   数组类型
    print_r($randKey);
    if(is_array($randKey))
    {
        $str = "";
//foreach 循环只适用于数组，并用于遍历数组中的每个键/值,每进行一次循环迭代，
//当前数组元素的值就会被赋值给 $value 变量，并且数组指针会逐一地移动，直到到达最后一个数组元素

        foreach($randKey as $v)
        {
            $str .= $strArr[$v];
        }
    }
    else
    {
        $str = $strArr[$randKey];
    }
    p($str);


    // p($strArr[$randKey]);

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