<?php 

header("content-type:text/html;charset=utf-8");

$name=$_POST['name'];
$full_name=$_POST['full_name'];
$adress=$_POST['adress'];
$phone=$_POST['phone'];
$sql="update user_1 set full_name=$full_name,adress=$adress,phone=$phone where name=$name ";
include('conn.php');
$retval=mysql_query($sql);
if(! $retval )
{
  die('无法修改: ' . mysql_error($conn));
}
echo "修改成功\n";
echo '点击此处 <a href="javascript:history.back(-1);">返回</a>';





 ?>