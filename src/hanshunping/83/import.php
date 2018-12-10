<?php
	//没有防止
	//获取REFERER
	if(isset($_SERVER['HTTP_REFFRER'])){
		//取出来
		//判断$_SERVER['HTTP_REFERER']是不是以http://localhost/http开始->函数
		if(strpos($_SERVER['HTTP_REFFRER'],"http://localhost/http")==0){
			echo "韩顺平的账号你信息....";
		}else{
			//跳转到警告页面
			header("Location:warning.php");
		}
	}else 
		//跳转到警告页面
		header("Location:warning.php");


/*
	$str="abc  helloaaa";
	echo strpos($str,"hello");
*/

?>