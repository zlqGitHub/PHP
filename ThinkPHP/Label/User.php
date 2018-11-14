<?php
namespace app\index\controller;
//当该类的类名与模型名一样时，需要为模型起一个别名
//数据库中，根据模型的名字来确定哪张数据表
use app\index\model\User as UserModel;

use think\Controller;


class User extends Controller {
    public function lists(){
        $list = UserModel::all();     //获取数据库think中的数据表think_user中所有数据
        $this->assign('list',$list);     //模板赋值
        return $this->fetch();       //模板渲染
    }


}