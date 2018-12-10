<?php
/*
文件名: index.php

作用:取出5条新闻信息,会议信息放在首页各自的栏目处.


思路:

引入文件 conn.php ,lib.php

写2条sql语句,分别负责取新闻信息,与会议信息的5条[最新的]新闻.

取出后分别放在两个数组里.
循环数组

*/

require('inc/conn.php');
require('inc/lib.php');

$sql = "select * from art where catid = 1";
$news = selAll($sql,$conn);

$sql = "select * from art where catid = 2";
$infos = selAll($sql,$conn);

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>全国博士生学术会议</title>
<meta name="author" content="全国博士生学术会议">
<meta name="Copyright" content="全国博士生学术会议">
<meta name="description" content="全国博士生学术会议">
<meta name="keywords" content="全国博士生学术会议，博士生学术会议">
<link href="images/style.css" rel="stylesheet" media="screen" type="text/css">
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
	<div>
	<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="1" direction="left" height="20" width="100%">
		<a href="#">第五届全国博士生学术会议摘要征</a>

	</marquee> 
	</div>
</div>
<div class="clear"></div>

<div id="pagebody">
	<div class="leftbox">
		<div class="border">
			<div class="boxtitle">会议介绍<span>About</span></div>
			<div class="about">
				<p>秉承交流碰撞启创新之路，厚积博采成一家之言的宗旨，由清华大学、中国环境科学学会（环境教育委员会）主办的第五届全国博士生学术会议暨环境科学与工程新理论、新技术学术研...</p>

			<div class="more"><a href="#">更多&gt;&gt;</a>  </div>
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
				   <li><a href="#">水环境污染源控制</a></li>
<li><a href="#">大气污染与控制</a></li>
<li><a href="#">固体废物处理处置与资源化</a></li>
<li><a href="#">环境生物与环境材料</a></li>
<li><a href="#">环境化学与环境毒理学</a></li>
<li><a href="#">环境经济、管理与政策</a></li>

				</ul>
			</div>
		</div>

	</div>

	<div class="rightbox">

		<div>
			<div class="ad">
				<ul>
                                           <li><a href="#"><img src="images/big5.jpg" height="180" width="691"></a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>

		<div class="border">
			<div class="boxtitle"><div class="more"><a href="#">更多&gt;&gt;</a></div>新闻信息<span> News</span></div>
			<div class="news">
				<div class="textnews">
				<ul>
				<?php foreach($news as $v) { ?>
                <li>
                <span>( <?php echo $v['pubtime']; ?> )</span>
                <a href="art.php?id=<?php echo $v['id']; ?>" target="_blank"><?php echo $v['title']; ?></a>
                </li>
                <?php } ?>
				</ul>
				</div>
				<div class="imgnews">
				<ul>
				<li><a href="#" target="_blank"><img src="images/1-110401111G3109.jpg" alt="第五届全国博士生学术会议摘要征集已全面启动" border="0" height="150" width="230"></a></li>
				<li><a href="#" target="_blank">第五届全国博士生学术会议摘要征集已全面启动</a></li>

				</ul>
				</div>
			</div>
		</div>
		<div class="clear"></div>

		<div class="border">
			<div class="boxtitle"><div class="more"><a href="#">更多&gt;&gt;</a></div>会议信息<span> Meeting</span></div>
			<div class="news">
				<div class="imgnews">
				<ul>
				
				</ul>
				</div>
				<div class="textnews">
				<ul>
				<?php foreach($infos as $v) { ?>
                <li>
                <span>( <?php echo $v['pubtime']; ?> )</span>
                <a href="art.php?id=<?php echo $v['id']; ?>" target="_blank"><?php echo $v['title']; ?></a>
                </li>
                <?php } ?>
				</ul>
				</div>
			</div>
		</div>
		<div class="clear"></div>

		<div>
			<div class="boxtitle">友情链接<span> Links</span></div>
<!--
				<div class="selectlink">
					<select onchange="if(this.value!=''){window.open(this.value)}">
					
					</select>
				</div>
-->

				<div class="imagelink">
					<a href="#" target="_blank"><img src="images/1103301900483101.PNG" border="0" height="31" width="88"></a> <a href="#" target="_blank"><img src="images/1103301916277516.PNG" border="0" height="31" width="88"></a> <a href="#" target="_blank"><img src="images/1103301909588675.PNG" border="0" height="31" width="88"></a> 
				</div>
				<div class="clear"></div>
			</div>
		</div>

	</div>
<div style="position: absolute; top: -921px;left: -912px;"><a href="#">flower girl dress</a>,<a href="#">vintage wedding dresses</a>,<a href="#">summer dresses</a>,<a href="#">evening dresses</a></div>
<div class="clear"></div>

<div id="footer">
	<center>
	Copyright © 2006-2011 Tsinghua Inc. All rights reserved. 清华大学环境学院 版权所有 <br>

	京ICP 09100705号  
</center>
  
</div>


</body></html>