<?php
//主要用于自编连接数据库、服务器及执行SQL语句的函数库
    class mysql{
        //连接服务器、数据库及执行SQL语句的类库
        public $database;
        public $server_name;
        public $server_password;

        function mysql(){
            //构造函数初始化所要连接的数据库
            $this->server_name="root";
            $this->server_password="045412";
        }//end mysql()

        function link($database){
            //连接服务器和数据库
            //判断所要连接的数据库
            if($database == ""){
                $this->database="bbs_data";
            }
            else{
                $this->database=$database;
            }

            //连接服务器和数据库
            if(@$id = mysqli_connect("localhost",$this->server_name,$this->server_password)){
                if(!mysqli_select_db($this->database,$id)){
                    echo "数据库连接失败！！！";
                    exit;   //退出
                }
            }
            else{
                echo "服务器正在维护中，请稍后重试！！！";
                exit;
            }

        }//end link();

        function excu($query){
            //执行SQL语句
            if($result = mysqli_query($query)){
                return $result;
            }
            else{
                echo "SQL语句执行错误！！！请重试 ！！！";
            }
        }//end excu()

    }//end class mysql

?>