<?php

/*
文件名: lib.php
作用: 封装查询函数
给定select语句, 返回查询结果
*/



// 根据select 语句返回所有行.
function selAll($sql,$conn) {
    $rs = mysql_query($sql,$conn);
    if(!$rs) {
        showError();
    }

    $list = array();

    while($row = mysql_fetch_assoc($rs)) {
        $list[] = $row;
    }

    return $list;
}



/// 根据select 语句返回1行
function selRow($sql,$conn) {
    $rs = mysql_query($sql,$conn);
    
    if(!$rs) {
        echo '查询失败','<br />';
        echo mysql_error();
        exit;
    }

    return mysql_fetch_assoc($rs);
}



function showError() {
    echo '查询失败','<br />';
    echo mysql_error();
    exit;
}