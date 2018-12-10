<?php

/*
文件名: artpub_ok.php
作用: 接收POST数据,插入数据库

思路:
调用conn.php,连接数据库
根据POST数据拼接sql语句.(insert)

执行该语句,并根据返回结果提示用户.
*/




// print_r($_POST);


require('../inc/conn.php');


$title = $_POST['title'];
$catid = $_POST['catid'] + 0;
$content = $_POST['content'];

$pubtime = time(); // time()函数在PHP里取得当前的时间戳

$sql = "insert into art (title,catid,content,pubtime) values ('$title',$catid,'$content',$pubtime)";

$rs = mysql_query($sql,$conn);



if(!$rs) {
    echo '发布失败';
    print_r(mysql_error());
    exit;
} else {
    echo '发布成功';
    exit;
}




