<?php
    function filter($func){    //$func是函数名
        for($i=1;$i<=100;$i++){
            if ($func($i)){
                continue;
            }else{
                echo $i."  ";
            }
        }
    }

    //过滤掉是3的倍数的数
    function three($x){
        return $x % 3 ==0;
    }

    filter("three");     //传递字符串，filter的参数是变量   变量名后带括号表示


?>