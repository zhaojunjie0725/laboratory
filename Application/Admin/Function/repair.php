<?php 
session_start();
header("content-type:text/html;charset=utf-8");
include('conn.php');
$fa_id=$_POST['fa_id'];
$fa_name=$_POST['fa_name'];
$d_id=$_POST['d_id'];
$fa_date=$_POST['fa_date'];
$fa_information=$_POST['fa_information'];
$sqli="select * from device where d_no=$d_id ";
$result=mysql_query($sqli);
$r=mysql_fetch_array($result);

//向故障表中插入数据；
$s= $r['use_name'];
$sql="insert into faulty_equip".
	 "(fa_id,fa_name,d_id,fa_date,fa_information,use_name) ".
     "VALUES ".
     "('$fa_id','$fa_name','$d_id','$fa_date','$fa_information','$s')";
$retval=mysql_query($sql);

//更新故障状态；
$sqli="update device set f_or=1 where d_no=$d_id";
$retvali=mysql_query($sqli);
if(! $retval )
{
  die('错误: ' . mysql_error($conn));
}
echo "报修成功\n";



 ?>