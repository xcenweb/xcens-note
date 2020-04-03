<?php
error_reporting(0);
require_once("../config.php");
require_once("../inc/function.php");
if ($_COOKIE["Xc_user"] == null && $_COOKIE['Xc_pswd'] == null) {
    //没有cookie
    header("Location: ./login.php");
}
//载入防后门访问函数
//cookie_door("true")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>后台管理-管理笔记</title>
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
        <h1>管理笔记</h1>
        <div class="mdui-table-fluid">
        <table class="mdui-table">
            <tr>
                <th><b>ID</b></th>
                <th><b>题目</b></th>
                <th><b>内容摘要</b></th>
                <th><b>分类</b></th>
                <th><b>操作</b></th>
            </tr>
            <?php
            $sql = "SELECT * FROM xc_note";
            $res = $config->query($sql);
            $data = $res->fetch_all();
            foreach ($data as $v) {
                $notelink = "write.php?nid=".$v[0];
                $ntitle = $v[1];
                $ztitle = $v[2];
                $sort = $v[3];
                echo '
            <tr>
                <td>'.$v[0].'</td>
                <td>'.$ntitle.'</td>
                <td>'.$ztitle.'</td>
                <td>'.$sort.'</td>
                <td><a href="./write-note.php?id='.$v[0].'">修改</a>|<a href="./act.php?act=den&id='.$v[0].'">删除</a></td>
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