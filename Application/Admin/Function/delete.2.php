<?php 
//删除故障设备信息；
session_start();
header("content-type:text/html;charset=utf-8");
include('conn.php');
$action=$_REQUEST['action'];
$sql="delete from device where d_no=$action";
$retival=mysql_query($sql);

$sqli="delete from faulty_equip where d_id=$action";
$retivali=mysql_query($sqli);

if($retival&&$retivali)
	echo "数据删除成功";
else
	echo mysql_error();
 ?>