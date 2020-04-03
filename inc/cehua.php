<?php
//此处为侧滑的html代码
/**
 * 这里的版权归晓空所有
 */
print <<<EOT
    <div class="mdui-drawer mdui-color-white mdui-appbar-inset mdui-drawer" id="drawer">
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">home</i>
        <a href="./" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;主页</a>
    </div>
 
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">file_upload</i>
        <a href="./sort.php" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;分类</a>
    </div>
	
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple disabled">
        <i class="mdui-list-item-icon mdui-icon material-icons">book</i>
        <a href="#" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading disabled">&nbsp;&nbsp;&nbsp;搜索</a>
    </div>
	<div class="mdui-divider"></div>

    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple disabled">
        <i class="mdui-list-item-icon mdui-icon material-icons">android</i>
        <a href="./links.php" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading disabled">&nbsp;&nbsp;&nbsp;友链</a>
    </div>
	
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">settings</i>
        <a href="#" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;工具</a>
    </div>
	
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">message</i>
        <a href="#" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;关于</a>
    </div>
	<!--  -->
	<!-- 侧滑结束 -->
  </div>
EOT;
?>