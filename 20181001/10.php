<?php
    //for循环实现九九乘法表
    //第一种效果：

   echo "<table border='1' width='600px'>";
    //外层行循环
    for($i=1;$i<=9;$i++){
        echo "<tr>";
        //内层列循环
        for ($j=1;$j<=$i;$j++){
            echo "<td>{$j}*{$i}=".($j*$i)."</td>";

        }
        echo "</tr>";
    }

   echo "<table>";

    //第二种效果：
    echo "<table border='1' width='600px'>";
    // 输出行
    for($i=9;$i>=1;$i--)
    {
        echo "<tr>";
        // 输出列
        for($j=1;$j<=$i;$j++)
        {
            echo "<td>{$j}*{$i}=".($j*$i)."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?>