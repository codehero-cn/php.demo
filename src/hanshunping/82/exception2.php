<?php
	function checkNum($val){
		if($val>100){
			throw new Exception("err_no1： 这是数据过大");
		}else{
			echo"输入的值是正常";
		}
	}
	try{
	checkNum(300);
	
	}catch(Exception $e){
		
		echo $e->getMessage()."--".$e->getLine();
		
	}
?>