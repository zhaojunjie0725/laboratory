<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>系统管理员界面</title>
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
				        <a class="navbar-brand" href="#">系统管理员界面</a>
				    </div>
				    <div>
				        <ul class="nav navbar-nav">
				            <li>
				            	<form action="search.php" method="post" class="navbar-form navbar-left"   >
									<div class="form-group">
										<input id="search" name="search" type="text" class="form-control" placeholder="请输入用户名">
									</div>
									<button type="submit" class="btn btn-default">提交</button>
								</form>
				            </li>
				            <li>
				            	<form action="../../../PUBLIC/php/user.php" method="post" class="navbar-form navbar-left"   >
									<button type="" class="btn btn-default btn-sm">
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
				<th>用户ID</th>
				<th>用户名</th>
				<th>用户类型</th>
				<th>操作</th>
				
				<?php 
				session_start();
				header("content-type:text/html;charset=utf-8");
				include('conn.php');
				$sql="select * from user_1 ";
				$retval=mysql_query($sql);
				while($row = mysql_fetch_array($retval, MYSQLI_ASSOC))
				{
					$t=$row['id'];
					$l=$row['type'];
					if($row['type']!=4)
				    echo "<tr><td> {$row['id']}</td> ".
				         "<td>{$row['name']} </td> ".
				         "<td>{$row['type']} </td> ".
				         "<td>  <a href=\"change.php?action=$t&type_l=$l\">修改权限</a>   </td> ".
				         "</tr>";
				}
				 ?>
				</table>
		</div>

	</div>
</body>
</html>
