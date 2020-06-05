<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>个人中心</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> 
	<link rel="stylesheet"  href="/Lab/public/bs/css/bootstrap.min.css">
	<script src="/Lab/public/bs/js/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="/Lab/public/bs/js/bootstrap.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">

		<div class="panel panel-default">
			<div class="panel-heading ">
				<nav class="navbar navbar-inverse" role="navigation">
					<div class="container-fluid">
				    <div class="navbar-header">
				        <a class="navbar-brand" href="#">个人中心</a>
				    </div>
				    <div>
				        <ul class="nav navbar-nav">
				            
				            <li>
				            	<form action="user.php" method="post" class="navbar-form navbar-right"   >
									<button type="button" class="btn btn-default btn-sm">
										<span class="glyphicon glyphicon-user"></span> User
									</button>
								</form>
				            </li>
				        </ul>
				    </div>
					</div>
				</nav>

			</div>
			<table class="table table-bordered">
				<th>用户名</th>
				<th>姓名</th>
				<th>地址</th>
				<th>电话</th>
				<th>操作</th>
				
				<?php 
				header("content-type:text/html;charset=utf-8");
				include('conn.php');
				session_start();
				$u= $_SESSION['name'] ;
				$sql="select * from user_1 where name=$u";
				$retival=mysql_query($sql);
				$row = mysql_fetch_array($retival, MYSQLI_ASSOC);
				$r=$row['name'];
				    echo "<tr><td> {$row['name']}</td> ".
				         "<td>{$row['full_name']} </td> ".
				         "<td>{$row['adress']} </td> ".
				         "<td>{$row['phone']} </td> ".
				         "<td>  <a href=\"change_user.php?action=$r\">修改信息</a>   </td> ".
				         "</tr>";

				 ?>
				</table>
		</div>

	</div>
</body>
</html>
