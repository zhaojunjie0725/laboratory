<?php 
session_start();
include('conn.php');
$action=$_REQUEST['action'];
//更新设备表中设备是否被借走
$t=$_SESSION['id'];
$sql="update device set d_or=0 where d_no=$action ";
$m=mysql_query($sql);

//删除use_table中的一条数据
$sql="delete from use_table  where d_id=$action ";
$retval=mysql_query($sql);


if(! $retval )
{
  die('错误: ' . mysql_error($conn));
}
echo "归还成功\n";





 ?>