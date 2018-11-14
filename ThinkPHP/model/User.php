<?php
namespace app\index\controller;
//当该类的类名与模型名一样时，需要为模型起一个别名
use app\index\model\User as UserModel;
date_default_timezone_set("PRC");    //设置时区
class User{
//    新增一条数据
    public function add(){
//        $user = new UserModel();   //实例化对象,使用别名
//
//        $user->name = "张三";
//        $user->email = "1509874021@qq.com";
//        $user->birthday = strtotime('1999-04-24');
//
//        if($user->save()){     //默认情况下svae()操作都是执行数据库insert操作
//            return "用户添加成功！";
//        }
//        else{
//            return "用户添加失败！";
//        }

        $user['name'] = "李四";
        $user['email'] = "lisi@qq.com";
        $user['birthday'] = "2000-2-18";

        if ($result = UserModel::create($user)){
            return "用户添加成功。";
        }
        else{
            return "用户添加失败！";
        }

    }


//    添加多条数据
    public function addList(){
        $user = new UserModel();

        $list = [
            ['name'=>'王五','email'=>'wangwu@qq.com','birthday'=>'1999-10-1'],
            ['name'=>'赵六','email'=>'zhaoliu@qq.com','birthday'=>'1995-10-1']
        ];

        if($user->saveAll($list)){
            return "用户添加成功。";
        }
        else{
            return "用户添加失败！";
        }

    }

//    更新数据
    public function update(){
        $user = UserModel::get(1);
//       dump($user);
//        1.在取出数据后，更改字段内容后更新数据。
//        $user->name = 'tp5';
//        $user->email = "tp5@qq.com";
//        if($result = $user->save()){
//            return "数据更新成功。";
//        }
//        else{
//            return "数据更新失败！";
//        }

//        2.直接更新
//        $user->save(['name'=>'thinkphp','email'=>'thinkphp@qq.com'],['id'=>1]);

//        3.批量更新
        $list = [
            ['id'=>1,'name'=>'tp5','email'=>'tp5@qq.com'],
            ['id'=>2,'name'=>'thinkphp','email'=>'thinkphp@qq.com']
        ];
        if($user->saveAll($list)){
            return "批量更新成功。";
        }
        else{
            return "批量更新失败！";
        }
    }


//    查询数据
    public function select(){
//       1.获取单个数据的方法包括：
        $user = UserModel::get(1);  //取出主键为1的数据
        echo $user->email."<br>";

        $user = UserModel::get(['name'=>'张三']);   // 使用数组查询
        echo $user->email."<br>";

//        2.获取多个数据
        $user = UserModel::all([4,6,7]);
        foreach ($user as $key=>$value){
            echo $value->name."  ".$value->email."<br>";
        }


    }

//    删除数据
    public function delete(){
        $user = UserModel::get(1);
        /*if($result = $user->delete()){
            return "数据删除成功。";
        }
        else{
            return "删除失败！";
        }*/

        if(UserModel::destroy([6,7])){
            return "数据已删除";
        }
        else{}
        return "删除失败！";
    }



}