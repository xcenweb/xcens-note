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
        <h1>设置</h1>
    </div>
    <script src="../js/page.js"></script>
   	<script src="../js/mdui.min.js"></script>
</body>
</html>