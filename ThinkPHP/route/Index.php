<?php
//练习
namespace app\index\controller;
use think\Db;
use think\Controller;

define('HOST','localhost');   //定义常量
class Index extends Controller
{
    public function index()
    {
//       return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#0a71d5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fffaf1; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
        return $this->fetch();
    }

    //模板包含文件
    public function lists(){

        return '这是我自己定义的路由规则';

    }

    public function read(){

        return '这是定义的简化的路由,哈哈';

    }

    public function test($id){

        dump($id);

    }





}
