<?php

/*
文件名:pub.php
作用: 接收留言并入库

思路:

获取$_POST的值,
形成sql语句.
发送查询,
并根据查询结果,提示用户相关信息.
*/

require('inc/conn.php');

$title = $_POST['title'];
$name = $_POST['username'];
$content = $_POST['content'];


$sql = "insert into msg (title,name,content) values ('$title','$name','$content')";

$rs = mysql_query($sql,$conn);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言板</title>

<style type="text/css">
*{margin:0; padding:0; list-style:none; font-family:"宋体";}
body{background:url(images/bg.jpg) no-repeat;}
a{color:#2c2c2c; text-decoration:none;}
a:hover{color:#e31d25; text-decoration:underline;}
#bt{width:502px; height:413px; margin:0 auto; background:url(images/xm.png) no-repeat; margin-top:50px; padding-top:22px;
 padding-left:420px;}
#lb{
	width:265px; height:auto; overflow:hidden; margin:0 auto; margin-top:70px; color:#f93406;
	}
#lb img{
	 float:left;
	}
#lb h1{
	margin-top:20px; font-size:40px;
	}

	
</style>

<script type="text/javascript">
    function zou() {
        window.location.href = 'list.php';
    }

    window.setTimeout('zou()',2000);

</script>

</head>

<body>
<div id="bt">
<div id="lb">

<?php if($rs) { ?>

<img src="images/tjcg.png" width="98" height="85">
<h1>留言成功</h1>


<?php } else { ?>

<img src="images/tjsb.png" width="98" height="85">
<h1>留言失败</h1>

<?php } ?>

</div>




</div>
</body>
</html>





