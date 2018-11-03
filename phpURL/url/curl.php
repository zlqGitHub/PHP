<?php
    $key = "b10bbc3126e377305ed9ce63763be02d";    //聚合接口中的笑话接口

    $jokeUrl = "http://v.juhe.cn/joke/content/text.php?key={$key}&pagesize=50";

    $jokeJson = https_request($jokeUrl);   //封装https请求

   // $jokeArr = json_decode($jokeJson,true);    //对 JSON 格式的字符串进行编码,当第二个参数为 TRUE 时，将返回 array 而非 object 返回数组
    $jokeArr = json_decode($jokeJson,true);

    echo "<pre>";
    print_r($jokeArr)['result']['data'];
    echo "</pre>";




    //封装https请球的函数（GET/POST）   https_request($url,$data=null)
    function https_request($url,$data=null){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);  //设置请求URL
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);    //将页面以文件流的形式返回，而不是直接输出

        if(!empty($data)){   //不为空时
            curl_setopt($ch,CURLOPT_POST,1);   //模拟POST请求
            curl_setopt($ch,CURLOPT_POSTFIELDS,$data);//设置POST提交的数据
        }
        //执行请求并返回结果
        $outopt = curl_exec($ch);

        //关闭curl
        curl_close($ch);

        var_dump($outopt);

        return $outopt;   //返回json对象

    }

?>