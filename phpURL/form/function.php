<?php
//    打印函数
    function p($var){
        if(is_scalar($var)){   //判断是否是标量类型
            echo $var."<br>";
        }
        if(is_array($var)){  //判断是否是数组类型
            echo "<pre>";
            print_r($var);
            echo "</pre>";
        }
        if(is_bool($var))  //判断是否是boolean类型
        {
            var_dump($var);
            echo "<br>";
        }
    }

    //文件上传函数
    function upload($filed = "userfile",$upload_path = "D:\wamp\www\PHP\phpURL/form"){
        echo $upload_path."<br>";
        if(! isset($_FILES[$filed])){  //判断有无文件上传
            return array("result"=>FALSE,"error"=>"没有文件上传。");
        }
//        is_uploaded_file() 函数判断指定的文件是否是通过 HTTP POST 上传的。
        if(! is_uploaded_file($_FILES[$filed]['tmp_name'])){
            $error = (! isset($_FILES[$filed]['error'])) ? 4 :$_FILES[$filed]['error'];
            switch ($error){
                case 1:
                    return array("result"=>FALSE,"error"=>"上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。");
                    break;
                case 2:
                    return array("result"=>FALSE,"error"=>"上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。");
                    break;
                case 3:
                    return array("result"=>FALSE,"error"=>"文件只有部分被上传。");
                    break;
                case 4:
                    return array("result"=>FALSE,"error"=>"没有文件被上传。");
                    break;
                case 6:
                    return array("result"=>FALSE,"error"=>"找不到临时文件夹。");
                    break;
                case 7:
                    return array("result"=>FALSE,"error"=>"文件写入失败。");
                    break;
                default :
                    return array("result"=>FALSE,"error"=>"没有文件被上传。");
                    break;
            }
            return array("result"=>FALSE,"error"=>"非法的上传文件！");
        }

        //类型过滤
        $typelist = array("image/jpeg","image/jpg","image/png","image/gif");

        if(!in_array($_FILES[$filed]['type'],$typelist)){
            return array("resutl"=>FALSE,"error"=>"上传文件类型非法");
        }
        //设置上传文件的新文件名
        $fileinfo = pathinfo($_FILES[$filed]["name"]);//解析上传文件名字
        var_dump($fileinfo);

        do{
            $filename = md5(uniqid(mt_rand())).".".$fileinfo['extension'];
        }while(file_exists($upload_path."/".$filename));

        //上传文件
        if(! @move_uploaded_file($_FILES[$filed]['tmp_name'],$upload_path."/".$filename)){
            return array("result"=>FALSE,"error"=>"上传文件失败！");
        }
        else{
            return array("result"=>TRUE,"filename"=>$filename);
        }
    }



?>