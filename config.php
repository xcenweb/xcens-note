<?php
header("Content-type:text/html;charset=utf-8");
$website = "localhost";
$img_cbl = "http://localhost/img/1.jpg";
$version = "1.0";
$config = mysqli_connect("localhost","root","040618","xc_note");
mysqli_query($config,"set names utf8");
if (!$config) {
    die("连接服务器失败" . mysql_connect_error());//连接服务器失败退出程序
}
/*
$sqlSecet = "";
$retval = mysqli_query($config,$sqlSecet);
if($retval){
    $strObj = mysqli_fetch_array($retval,MYSQLI_ASSOC);
    echo "<ul>
        <li>ID:$strObj[id]</li>
        <li>title:$strObj[Title]</li>
        <li>Note:$strObj[Note]</li>
        <li>Sort:$strObj[Sort]</li>
        <li>Time:$strObj[Time]</li>
        </ul>
    ";
}else{
	die("404");
}*/