<?php
	require_once "OperService.class.php";
	//接收三个数
	//isset
	
	if(isset($_REQUEST['num1'])){
		$num1=$_REQUEST['num1'];
	}
	
	if(isset($_REQUEST['num2'])){
		$num2=$_REQUEST['num2'];
	}	

	if(isset($_REQUEST['oper'])){
		$oper=$_REQUEST['oper'];
	}
		
	//创建对象
	$operService=new OperService();
	echo $operService->getResult($num1,$num2,$oper);
	
	
?>	