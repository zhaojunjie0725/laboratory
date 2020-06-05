<?php 
// 修改故障设备信息
session_start();
header("content-type:text/html;charset=utf-8");
include('conn.php');
$fa_id=$_POST['fa_id'];
$fa_name=$_POST['fa_name'];
$d_id=$_POST['d_id'];
$fa_date=$_POST['fa_date'];
$fa_information=$_POST['fa_information'];
$use_name=$_POST['use_name'];

//更新故障设备信息表
$sql="update faulty_equip
	   set
	      fa_id='$fa_id',	  
	      fa_name='$fa_name',
		  d_id='$d_id',
		  fa_information='$fa_information',
		  use_name='$use_name'
	   where
	   		fa_id='$fa_id'
	 ";
$retval=mysql_query($sql);

if(! $retval )
{
  die('无法插入数据: ' . mysql_error($conn));
}
//更新设备表
$sqli="update device
	   set
	      d_no='$fa_id',	  
		  use_name='$use_name'
	   where
	   		d_no='$fa_id'
	 ";
$retvali=mysql_query($sqli);
echo "故障设备信息修改成功\n";



 ?>