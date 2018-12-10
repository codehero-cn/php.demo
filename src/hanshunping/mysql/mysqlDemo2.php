<?php

	//演示对user1表进行增，删除，修改的操作

	$conn=mysql_connect("localhost","root","1234");
	if(!$conn){
		die("出错了".mysql_error());
	}

	mysql_select_db("test",$conn) or die(mysql_error());

	mysql_query("set names utf8");

	//$sql="insert into user1 (name,password,email,age) values('小明',md5('123'),'xiaoming@sohu.com',34)";

	//$sql="delete from user1 where id=5";
	$sql="update user1 set age=100 where id=6";
	//如果是dml操作，则返回bool
	$res=mysql_query($sql,$conn);

	if(!$res){
		die("操作失败".mysql_error());
		
	}

	//看看有几条数据
	if(mysql_affected_rows($conn)>0){
		echo "操作成功";
	}else{
		echo "没有影响到行数";
	}
	//	mysql_free_result($res);这句会报错，因为res是一个布尔值。
	mysql_close($conn);
?>
