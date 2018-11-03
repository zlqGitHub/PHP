<?php
    //PHP cURL 使用步骤
    // 初始化cURL：curl_init()
    // 设置传输选项：curl_setopt()
    // 执行并获取结果：curl_exec()
    // 关闭cURL：curl_close()

   $ch = curl_init();

   $url = "http://www.baidu.com";
   curl_setopt($ch,CURLOPT_URL,$url);
   echo curl_exec($ch);

   curl_close($ch);


    // CURLOPT_URL   设置请求URL地址

?>