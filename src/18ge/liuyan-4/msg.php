<?php

/*
文件名: msg.php
典型url: msg.php?id=N

作用: 根据id=N,查询id=N的留言

思路:
读取地址栏的GET值,把id读出来.

根据id形成sql语句,
发送sql查询.
查到msg的信息.

*/

require('inc/conn.php');
require('inc/lib.php');


$id = $_GET['id'] + 0;
$sql = "select * from msg where id = $id";

$info = selRow($sql,$conn);


// print_r($info);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言板</title>
</head>
<style type="text/css">
*{margin:0; padding:0; list-style:none; font-family:"宋体";}
body{background:url(images/bg.jpg) no-repeat;}
a{color:#2c2c2c; text-decoration:none;}
a:hover{color:#e31d25; text-decoration:underline;}
#bt{width:502px; height:413px; margin:0 auto; background:url(images/xm.png) no-repeat; margin-top:50px; padding-top:22px;
 padding-left:420px;}
#lb{
	width:465px; height:auto; overflow:hidden; margin:0 auto; margin-top:70px;
	}


#lb h1{width:465px; margin:0 auto; color:#fd8e1c; text-align:center;
     }	
#lb p{line-height:25px; font-size:14px; color:#8f8f8f;}	
	
</style>
<body>
<div id="bt">
<div id="lb">
<h1><?php echo $info['title']; ?></h1>
<p>
<?php echo $info['content']; ?>
</p>
<p><a href="up.php?id=<?php echo $info['id']; ?>">修改</a>&nbsp;&nbsp;<a href="del.php?id=<?php echo $info['id']; ?>">删除</a></p>
</div>




</div>
</body>
</html>




