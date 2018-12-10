<?php 

/*
文件名: list.php
作用: 从数据库中读取所有的留言

思路:
调用conn.php,
形成sql语句.

发送sql查询
查询显示
打印
*/

require('inc/conn.php');
require('inc/lib.php');

$sql = 'select * from msg';
$list = selAll($sql,$conn);

//print_r($list);


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言板</title>
</head>
<style type="text/css">
*{margin:0; padding:0; list-style:none; font-family:"宋体"; font-size:14px; color:#8f8f8f;}
body{background:url(images/bg.jpg) no-repeat;}
a{color:#8f8f8f; text-decoration:none;}
a:hover{color:#e31d25; text-decoration:underline;}
#bt{width:502px; height:413px; margin:0 auto; background:url(images/xm.png) no-repeat; margin-top:50px; padding-top:22px;
 padding-left:420px;}
#lb{
	width:465px; height:auto; overflow:hidden; margin:0 auto; margin-top:85px;
	}
	
#lb ul li{
    display:block;
	}	
#lb li{
	padding-left:2px;  line-height:25px;
	}	
	
	
</style>
<body>
<div id="bt">
<div id="lb">
<ul>

<?php foreach($list as $v) { ?>
<li>留言标题:<a href="msg.php?id=<?php echo $v['id']; ?>"><?php echo $v['title']; ?></a></li>
<?php } ?>

</ul>
</div>




</div>
</body>
</html>






