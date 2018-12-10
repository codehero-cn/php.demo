<?php
/*
文件名:cat.php
典型url: cat.php?cid=N

功能:
显示某栏目下所有文章

思路?
引入文件conn.php,lib.php
根据cid拼接sql语句.

调用selAll,获取某栏目下所有的文章列表

循环返回的数组


需要思考的问题:
给定的cid是栏目的id,
如果根据该cid取出,该栏目下的所有文章呢?
假设cid=3;

反过来思考---就是取所有catid=3的所有文章



*/


require('inc/conn.php');
require('inc/lib.php');


$cid = $_GET['cid'] + 0;

$sql = "select * from art where catid = $cid";

$list = selAll($sql,$conn);

//print_r($list);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>全国博士生学术会议</title>
<meta name="author" content="全国博士生学术会议" />
<meta name="Copyright" content="全国博士生学术会议" />
<meta name="description" content="全国博士生学术会议" />
<meta name="keywords" content="全国博士生学术会议，博士生学术会议" />
<link href="images/style.css" rel="stylesheet" media="screen" type="text/css" />
</head>
<body>

<div id="header">
	<div class="banner"></div>

	<div class="menu">
		<ul>
		<li><a href='index.php'>首页</a></li>
		<li><a href='cat.php?cid=1'>新闻信息</a></li>
		<li><a href='cat.php?cid=2'>会议信息</a></li>
		<li><a href='cat.php?cid=3'>资料下载</a></li>
		<li><a href='cat.php?cid=4'>往届回顾</a></li>
		<li><a href='cat.php?cid=5'>会议主题</a></li>
		<li><a href='/fifth/about/contact.html'>联系我们</a></li>
		</ul>
	</div>
</div>

<div id="pagebody">
	<div class="leftbox">

		<div class="border">
			<div class="boxtitle">会议介绍<span>About</span></div>
			<div class="about">
				<p>秉承交流碰撞启创新之路，厚积博采成一家之言的宗旨，由清华大学、中国环境科学学会（环境教育委员会）主办的第五届全国博士生学术会议暨环境科学与工程新理论、新技术学术研...</p>

			<div class="more"><a href="#">更多>></a>  </div>
			</div>

		</div>

		<div class="border">
			<div class="boxtitle">用户中心<span>Login</span></div>
			<div id="login" class="login">
			<form action="">
                用户名:<input type="text" name="username" /><br />
                密&nbsp;&nbsp;码:<input type="password" name="passwd" /><br />
                <input type="submit" value="登陆"> &nbsp;&nbsp;
                <a href="">注册</a>
            </form>
			</div>
		</div>

		<div class="border">
			<div class="boxtitle">会场主题<span> Theme</span></div>
			<div class="theme">
				<ul>
				   <li><a href='/fifth/theme/0331332011.html'>水环境污染源控制</a></li>
<li><a href='/fifth/theme/0331342011.html'>大气污染与控制</a></li>

<li><a href='/fifth/theme/0331352011.html'>固体废物处理处置与资源化</a></li>
<li><a href='/fifth/theme/0331362011.html'>环境生物与环境材料</a></li>
<li><a href='/fifth/theme/03313H011.html'>环境化学与环境毒理学</a></li>
<li><a href='/fifth/theme/03313R011.html'>环境经济、管理与政策</a></li>

				</ul>
			</div>
		</div>

	</div>

	<div class="rightbox">

		<div class="border">
			<div class="boxtitle">第五届  /  会议信息</div>
			<div class="list">
				<ul>
                <?php foreach($list as $v) { ?>
                    <li>
                    <span>[ <?php echo $v['pubtime']; ?> ]</span>
                    <a href="art.php?id=<?php echo $v['id']; ?>"><?php echo $v['title']; ?></a>
                    </li>
                <?php } ?>
				</ul>
			</div>
			<div class="pages">
			<li><span class="pageinfo">共 <strong>1</strong>页<strong>4</strong>条记录</span></li>

			</div>
		</div>

	</div>
</div>
<div class="clear"></div>

<div id="footer">
	<center>
	Copyright © 2006-2011 Tsinghua Inc. All rights reserved. 清华大学环境学院 版权所有 <br />

	京ICP 09100705号  
</center>
  

</div>

</body>
</html>