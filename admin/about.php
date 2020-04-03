<?php
require_once("../config.php");
require_once("../inc/function.php");
if ($_COOKIE["Xc_user"] == null && $_COOKIE['Xc_pswd'] == null) {
    //没有cookie
    header("Location: ./login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>后台管理-设置</title>
    <link rel="stylesheet" type="text/css" href="../css/mdui.min.css">
    <link rel="stylesheet" type="text/css" href="../css/page.css">
</head>
<body class="mdui-theme-primary-blue mdui-theme-accent-blue mdui-drawer-body-left mdui-appbar-with-toolbar">
    <div class="mdui-appbar mdui-appbar-fixed mdui-appbar-scroll-hide">
		<div class="mdui-toolbar mdui-color-theme-accent">
            <a href="javascript:;" mdui-drawer="{target: '#drawer'}" class="mdui-btn mdui-ripple mdui-btn-icon"><i class="mdui-icon material-icons">menu</i></a>
            <a href="./" class="mdui-typo-title">后台管理</a>
            <div class="mdui-toolbar-spacer"></div>
            <a href="javascript:;" mdui-dialog="{target: '#example-1'}" class="mdui-btn mdui-ripple mdui-btn-icon"><i class="mdui-icon material-icons">&#xe879;</i></a>
        </div>
    </div>
    <?php require("../inc/ad_cehua.php"); ?>
    <div class="mdui-container-fluid" style="padding: 1em 0em 0em 0em">
       <div style="height: 250px" class="mdui-col-xs-12 mdui-col-sm-4" >
        <div style="height: 180px;width: 180px;-webkit-border-radius: 90px;" class="mdui-card mdui-center mdui-color-theme-accent"><div style="text-align: center;position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);"><b>V 1.0</b><br><small>2020-3-31</small></div></div>
       </div>
       <div style="height: 250px;" class="mdui-col-xs-12 mdui-col-sm-8">
           <div class="mdui-card">正在检查更新.....<br>当前版本：V1.0</div>
           <div class="mdui-card"></div>
       </div>
<div>
<li>官方QQ群：</li>
<li>源码仓库：</li>
</div>
   <?php require("../inc/out_adm.php") ?>
</div>
   	<script src="../js/mdui.min.js"></script>
</body>
</html>