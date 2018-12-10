<?php

// 连接数据库的公共文件

$conn = mysql_connect('localhost','root','111111');

if(!$conn) {
    echo '连接失败';
    exit;
}


$sql = 'use ndac';
mysql_query($sql,$conn);

/*

要此文件的目的是??
重用代码,减少冗余

*/





