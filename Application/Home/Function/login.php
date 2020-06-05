<?php
header("content-type:text/html;charset=utf-8");
session_start();
if(!isset($_POST['submit'])){
    exit('非法访问!');
}
$username = htmlspecialchars($_POST['name']);
$password =  htmlspecialchars($_POST['password']);
$type=htmlspecialchars($_POST['type']);

//包含数据库连接文件
include('conn.php');
//检测用户名及密码是否正确
$check_query = mysql_query("select id from user_1 where name='$username' and password='$password' and type='$type' limit 1");


if($result = mysql_fetch_array($check_query)){
	$_SESSION["admin"] = true;  //注册登录成功的admin变量，并赋值true；
    //登录成功
    $_SESSION['name'] = $username;
    $_SESSION['id'] = $result['id'];
    $_SESSION['type']=$type;
    echo  $type;
    switch($_SESSION["type"]){
	  case 1:
	    header("location: ../View/main_1.php");
	    break;
	  case 2:
	    header("location:../../Admin/View/main_2.php");
	    break;
	  case 3:
	    header("location:../View/main_3.php");
	    break;
	   case 4:
	    header("location: ../../Admin/View/main_4.php");
	    break;
	  default:
	    header("location: topage.php");
    break;
}
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
?>
