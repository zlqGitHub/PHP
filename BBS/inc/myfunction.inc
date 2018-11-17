<?php
//自编函数
    class myfunction{
        //字符转换：向数据库中插入或更新时用
        function str_to($str){
            $str = str_replace(" ","&nbsp;",$str);  //把空格替换为html中的字符串空格
            $str = str_replace("<",'&lt;',$str);    //把html的输出标志正常输出
            $str = str_replace(">",'&gt;',$str);    //把html的输出标志正常输出
            $str = nl2br($str);   //把回车替换成html中的br
            return $str;
        }

        //由子版块的id返回该子版块的主题数
        function son_module_idtonote_num($son_module_id){
            $aa = new mysql();
            $aa->link("");
            $query = "select * form note_info where module_id='".$son_module_id."' and up_id='0'";
            $rst = $aa->excu($query);
            return mysqli_num_rows($rst);
        }

        //由子版块的id返回该子版块的帖子数
        function son_module_idtonote_num2($son_module_id){
            //由子版块的id返回该子版块的主题数
            $aa = new mysql();
            $aa->link("");
            $query = "select * from m note_info where module_id='".$son_module_id."' and up_id='0'";
            $rst = $aa->excu($query);
            $num = mysqli_num_rows($rst);
            while ($note = mysqli_fetch_array($rst,MYSQLI_ASSOC)){   //MYSQLI_ASSOC:关联数组
                $query = "select * from m note_info where up_id='".$note['id']."' and module_id='0'";
                $rst = $aa->excu($query);
                $num += mysqli_num_rows($rst);
            }
            return $num;
        }

        //由子版块的id输出该子版块的最新帖子
        function son_module_idtolast_note($son_module_id){
            $aa = new mysql();
            $aa->link();
            $query = "select * from note_info where module_id='".$son_module_id."' ordre by time desc limit 0,1";
            $rst = $aa->excu($query);
            $note = mysqli_fetch_array($rst,MYSQLI_ASSOC);
            $query2 = "select * from note_info where module_id='".$note['up_id']."'";
            $rst2 = $aa->excu($query2);
            $note2 = mysqli_fetch_array($rst2,MYSQLI_ASSOC);
            echo $note2['title'];
            echo "<br>";
            echo $note['time']."&nbsp;&nbsp;".$note['user_name'];

        }

        //由子版块的id输出该子版块的版主
        function son_module_idtouser_name($son_module_id){
            $aa = new mysql();
            $aa->link("");
            $query = "select * from son_module_info where id='".$son_module_id."'";
            $rst = $aa->excu($query);
            $module = mysqli_fetch_array($rst,MYSQLI_ASSOC);
            if($module['user_name']==""){
                echo "版主暂缺";
            }
            else{
                return $module['user_name'];
            }
        }

        //输出所有版块的下拉列表（子版块有参数）
        function son_module_list($son_module_id){
            $aa = new mysql();
            $aa->link("");
            $query = "select * from father_module_info order by id";
            $rst = $aa->excu($query);
            echo "<select name='module_id'>";
            while ($father_module = mysqli_fetch_array($rst,MYSQLI_ASSOC)){
                echo "<option value=>".$father_module['module_name']."</option>";
                $query = "select * from som_module_info where father_module_id='".$father_module['id']."' order by id";
                $rst2 = $aa->excu($query);
                while ($son_module = mysqli_fetch_array($rst2,MYSQLI_ASSOC)){
                    echo "<option value='".$son_module['id']."'>&nbsp;&nbsp;".$son_module['module_name']."</option>";
                }

            }
            echo "</select>";
        }

        //输出父版块的下拉列表
        function father_module_list($father_module_id){
            $aa = new mysql();
            $aa->link("");
            echo "<select name='father_module_id'>";
            if($father_module_id == ""){
                echo "<option selected>请选择...</option>";
            }
            else{
                $query = "select * from father_module_info where id='$father_module_id'";
                $rst = $aa->excu($query);
                $father_module = mysqli_fetch_array($rst,MYSQLI_ASSOC);
                echo "<option value='".$father_module['id']."'>".$father_module['module_name']."</option>";
            }
            $query = "select * from father_module_info order by show_order";
            $rst = $aa->excu($query);
            while ($father_module = mysqli_fetch_array($rst,MYSQLI_ASSOC)){
                echo "<option value='".$father_module['id']."'>".$father_module['module_name']."</option>";
            }
            echo "</select>";
        }

        //由帖子的id返回该帖子的浏览次数
        function note_idtotime($note_id){
            $aa = new mysql();
            $aa->link("");
            $query = "select * from note_info where id='$note_id'";
            $rst = $aa->excu($query);
            $note = mysqli_fetch_array($rst,MYSQLI_ASSOC);
            return $note['time'];
        }

        //由帖子的id返回该帖子的标题
        function note_idtotitle($note_id){
            $aa = new mysql();
            $aa->link("");
            $query = "select * from note_info where id='$note_id'";
            $rst = $aa->excu($query);
            $note = mysqli_fetch_array($rst,MYSQLI_ASSOC);
            return $note['title'];
        }

        //由帖子的id返回该帖子的回复数
        function note_idtonote_num($note_id){
            $aa = new mysql();
            $aa->link("");
            $query = "select * from note_info where up_id='$note_id' ";
            $rst = $aa->excu($query);
            $num = mysqli_num_rows($rst);
            return $num+1;
        }

        //由帖子的id输出帖子的最后回复时间
        function note_idtolast_time($note_id){
            $aa = new mysql();
            $aa->link("");
            $query = "select * from note_info where up_id='$note_id' order by time desc limit 0,1";
            $rst = $aa->excu($query);
            $note = mysqli_fetch_array($rst,MYSQLI_ASSOC);
            return $note['time'];
        }

        //由帖子的id输出帖子的最后回复人
        function note_idtolast_user_name($note_id){
            $aa = new mysql();
            $aa->link("");
            $query = "select * from note_info where up_id='$note_id' order by time desc limit 0,1";
            $rst = $aa->excu($query);
            $note = mysqli_fetch_array($rst,MYSQLI_ASSOC);
            return $note['user_name'];
        }

        //由子版块的id返回其父版块的名称
        function son_module_idtofather_name($son_module_id){
            $aa = new mysql();
            $aa->link("");
            $query = "select * from son_module_info where id='$son_module_id'";
            $rst = $aa->excu($query);
            $module = mysqli_fetch_array($rst,MYSQLI_ASSOC);
            $query2 = "select * from father_module_info where id='".$module['father_module_id']."'";
            $rst2 = $aa->excu($query2);
            $module2 = mysqli_fetch_array($rst2,MYSQLI_ASSOC);
            return $module2['module_name'];
        }

        //由子版块的id返回本版块的名称
        function son_module_idtomodule_name($son_module_id){
            $aa = new mysql();
            $aa->link("");
            $query = "select * from son_module_info where id='$son_module_id'";
            $rst = $aa->excu($query);
            $module = mysqli_fetch_array($rst,MYSQLI_ASSOC);
            return $module['module_name'];
        }

        //所有帖子的回复总数
        function note_total_num(){
            $aa = new mysql();
            $aa->link("");
            $query = "select * from note_info";
            $rst = $aa->excu($query);
//            var_dump($rst);
            return mysqli_num_rows($rst);
        }

        //所有会员总数
        function user_total_num(){
            $aa = new mysql();
            $aa->link("");
            $query = "select * from user_info";
            $rst = $aa->excu($query);
            return mysqli_num_rows($rst);
        }

        //最后的一位会员
        function last_username(){
            $aa = new mysql();
            $aa->link("");
            $query = "select * from user_info order by id desc limit 0,1";
            $rst = $aa->excu($query);
            $user = mysqli_fetch_array($rst,MYSQLI_ASSOC);
            return $user['user_name'];
        }

        //分页函数
        function page($query,$page_id,$add,$num_per_page){
            $bb = new mysql();
            global $query;   //声明全局变量
            $bb->link("");
            $page_id=@$_GET['page_id'];  //接收page_id
            if($page_id == ""){
                $page_id = 1;
            }
            $rst = $bb->excu($query);
            $num = mysqli_num_rows($rst);
            if($num == 0){
                echo "没有查找到相关记录或没有相关回复!<br>";
            }
            $page_num = ceil($num/$num_per_page);   //ceil() 函数向上舍入为最接近的整数。
            for($i=1;$i<=$page_num;$i++){
                echo "&nbsp;[<a href=?".$add."page_id=".$i.">".$i."</a>]";
            }
            $page_up = $page_id-1;
            $page_down = $page_id+1;
            if($page_id == 1){
                echo "<a href=?".$add."page_id=".$page_down.">下一页</a>&nbsp;&nbsp;第".$page_id."页，共".$page_num."页";
            }
            else if($page_id>=$page_num-1){
                echo "<a href=?".$add."page_id=".$page_up.">下一页</a>&nbsp;&nbsp;第".$page_id."页，共".$page_num."页";
            }
            else{
                echo "<a href=?".$add."page_id=".$page_down.">下一页</a>&nbsp;&nbsp;<a href=?".$add."page_id=".$page_up.">下一页</a>&nbsp;&nbsp;第".$page_id."页，共".$page_num."页";
            }

            $page_jnum = $num_per_page * ($page_id-1);
            $query = $query."limit $page_jnum,$num_per_page";

        }

    }//end  class myfunction

?>