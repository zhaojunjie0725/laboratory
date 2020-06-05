<?php
/*****************************
*数据库连接
*****************************/
header("content-type:text/html;charset=utf-8");
$conn = @mysql_connect("localhost","root","20000725","runoob");
if (!$conn){
    die("连接数据库失败：" . mysql_error());
}
mysql_select_db("runoob", $conn);
//字符转换，读库
mysql_query("set character set 'gbk'");
//写库
mysql_query("set names 'gbk'");
?>