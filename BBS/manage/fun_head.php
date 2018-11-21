<?php
    function head($str){
    ?>
        <link rel="stylesheet" href="Admin_Style.css" type="text/css">
        <style type="text/css">
            .STYLE4{
                color: #000000;
            }

        </style>
        <body>
            <table width="100%">
                <tr>
                   <td class="STYLE4" width=""><span style="border-bottom: #000 solid 1px;">频道管理中心</span></td>
                </tr>
                <tr>
                    <td class="STYLE4"><span>欢迎进入管理</span></td>
                </tr>
                <tr>
                    <td>
                        <?php
                            echo "当前位置：<b><font>".$str."</font></b>";
                        ?>
                    </td>
                </tr>

            </table>
        </body>
<?php
    }
?>