<?php
//载入防后门访问函数
//cookie_door("true")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="../css/mdui.min.css">
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
    <div class="mdui-container-fluid">
        <div class="mdui-row" style="padding: 1em 0.6em 1em 0.6em">
            <div class="mdui-card mdui-col-xs-12 mdui-col-sm-3 mdui-color-pink-accent" style="margin: 0.4em 4px 0.4em 4px;padding: 0.6em 0.6em 0.6em 0.6em">
                笔记总数<br><center><h3><?php echo get_sql_num($config,"xc_note"); ?></h3></center>
            </div>
            <div class="mdui-card mdui-col-xs-12 mdui-col-sm-3 mdui-color-pink-accent" style="margin: 0.4em 4px 0.4em 4px;padding: 0.6em 0.6em 0.6em 0.6em">
                分类总数<br><center><h3><?php echo get_sql_num($config,"xc_note_sort"); ?></h3></center>
            </div>
            <div class="mdui-card mdui-col-xs-12 mdui-col-sm-3 mdui-color-pink-accent" style="margin: 0.4em 4px 0.4em 4px;padding: 0.6em 0.6em 0.6em 0.6em">
                访客总数<br><h3>Not Found</h3>
            </div>
        </div>
    </div>
    <script src="../js/page.js"></script>
   	<script src="../js/mdui.min.js"></script>
</body>
</html>