<?php
//乱码解决
//编码
header('content-type:text/html;Charset=utf-8');

//连接数据库 然候操作数据库

$conn = mysqli_connect('localhost','root','045412','think') or die("连接数据库失败");
$conn->query("SET NAMES utf8");     //解决从数据库中读出的数据时的乱码问题
//php读取数据库中的数(查询)
$sql = 'select * from `think_user`';  //查询SQL语句（注意：数据库当中一定要有think_user表）
//$sql = 'select * from think_user';

$query = mysqli_query($conn,$sql);   //将SQL语句传送到数据库运行,资源类型，将查询的结果压缩到$query中  看不到

//print_r($query);

//提取$query里面压缩的数据
//$result = mysqli_fetch_assoc($query);   //提取压缩的数据，只能提取一条,以一维数组的形式返回
//print_r($result);

$list = array();
while($result = mysqli_fetch_assoc($query)){    //提取多条数据
    $list[] = $result;
}
echo "<pre>";
print_r($list);
echo "</pre>";

mysqli_close($conn);   //关闭连接




