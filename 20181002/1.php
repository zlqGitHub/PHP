<?php
    //PHP内置函数
    date_default_timezone_set("Asia/Shanghai");//设定用于所有日期时间函数的默认时区。
    echo date('Y-m-d H:i:s');//格式化本地时间
    echo "<br>";
    echo md5('123456');
    echo "<br>";
    echo md5('654321');

    ?>