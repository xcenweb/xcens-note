<?php
error_reporting(0);
require("config.php");
require("./inc/function.php");
$maintitle = get_maintitle($config);
$webtitle = get_webtitle($config,$maintitle);

$nid = $_GET['nid'];
if ($nid == "") {
    header("Location: ./");
}
$nid = data_gl($nid);
$sql = "SELECT * FROM xc_note WHERE id='".$nid."'";
$data = mysqli_query($config,$sql);
while($row = mysqli_fetch_assoc($data)){
    $wordtitle = $row['Title'];
    $note = $row["Note"];
    $id = $row["id"];
    $sort = $row["Sort"];
    $time = $row["Time"];
}
mysqli_close($config);
?>
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
            <div class="mdui-row" style="margin: 0.8em 0.9em 0.8em 0.9em">
                <div><h1><?php echo $wordtitle; ?></h1></div>
                <div class="mdui-card" style="padding: 0.7em 0.7em 0.7em 0.7em">
                    <div><?php echo $note; ?></div>
                </div>
            </div>
            <div class="mdui-text-center"><small>记录日期：<?php echo $time; ?></small></div>
        </div>
        <div class="mdui-container-fluid mdui-col-xs-12 mdui-col-sm-4"><?php include("./inc/cbl.html"); ?></div>
    </div>
    <?php include("./inc/copying.html"); ?>
   	<script src="./js/mdui.min.js"></script>
</body>
</html>