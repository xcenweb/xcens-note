<?php 
require_once("../config.php");
require_once("../inc/function.php");
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
    <form action="" method="post">
        <div class="mdui-container-fluid" style="padding: 1em 0.6em 1em 0.6em">
            <h1>新增笔记</h1>
            <div class="mdui-card" style="padding: 0.5em">
                <div class="mdui-textfield">
                    <label class="mdui-textfield">标题</label><input class="mdui-textfield-input" name="title" type="text">
                </div>
            </div>
            <div class="mdui-card" style="padding: 0.5em;margin: 0.4em auto">
                <div class="mdui-textfield">
                    <label class="mdui-textfield">笔记内容</label><input class="mdui-textfield-input" name="note" type="text">
                </div>
            </div>
            <dir class="mdui-card" style="padding: 0.5em;margin: 0.4em auto">
                <h4>选择分类</h4>正在开发。。。
            </dir>
        </div>
        <button type="submit" class="mdui-btn mdui-btn-raised mdui-ripple mdui-center mdui-color-theme-accent">发布</button>
    </form>
    <script src="../js/page.js"></script>
   	<script src="../js/mdui.min.js"></script>
</body>
</html>
<?php
$title = $_POST['title'];
$note = $_POST['note'];
if($title =="" && $note == ""){
    
}else{
    $data = putnote_sql_form($config,$title,$note,'默认分类','','','0');
}

?>