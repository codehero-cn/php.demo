<?php

	
	//定义了一个异常
	class MyException1 extends Exception{
		

	}

	class MyException2 extends Exception{
	
	}

	function A(){
		
		throw new MyException1("a");
	}

	function B(){
		throw new MyException2("b");
	}

	function C(){
		
		try{
			A();//抛出MyException1
			B();//抛出MyException2
		}catch(Exception1 $e1){
			$e1->getMessage();
		}catch(Exception2 $e2){
			$e2->getMesage();
		}
	}


?>
