<?php
//查询构造器
namespace app\index\controller;
use think\Db;

class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#0a71d5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fffaf1; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    }

    public function db(){
        //插入记录
//        $result = Db::table('think_data')->insert(['name'=>"zlq",'status'=>1]);

        //更新记录
//        $result = Db::table('think_data')->where('id',5)->update(['name'=>"王五",'status'=>0]);

        //查询数据
//        $result = Db::table('think_data')->where('id',3)->select();

        //删除数据
//        $result = Db::table('think_data')->where('id',3)->delete();

//       ***********使用系统提供的助手函数db***********
//助手函数在V5.0.9之前版本默认会每次重新连接数据库，因此应当尽量避免多次调用。
        $db = db('data');

//        $result = $db->insert(['id'=>1,"name"=>"zlq","status"=>0]);
//        $result = $db->insert(['id'=>3,'name'=>'郭富城','status'=>1]);

        $result = $db->select();
        dump($result);
    }


}
