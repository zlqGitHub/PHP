<?php
    //json_decode()—— 对 JSON 格式的字符串进行编码
    //当第二个参数为 TRUE  时，将返回 array  而非 object  。

    $json  = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

    $result = json_decode($json);

    var_dump($result); //返回的结果是一个对象

    echo $result->b;

    $result2 = json_decode($json,true);

    var_dump($result2);  //返回的结果是一个数组

    echo $result2['b'];

?>