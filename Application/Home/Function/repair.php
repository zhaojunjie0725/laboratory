<?php 
session_start();
header("content-type:text/html;charset=utf-8");
include('conn.php');
if(!isset($_POST['submit'])){
    exit('非法访问!');
}
$se_id=htmlspecialchars($_POST['se_id']);
$d_id=htmlspecialchars($_POST['d_id']);
$break_id=htmlspecialchars($_POST['break_id']);
$se_date=htmlspecialchars($_POST['se_date']);
$se_information=htmlspecialchars($_POST['se_information']);
$changeconfiguration=htmlspecialchars($_POST['changeconfiguration']);
$dealer=htmlspecialchars($_POST['dealer']);
$re_name=htmlspecialchars($_POST['re_name']);
$remark=htmlspecialchars($_POST['remark']);

$sql="insert into service_table".
	 "(se_id,d_id,break_id,se_date,se_information,changeconfiguration,dealer,re_name,remark)".
	 "values".
	 "('$se_id','$d_id','$break_id','$se_date','$se_information','$changeconfiguration','$dealer','$re_name','$remark')";
$retval=mysql_query($sql);

//更新故障状态；
$sqli="update device set f_or=0 where d_no=$d_id";
$retvali=mysql_query($sqli);

$sqli="delete from faulty_equip where fa_id=$break_id";
$retvali=mysql_query($sqli);
if(! $retval )
{
  die('错误: ' . mysql_error($conn));
}
echo "维修成功\n";


 ?>