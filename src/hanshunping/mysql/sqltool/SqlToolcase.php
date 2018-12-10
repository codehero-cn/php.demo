<?php
	require_once "SqlTool.class.php";	
	//************************************
	/*$sql="insert into user1(name,password,email,age) values('小
			明',md5('123'),'xiaoming@sohu.com',34)";
	//创建SqlTool对象
	$sqlTool=new SqlTool();
	
	
	$res=$sqlTool->execute_dml($sql);
	
	if($res==0){
		echo"失败";
	}else if($res==1){
		echo"成功";
	}else if($res==2){
		echo"没有行数影响";
	}*/
	//***************************************
	$sql="select * from user1";
	$sqlTool=new SqlTool();
	$res=$sqlTool->execute_dql($sql);
	while($row=mysql_fetch_row($res)){
		foreach($row as $key=>$val){
		echo"--$val";
	}
	echo "<br/>";
	}
	mysql_free_result($res);
	?>