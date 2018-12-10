<?php
/*
文件名: artup_ok.php
作用: 修改一篇文章


得到的数据:
修改后的文章信息,以及文章id

要做的操作:
把修改的后信息更新到数据库.


思路:
引入conn.php
引入lib.php

接收POST数据
根据POST数据,拼接sql语句.

执行sql语句.

并根据执行结果,提示用户.


*/

require('../inc/conn.php');
require('../inc/lib.php');


$title = $_POST['title'];
$content = $_POST['content'];
$catid = $_POST['catid'] + 0;
$id = $_POST['id'] + 0;


$sql = "update art set title = '$title',catid = $catid,content = '$content' where id = $id";

/*
echo $sql;
exit;
*/


$rs = mysql_query($sql,$conn);

if(!$rs) {
    echo "修改失败";
    print_r(mysql_error());
    exit;
} else {
    echo "修改成功";
    exit;
}







