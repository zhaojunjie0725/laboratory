<?php
header("content-type:text/html;charset=utf-8");
if(!isset($_POST['submit'])){
    exit('非法访问!');
}
$username = $_POST['name'];
$password = $_POST['password'];
$type=$_POST['type'];
//注册信息判断
if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
    exit('错误：用户名应为3-15的数字或字符。<a href="javascript:history.back(-1);">返回</a>');
}
if(strlen($password) < 6){
    exit('错误：密码长度应大于或等于6。<a href="javascript:history.back(-1);">返回</a>');
}

//包含数据库连接文件
include('conn.php');
//检测用户名是否已经存在
$check_query = mysql_query("select id from user_1 where name='$username' and type='$type' limit 1");
if(mysql_fetch_array($check_query)){
    echo '错误：用户名 ',$username,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
    exit;
}
//写入数据

$regdate = time();
$sql = "INSERT INTO user_1(name,password,type)VALUES('$username','$password','$type')";

if(mysql_query($sql,$conn)){
    exit('用户注册成功！点击此处 <a href="login.html">登录</a>');
} else {
    echo '抱歉！添加数据失败：',mysql_error(),'<br />';
    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}

?>