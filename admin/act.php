<?php
require("../inc/function.php");
require("../config.php");
$act = $_REQUEST['act'];
if ($act == "") {
	die("非法操作");
}
else if ($act == "gx") {
	//检查更新
}
/**
 * 增加
 */
else if ($act == "next-note") {
	//增加笔记
	$title = $_POST['title']; //笔记标题
	$note = $_POST['note']; //笔记内容
    $sort = $_POST['sort']; //笔记分类
	echo "true";
}
else if ($act == "next-sort") {
	//增加分类
}
else if ($act == "next-links") {
	//增加友链
}
/**
 * 删除
 */
else if ($act == "de-note") {
	//删除笔记
}
else if ($act == "de-sort") {
	//删除分类
}
else if ($act == "de-links") {
	//删除友链
}
?>