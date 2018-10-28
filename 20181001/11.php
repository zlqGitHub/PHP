<?php
    //跳转语句
    //break语句
    $i = 0;
    $sum = 0;
    while($i<=4)
    {
        $sum += $i;
        if($i==2)
        {
            break; //跳出循环
        }
        $i++;
    }
    echo $sum."<br>";

    // 对自然数1~100之内的奇数求和。
    $sum = 0;
    for($i=1;$i<=100;$i++)
    {
        if($i%2 == 0)
        {
            continue;//作用是终止本次循环，执行下一次循环。
        }
        $sum += $i;
    }
    echo $sum;



?>