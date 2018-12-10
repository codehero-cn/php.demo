<?php
	//mysql扩展库操作mysql数据库步骤如下
	//1.获取连接
	$conn=mysql_connect("127.0.0.1", "root","1234");
	if(!$conn){
		die("连接失败".mysql_error());
		}
	//2.选择数据库
	mysql_select_db("test");
	//3.设置操作编码（建议有)!!!
	mysql_query("set names utf8"); //保证我们的php程序是按照utf8码操作.
	//4.发送指令sql(ddl数据定义语句,dml(数据操作语言 update insert,delete),dql(select),dtl数据事务语句rollback,commit...)
	$sql="select * from user1";
	//函数
	//$res 表示结果集，你可以简单的理解就是  一张表。
	$res=mysql_query($sql,$conn);
	var_dump($res);//mysql result 资源类型
	//5.接收返回的结果并处理.(显示)
	//mysql_fecth_row 会依次取出$res结果集的下一行数据，赋职给$row
	//$row就是一个数组,样式array (size=5)
    //0 => string '1' (length=1)
    //1 => string 'zs' (length=2)
  	//2 => string 'e10adc3949ba59abbe56e057f20f883e' (length=32)
  	//3 => string 'zs@sohu.com' (length=11)
    //4 => string '30' (length=2)
	//mysql_fetch_assoc mysql_fetch_array
	//mysql_close($conn); //这里就算加这句，后面的也会显示，因为关数据库不会马上关。
	while($row=mysql_fetch_row($res)){
		//第一种取法是通过$row[$i]
		//echo "<br/>$row[0]--$row[1]--$row[2]";
		//echo"<br/>";
		//var_dump($row);
		//第二种取法
		foreach($row as $key=>$val){
			echo"--$val";
		}
		echo"<br/>";
	}
	//6.释放资源，关闭连接(必须)
	mysql_free_result($res);
	//下面这句话可以没有，建议有.
	mysql_close($conn); 

    
?>