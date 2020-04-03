<?php
require_once("../config.php");
require_once("../inc/function.php");
//载入防后门访问函数
//cookie_door("true")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>后台管理-管理分类</title>
    <link rel="stylesheet" type="text/css" href="../css/mdui.min.css">
    <link rel="stylesheet" type="text/css" href="../css/page.css">
</head>
<body class="mdui-theme-primary-blue mdui-theme-accent-blue mdui-drawer-body-left mdui-appbar-with-toolbar">
    <div class="mdui-appbar mdui-appbar-fixed mdui-appbar-scroll-hide">
		<div class="mdui-toolbar mdui-color-theme-accent">
            <a href="javascript:;" mdui-drawer="{target: '#drawer'}" class="mdui-btn mdui-ripple mdui-btn-icon"><i class="mdui-icon material-icons">menu</i></a>
            <a href="./" class="mdui-typo-title">后台管理</a>
            <div class="mdui-toolbar-spacer"></div>
            <a href="javascript:;" onclick="delcookie()" class="mdui-btn mdui-ripple mdui-btn-icon"><i class="mdui-icon material-icons">&#xe879;</i></a>
        </div>
    </div>
    <?php require("../inc/ad_cehua.php"); ?>
    <div class="mdui-container-fluid" style="padding: 1em 0.6em 1em 0.6em">
        <h1>管理分类</h1>
        <div class="mdui-table-fluid">
        <table class="mdui-table">
            <tr>
                <th><b>ID</b></th>
                <th><b>名称</b></th>
                <th><b>备注</b></th>
                <th><b>操作</b></th>
            </tr>
            <?php
            $sql = "SELECT * FROM xc_note_sort";
            $res = $config->query($sql);
            $data = $res->fetch_all();
            foreach ($data as $v) {
                $id = $v[0];
                $sort = $v[1];
                $bz = $v[2];
                echo '
            <tr>
                <td>'.$id.'</td>
                <td>'.$sort.'</td>
                <td>'.$bz.'</td>
                <td><a href="write.php?act=2&id='.$v[0].'">修改</a>|<a href="act.php?act=den&id='.$v[0].'">删除</a></td>
            </tr>
            ';
            }
mysqli_close($config);
?> 
        </table>
        </div>
    </div>
    <script src="../js/page.js"></script>
   	<script src="../js/mdui.min.js"></script>
</body>
</html>