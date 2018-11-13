<?php
namespace app\index\controller;    //在app下的index模块中的控制器controller
//当该类的类名与模型名一样时，需要为模型起一个别名
use app\index\model\User as UserModel;     //使用app下的index模块中的模型User
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


}