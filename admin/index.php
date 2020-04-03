<?php
/**
 * 后台登录验证
 */
/*error_reporting(0);*/
require_once("../config.php");
require_once("../inc/function.php");
if ($_COOKIE["Xc_user"] == null && $_COOKIE['Xc_pswd'] == null) {
	include("./login.php");
} else{
	if (!"1" == "1") {
		die("");
	} else {
		if ($_GET['act'] == null) {
			include("./admin.php");
		}
		else if ($_GET['act'] == "note") {
			header("Location: ./note.php");
			//include("./note.php");
		}
		else if ($_GET['act'] == "sort") {
			header("Location: ./sort.php");
			//include("./sort.php");
		}
		else if ($_GET['act'] == "write") {
			header("Location: ./write-note.php");
			//include("./write-note.php");
		}
		else if ($_GET['act'] == "about") {
			header("Location: ./about.php");
			//include("./about.php");
		}
		else if ($_GET['act'] == "set") {
			header("Location: ./set.php");
			//include("./set.php");
		}
	}
	
}
//setcookie("user", "xcen", time()+3600);
//setcookie("user", "", time()-3600)
//echo $_COOKIE["user"];
?>