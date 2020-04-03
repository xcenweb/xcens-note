<?php
//载入防后门访问函数和登录验证函数
//cookie_door("true")
//login_door("true")
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>wangEditor demo</title>
</head>
<body>
    <div id="editor"></div>
    <!-- <button id="btn1">可视化</button>
    <button id="btn2">文本</button> -->
    <button onclick="getnote()">发布</button>
    <div id="Div"></div>
    <script type="text/javascript" src="../js/wangEditor.min.js"></script>
    <script type="text/javascript">
        var E = window.wangEditor
        var editor = new E('#editor')
        editor.customConfig.uploadImgServer = '../img'              // 配置服务器端地址
        editor.customConfig.pasteFilterStyle = false                 // 关闭粘贴样式的过滤
        editor.customConfig.pasteIgnoreImg = true                    // 忽略粘贴内容中的图片
        editor.customConfig.pasteTextHandle = function (content) {   // 自定义处理粘贴的文本内容
            return content + '<p><br></p>'
        }
        editor.customConfig.linkImgCallback = function (url) {
            console.log(url) // url 即插入图片的地址
        }
        editor.customConfig.linkCheck = function (text, link) {
            console.log(text) // 插入的文字
            console.log(link) // 插入的链接
            return true // 返回 true 表示校验成功
            // return '验证失败' // 返回字符串，即校验失败的提示信息
        }
        editor.customConfig.linkImgCheck = function (src) {
            console.log(src) // 图片的链接
            return true // 返回 true 表示校验成功
            // return '验证失败' // 返回字符串，即校验失败的提示信息
        }
        editor.create()

        function getnote(){
            var xmlhttp;
            if (window.XMLHttpRequest)
            {
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    if (xmlhttp.responseText == "true"){
                        //发布成功
                        document.getElementById("Div").innerHTML="cg";
                    }
                }
            }
            xmlhttp.open("POST","act.php",true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xmlhttp.send("act=next-note&note="+editor.txt.html());
        }
        /*
          交给大佬了！！！！！！！
          
        document.getElementById('btn1').addEventListener('click', function () {
           var ksh = editor.txt.html()
           
           editor.txt.html(ksh)
        }, false)

        document.getElementById('btn2').addEventListener('click', function () {
           var ksh = editor.txt.text()
           
           editor.txt.html(ksh)
        }, false)
        */

    </script>
</body>
</html>