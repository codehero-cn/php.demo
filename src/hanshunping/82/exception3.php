<?php
	//定义一个顶级异常处理器
	function my_exception($e){
	echo "我是顶级异常处理器".$e->getMessage();
		}
		//修改默认的顶级异常处理函数(器)
	set_exception_handler("my_exception");
	
	function a1($val){
		if($va1>100){
			
			throw new Exception("val>100");
			
		}
	}
	
	function a2($val){
		if($val=="hello"){
			throw new Exception("不要输入hello");
		}
	}
	try{
	a2("hello");
	}catch(Exception $e){
		//获取
		//echo $e->getMessage();
		//可以继续抛出，这时将会启动php默认的异常处理器来处理
		//你可以自已定义一个顶级异常处理。
		throw $e;
	}

	
	
	
	
	
?>