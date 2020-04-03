<?php
//载入防后门访问函数
//cookie_door("true")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?php echo $title; ?>-后台登录</title>
    <link rel="stylesheet" type="text/css" href="../css/mdui.min.css">
</head>
<body class="mdui-theme-primary-blue mdui-theme-accent-blue mdui-appbar-with-toolbar">
		<div class="mdui-appbar mdui-appbar-fixed mdui-appbar-scroll-hide">
            <div class="mdui-toolbar mdui-color-theme-accent">
                <a href="javascript:;" onclick="back()" class="mdui-btn mdui-ripple mdui-btn-icon"><i class="mdui-icon material-icons">&#xe5c4;</i></a>
                <a href="javascript:;" onclick="back()" class="mdui-typo-title"><?php echo $pagetitle; ?></a>
            </div>
        </div>
    <div class="mdui-container-fluid">
    	<div class="mdui-row">
          <div style="text-align: center"><h1>管理员登录</h1></div>
          <form class="mdui-card" style="padding: 10px;margin: 0em 5em 0em 5em" action="" method="post">
            <div class="mdui-textfield mdui-textfield-floating-label mdui-textfield-has-bottom mdui-textfield-invalid-html5"><label class="mdui-textfield-label">用户名</label><input class="mdui-textfield-input" name="name" type="text" required=""><div class="mdui-textfield-error">用户名不能为空</div></div>

            <div class="mdui-textfield mdui-textfield-floating-label mdui-textfield-has-bottom mdui-textfield-invalid-html5"><label class="mdui-textfield-label">密码</label><input class="mdui-textfield-input" name="psw" type="password" required=""><div class="mdui-textfield-error">密码不能为空</div></div>

            <button type="submit" class="mdui-btn mdui-btn-raised mdui-ripple mdui-center mdui-color-theme-accent">登录</button>
          </form>
        </div>
    </div>
    <?php include("../inc/copying.html"); ?>
   	<script src="../js/mdui.min.js"></script>
    <script type="text/javascript">
        function back()
        {
            window.history.go(-1);
        }
    </script>
</body>
</html>
<?php
$name = $_POST['name'];
$psw = $_POST['psw'];
if ($name == "") {
}
if ($psw == "") {
}
$name = data_gl($name);
$psw = data_gl($psw);
$sql = "SELECT * FROM xc_note_admin WHERE id='1'";
$data = mysqli_query($config,$sql);
while ($row = mysqli_fetch_assoc($data)) {
    $names = $row['User'];
    $psws = $row['PassWord'];
}
if ($name == $names && $psw == $psws) {
    /*
    加密还在测试
     */
    setcookie("Xc_user", $name, time()+7200);
    setcookie("Xc_pswd", $psw, time()+7200);
    header("Location: ./");
}
?>