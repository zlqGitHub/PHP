<?php
    //数组的遍历案例：以表格的形式展示学生信息
    $infos = array(
        array('name'=>'陈华','age'=>20,'city'=>'临汾'),
        array('name'=>'尚贞妮','age'=>21,'city'=>'吕梁'),
        array('name'=>'吴志华','age'=>15,'city'=>'大同'),
        array('name'=>'李林','age'=>20,'city'=>'太原')
    );

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>数组的遍历</title>
    <style>
        table{
            width: 500px;
            border:1px solid pink;
            border-collapse: collapse;
        }

        table th,table td{
            border:1px solid pink;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <caption>学生信息表</caption>
        <tr>
            <th>编号</th>
            <th>姓名</th>
            <th>年龄</th>
            <th>家乡</th>
        </tr>
        <?php
        foreach($infos as $k=>$v)
        {
            // p($k);
            ?>
            <tr>
                <td><?php echo $k+1; ?></td>
                <td><?php echo $v['name']; ?></td>
                <td><?php echo $v['age']; ?></td>
                <td><?php echo $v['city']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
