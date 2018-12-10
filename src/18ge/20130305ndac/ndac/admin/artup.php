<?php

/***
文件名: artup.php
作用: 修改文章的表单页面.

问题: 应该把待修改的文章信息,取出来,作为表单的默认值

参数: id

思路:
引入conn.php
引入lib.php

获取地址栏上的id,

根据id拼接sql语句,
调用selRow查询结果

再结果显示在表单


攻关点:
1:栏目列表如何动态从数据库取出来?
写select 语句 select * from category;
取出所有栏目,并循环显示成option

2:如果让这个文章所属的栏目被默认选中?
在循环过程,加判断,谁的id==当前文章的catid,
就选中谁.


*///


require('../inc/conn.php');
require('../inc/lib.php');

$id = $_GET['id'] + 0;
$sql = "select * from art where id = $id";

$info = selRow($sql,$conn);



$sql = "select * from category";
$list = selAll($sql,$conn);


///print_r($list);exit;
// print_r($info);exit;


if(!$info) {
    echo "参数有误";
    exit;
}



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>发布文章页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<style type="text/css">
textarea {
    width:600px;
    height:200px;
}
</style>
</head>
    <body>
        <h1>发布文章</h1>
        <form action="artup_ok.php" method="POST">
            <p>文章标题:<input type="text" name="title" value="<?php echo $info['title']; ?>" /></p>
            <p>
                所属栏目:
                <select name="catid">
                    <option value="0">--请选择栏目--</option>
                    <?php foreach($list as $v) { ?>
                    <option value="<?php echo $v['id'] ?>" <?php echo $info['catid']==$v['id']?'selected="selected"':'' ?>><?php echo $v['catname']; ?></option>
                    <?php } ?>
                </select>
            </p>
            <p>
                文章内容:<br />
                <textarea name="content"><?php echo $info['content']; ?></textarea>
            </p>
            <p>
                <input type="hidden" name="id" value="<?php echo $info['id']; ?>" />
                <input type="submit" value="发布" />
            </p>
        </form>
    </body>
</html>