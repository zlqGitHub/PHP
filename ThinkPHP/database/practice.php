<?php
//练习
namespace app\index\controller;
use think\Db;

class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#0a71d5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fffaf1; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    }

    public function db(){
//        select查询的是一个二维数组
        $result = Db::name('data')->where('status',1)->select();
        echo "************select()查询**************<br>";
        dump($result);

//        find 方法查询结果不存在，返回 null,结果存在，只查询一条数据
        $result = Db::name('data')->where('status',1)->find();
        echo "************find()查询**************<br>";
        dump($result);

//        模糊查询
        $result = Db::name('data')->where('name','like','%富%')->select();
        echo "************* 模糊查询 *************<br>";
        dump($result);

//        区间查询
        $result = Db::name('data')->where('id','BETWEEN',[2,5])->select();
        echo "************ 区间查询 **************<br>";
        dump($result);

//        添加多组数组,insertAll 方法添加数据成功返回添加成功的条数
//        $data = [
//            ['name'=>"小明",'status'=>'5'],
//            ['name'=>"小红",'status'=>'1'],
//            ['name'=>"小李",'status'=>'3'],
//            ['name'=>"小白",'status'=>'4']
//        ];
//
//        $result = Db::name('data')->insertAll($data);
//        echo "************ 添加多组数组 **************<br>";
//        dump($result);

//        更新某个字段的值,setField 方法返回影响数据的条数，没修改任何数据字段返回 0
        $result = Db::table('think_data')->where('id',9)->setField('name','小王');
        echo "************ 更新某个字段的值 **************<br>";
        dump($result);

//        自增或自减一个字段的值
//        如不加第二个参数，默认值为1,
        $result = Db::name('data')->where('id',5)->setInc('status');
        echo "************ 自增或自减一个字段的值 **************<br>";
        dump($result);
        $result = Db::name('data')->where('id',1)->setInc('status',10);

    }


}
