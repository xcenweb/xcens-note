function delcookie(){ 
    var x;
	var r=confirm("你确定要退出后台管理？");
	if (r==true){
	    var date=new Date(); 
        date.setTime(date.getTime()-7200); 
        document.cookie="Xc_user"+"=v; expires="+date.toGMTString();
        document.cookie="Xc_pswd"+"=v; expires="+date.toGMTString();
        window.location.href="./";
	}
}