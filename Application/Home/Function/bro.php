
<?php 
session_start();
header("content-type:text/html;charset=utf-8");
include('conn.php');
$action=$_REQUEST['action'];

//判断借用是否合法；
$sql="select d_or from device where d_no=$action";

//向use_table插入一条数据；
$sql="insert into use_table".
	 "(d_id,c_id)".
	 "values".
	 "('{$action}','{$_SESSION['id']}')";
$retval=mysql_query($sql);

$use_name=$_SESSION['name'];
//更新设备表中设备是否被借走
$t=$_SESSION['id'];
$sql="update device set d_or=1,use_name='$use_name' where d_no=$action ";
$m=mysql_query($sql);

if(! $retval )
{
  die('错误: ' . mysql_error($conn));
}
echo "借用成功\n";



 ?>