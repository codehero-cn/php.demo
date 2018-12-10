<?php
	//print_r($_SERVER);
	foreach($_SERVER as $key=>$val){
		echo "$key=$val <br/>";
	}
	//可以指定取出访问该页面的ip
	echo "朋友你的ip是:".$_SERVER['REMOTE_ADDR'];
	if($_SERVER['REMOTE_ADDR']=="192.168.1.100"){
		//跳转到一个警告页面
		header("Location:err.php");
		
	}
?>