<?php 
session_start();
header("content-type:text/html;charset=utf-8");
include('conn.php');
$d_no=$_POST['d_no'];
$d_name=$_POST['d_name'];
$d_price=$_POST['d_price'];
$d_configuration=$_POST['d_configuration'];
$d_factory=$_POST['d_factory'];
$d_date=$_POST['d_date'];
$d_labname=$_POST['d_labname'];
$d_or=0;
$f_or=0;

$sql="INSERT INTO device".
        "(d_no,d_name,d_price,d_configuration,d_factory,d_date,d_labname,d_or,f_or) ".
        "VALUES ".
        "('$d_no','$d_name','$d_price','$d_configuration','$d_factory','$d_date','$d_labname','$d_or','f_or')";
$retval=mysql_query($sql);
if(! $retval )
{
  die('无法插入数据: ' . mysql_error($conn));
}
echo "数据插入成功\n";



 ?>