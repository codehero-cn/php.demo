<?php

// 留言的删除页面

/**
文件名:del.php
功能:删除一条留言
典型Url:del.php?id=N

得到的数据: id
想展示给用户什么? :  是否删除成功

根据id,形成sql语句,执行-->连接数据库--->引入conn

1:先引入conn.php
2:获取$_GET['id']
3:根据$id 形成sql语句.
4:执行sql语句,返回结果赋给一个变量.
5:根据返回结果,判断并提示用户

**/


require('inc/conn.php');

$id = $_GET['id'] + 0;

$sql = "delete from msg where id = $id";


// 此处的$rs是语句语法本身的正确执行情况,
// $rs为真并不意味着一定删除了一行数据
// mysql_affected_rows()
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
<h1>删除成功</h1>


<?php } else { ?>

<img src="images/tjsb.png" width="98" height="85">
<h1>删除失败</h1>

<?php } ?>

</div>




</div>
</body>
</html>
