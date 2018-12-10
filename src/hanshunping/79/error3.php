<?php

	//定义了一个函数（我用于处理错误的函数）
	function my_error($errno,$errmes){
		echo "<font size='5' color='red'>$errno</font><br/>";
		echo "错误信息是:".$errmes;
		exit();
	}

	//改写set_error_handler处理器
	//下面这句话的含义是 ： 如果出现了 E_WARNING这个级别的错误,就去调用my_error函数.
	set_error_handler("my_error",E_WARNING);

	$fp=fopen("aa.txt","r");
	
?>
