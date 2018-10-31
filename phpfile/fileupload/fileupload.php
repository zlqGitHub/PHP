<?php
    header('Content-type:text/html;charset=utf-8');
    echo $_POST['title'];
    echo $_POST['add'];

    if($_POST['add'] == '上传文件'){
//        echo "ok";
        $rand1 = rand(0,9);
        $rand2 = rand(0,9);
        $rand3 = rand(0,9);

        $filename = date('Ymdhis').$rand1.$rand2.$rand3;
        if(empty($_FILES['upload']['name'])){
            echo "文件名不能为空！";
            exit;
        }
        $oldfilename = $_FILES['upload']['name'];
        echo "原文件名：".$oldfilename."<br>";
//        判断文件类型
        $filetype = substr($oldfilename,strrpos($oldfilename,'.'),strlen($oldfilename)-strrpos($oldfilename,'.'));
        echo "原文件类型为：".$filetype."<br>";
        if(($filetype != '.doc')&&($filetype != '.DOC')&&($filetype != '.xls')&&($filetype != '.XLS')&&($filetype != '.jpg')){
            echo "<script>alert('文件类型或地址错误！');</script>";
            exit;
        }

        //文件大小的判断
        echo "文件的大小为：".$_FILES['upload']['size']."<br>";
        if($_FILES['upload']['size'] > 100000){
            echo "<script>alert('文件太大，不能上传！')</script>>";
            exit;
        }

        echo "文件上传到服务器后的临时文件为：".$_FILES['upload']['tmp_name']."<br>";
        $filename = $filename.$filetype;
        echo "文件名为：".$filename."<br>";
        $savedir = "D:/wamp/www/PHP/phpfiel/fileupload/".$filename;
        if(@move_uploaded_file($_FILES['upload']['tmp_name'],$savedir)){
            $file_name = basename($savedir);    //取得保存文件的文件名(不含路径)  basename() 函数返回路径中的文件名部分。
            echo "文件上传成功，保存为：".$savedir;

        }else{
            echo "<script>alert('上传失败！');</script>";
            exit;
        }


    }

?>