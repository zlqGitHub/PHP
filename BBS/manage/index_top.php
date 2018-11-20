<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>顶部管理导航菜单</title>
    <style type="text/css">
        body{
            background:url("image/admin_top_bg.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
        }
        /* 爱恨之间（lhv）*/
        a:link{
            color: #FFFFFF;
            text-decoration: none;
        }
        a:hover{
            color: red;
        }

        .spa{
            font-size: 9pt;
            color: #8aade9;
            font-family: '宋体';
        }
        img{
            chroma:#FFFFFF;
        }


    </style>
    <script>
        var displayBar = true;
        function switchBar(object) {
            if(displayBar){
                parent.frames.cols='0,*';
                displayBar = false;
                object.src='image/admin_top_open.png';
                object.title = '打开左边管理导航菜单';
            }
            else{
                parent.frames.cols='200,*';
                displayBar = true;
                object.src='image/admin_top_close.png';
                object.title = '关闭左边管理导航菜单';
            }
        }
        function aa(){
            alert("ad");
        }
    </script>

    <meta content="MSHTML 6.00.2900.2963" name="GENERATOR">
</head>
<body leftmargin="0" topmargin="0">
<!--  后台管理主页面的上部页面  -->
<table width="100%">
    <tbody>
        <tr valign="center">
            <td width="120">
                <img title="关闭左边管理导航菜单" style="cursor: hand;" src="image/admin_top_close.png" onclick="switchBar(this)">
            </td>
            <td width="92">
                <a href="login.php" target="_parent">
                    <img src="image/top_an_1.png" title="返回登录">
                </a>
            </td>
            <td width="92"><a href="#"></a></td>
            <td width="92"><a href="#"></a></td>
            <td width="92"><a href="#"></a></td>
            <td width="92"><a href="#"></a></td>
            <td class="spa" align="right">ET PHP SOUND CODE DEVELOP &nbsp;</td>
        </tr>
    </tbody>

</table>

</body>
</html>