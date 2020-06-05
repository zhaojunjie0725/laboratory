<?php 

session_start();
header("content-type:text/html;charset=utf-8");
include('conn.php');
$action=$_REQUEST['action'];
$sql="delete from device where d_no=$action";
$retival=mysql_query($sql);
if(! $retival )
{
  die('无法删除: ' . mysql_error($conn));
}
echo "删除成功\n";


 ?>