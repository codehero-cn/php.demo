<?php
	function A(){
		//调用方法
		//添加用户
		//我需要这样做,addUser和updateUser都成功，才算成功。
		$res1=addUser("shunping");//
		//修改用户
		$res2=updateUser("xx");
		if($res1 && $res2){
			echo"真的成功";
		}else{
			echo"失败";
		}
	}
	
	//添加用法
	function addUser($username){
		if($username=="shunping"){
			//添加成功
			return true;
		}else {
			//失败
			return false;
		}
	}
	function updateUser($username){
		if($username=="xiaoming"){
			//修改成功
			return true;
		}else{
			//失败	
		} 
	}
	A();
?>