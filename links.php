<?php require("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="./css/mdui.min.css">
    <link rel="stylesheet" type="text/css" href="./css/page.css">
</head>
<body class="mdui-theme-primary-blue mdui-theme-accent-blue mdui-drawer-body-left mdui-appbar-with-toolbar">
    <?php require("./inc/header.php"); ?>
    <?php require("./inc/cehua.php"); ?>
    <div class="mdui-container-fluid">
        <div class="mdui-container-fluid mdui-col-xs-12 mdui-col-sm-8">
            <h1>暂未开发，敬请期待！</h1>
        </div>
        <div class="mdui-container-fluid mdui-col-xs-12 mdui-col-sm-4"><?php include("./inc/cbl.html"); ?></div>
    </div>
    <?php include("./inc/copying.html"); ?>
   	<script src="./js/mdui.min.js"></script>
</body>
</html>