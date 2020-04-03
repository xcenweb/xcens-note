<?php
error_reporting(0);
require("./config.php");
require("./inc/function.php");
$maintitle = get_maintitle($config);
$webtitle = get_webtitle($config,$maintitle);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?php echo $webtitle; ?></title>
    <link rel="stylesheet" type="text/css" href="./css/mdui.min.css">
</head>
<body class="mdui-theme-primary-blue mdui-theme-accent-blue mdui-drawer-body-left mdui-appbar-with-toolbar">
    <?php require("./inc/header.php"); ?>
    <?php require("./inc/cehua.php"); ?>
    <div class="mdui-container-fluid">
    	<div class="mdui-container-fluid mdui-col-xs-12 mdui-col-sm-8">
            <?php
            $sql = "SELECT * FROM xc_note";
            $res = $config->query($sql);
            $data = $res->fetch_all();
            foreach ($data as $v) {
                $notelink = "see.php?nid=".$v[0];
                $maintitle = $v[1];
                $subtitle = $v[5];
                $fl = $v[3];
                $time = $v[4];
                echo '<div class="mdui-card" style="margin-top:0.8em;margin-bottom:0.8em;margin-left: 0.9em;margin-right: 0.9em"> 
                          <div class="mdui-card-primary">
                              <a style="text-decoration: none;" class="mdui-card-primary-title  mdui-text-color-black" href="'.$notelink.'">'.$maintitle.'</a>
                              <div class="mdui-card-primary-subtitle">'.$subtitle.'</div>
                              <div class="mdui-text-left"><div class="mdui-chip"><span class="mdui-chip-title">'.$fl.'</span></div></div>
                          </div>
                      </div>';
            }
mysqli_close($config);
?> 
        </div>
    	<div class="mdui-container-fluid mdui-col-xs-12 mdui-col-sm-4"><?php include("./inc/cbl.html"); ?></div>
    </div>
    <?php include("./inc/copying.html"); ?>
   	<script src="./js/mdui.min.js"></script>
</body>
</html>