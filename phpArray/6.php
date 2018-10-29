<?php
    // 题目：请通过PHP数组实现双色球随机选号的功能，要求每次刷新PHP脚本，都会生成一个双色球随机选号的结果。

    // 描述：双色球是中国福利彩票的一种玩法。它分为红色球号码区和蓝色球号码区，每注投注号码是由6个红色球号码和1个蓝色球号码组成，红色球号码从1~33中选取，蓝色球号码从1~16中选取。


    //1、随机获取6个红球号码

    //创建一个1~33的红球号码区的数组
    $red = range(1,33);

    //随机获取6个键
    $keys = array_rand($red,6);
    echo gettype($keys)."<br>";

    shuffle($keys); //打乱键的顺序

    // echo '<pre>';
    // print_r($keys);
    // echo '</pre>';

    //根据键获取红色球号码区数组中对应的值
    foreach($keys as $v)
    {
        $redBall[] = $red[$v] < 10 ? '0'.$red[$v] : $red[$v];
    }
    // echo '<pre>';
    // print_r($redBall);
    // echo '</pre>';


    //2、随机获取1个蓝色球号码
    $blue = range(1,16);
    $key = array_rand($blue);   //一个蓝色球
    $blueBall = $blue[$key] < 10 ? '0'.$blue[$key] : $blue[$key];

    //3、遍历输出红色球和蓝色球
    foreach ($redBall as $v)
    {
        echo $v.' ';
    }

    echo $blueBall;

?>