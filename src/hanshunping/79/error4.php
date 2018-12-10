<?php
	//自定义错误函数
	function  my_error4($errno,$errmes){
		$err_info="错误号是:".$errno."--".$errmes;
		echo $err_info;
		//把这个错误信息保存
		//\r\n表示向文件输入一个回车换行
		//<br/>表示向网页输出一个回车换行
		error_log("时间是".date("Y-m-d G-i-s").$err_info."\r\n",3,"myerr.txt");
		exit();
	}

	function my_error3($errno,$errmes){
		echo "出大事了".$errno;
		exit();
	}

	//指定E_USER_WARNING 错误级别的函数
	set_error_handler("my_error3",E_USER_WARNING);
	set_error_handler("my_error4",E_USER_ERROR);

	$age=700;
	if($age>120){
		//调用触发器,时候同时指定错误级别.
		trigger_error("输入年龄过大",E_USER_ERROR);
		//exit();
	}

	echo "ok";
?>