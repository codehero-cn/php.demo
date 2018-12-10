<?php

/*
文件名:list.php
作用: 显示所有文章

思路:
引入conn.php
引入库lib.php
写select 语句

调用selAll,
把结果foreach循环显示
*/


require('../inc/conn.php');
require('../inc/lib.php');

$sql = 'select * from art';

/*
$sql = select art.id,art.title,category.catname from art left join category on art.catid = category.id;
*/



$list = selAll($sql,$conn);




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>文章列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<style type="text/css">

</style>
</head>
    <body>
        <h1>文章列表</h1>
        <table border="1">
            <tr>
                <td>所属栏目</td><td>文章标题</td><td>发布时间</td><td>操作</td>
            </tr>
            <?php foreach($list as $v) { ?>
            <tr>
                <td><?php echo $v['catid']; ?></td>
                <td><?php echo $v['title']; ?></td>
                <td><?php echo $v['pubtime']; ?></td>
                <td>
                    <a href="artup.php?id=<?php echo $v['id']; ?>">编辑</a>
                    &nbsp;&nbsp;
                    <a href="artdel.php?id=<?php echo $v['id']; ?>">删除</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>


