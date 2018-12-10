<?php

// 留言修改的表单页面

/*
文件名: up.php
典型url: up.php?id=N

作用: 根据id展示一个修改表单.
表单的值根据id而定.


思路:

先引入数据库连接页面,
再引入函数库(lib)
取得地址栏上id的值
形成sql语句, select * from msg where id = N;
调用selRow,以sql为参数
返回的值赋给一个变量

把变量显示在表单里,以value的形式出现
*/


require('inc/conn.php');
require('inc/lib.php');


$id = $_GET['id'] + 0;
$sql = "select * from msg where id = $id";

$info = selRow($sql,$conn);

if(!$info) {
    echo "参数有误!";
    exit;
}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言板</title>

<style type="text/css">
*{margin:0; padding:0; list-style:none; font-family:"宋体"; font-size:16px;}
body{background:url(images/bg.jpg) no-repeat;}
#bt{width:436px; height:413px; margin:0 auto; background:url(images/ym.png) no-repeat; margin-top:50px; padding-top:22px;
 padding-left:486px;}
.wbk{width:220px; height:23px; 
margin-top:80px; margin-left:96px; border:none; 
background:0; padding-top:7px;
font-size:16px;}
.wbkd{width:220px; height:23px; margin-top:22px; margin-left:96px; border:0; background:0; padding-top:7px; font-size:16px;}
.nrk{width:354px; border:0; background:none; height:80px; margin-top:55px; border:none; padding-left:5px; line-height:25px;}
.an{margin-left:64px; margin-top:16px;}
</style>

<script type="text/javascript">
    function chkmsg() {
        var obj = document.getElementsByName('title')[0];
        if(obj.value == '') {
            alert('标题不能为空');
            return false;
        }

        obj = document.getElementsByName('username')[0];
        if(obj.value == '') {
            alert('姓名不能为空');
            return false;
        }

        obj = document.getElementsByName('content')[0];
        if(obj.value == '') {
            alert('内容不能为空');
            return false;
        }
    }
</script>

</head>
<body>

<div id="bt">
<form onsubmit="return chkmsg();" method="post" action="up_ok.php">
    <p><input type="text" name="title" value="<?php echo $info['title']; ?>" class="wbk" /></p>
    <p><input type="text" name="username" value="<?php echo $info['name']; ?>" class="wbkd" /></p>
    <p>
    <textarea name="content" class="nrk"><?php echo $info['content']; ?></textarea>
    </p>
    <p>
        <input type="hidden" name="id" value="<?php echo $info['id']; ?>" />
        <input type="image" src="images/an.jpg" class="an" />
    </p>

    </form>
</div>
</body>
</html>
