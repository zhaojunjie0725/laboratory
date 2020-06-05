<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>系统管理员界面</title>
	<link rel="stylesheet"  href="/Lab/public/bs/css/bootstrap.min.css">
	<script src="/Lab/public/bs/js/jquery.min.js"></script>
	<script src="/Lab/public/bs/js/bootstrap.min.js"></script>
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
										<input id="search" name="search" type="text" class="form-control" placeholder="请输入设备编号">
									</div>
									<button type="submit" class="btn btn-default">提交</button>
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
				
				<?php 
					include('conn.php');
					$t= $_POST['search'];

					$sql="select * from user_1 where name=$t ";
					$retval=mysql_query($sql);
					mysql_error();
					while($row = mysql_fetch_array($retval, MYSQLI_ASSOC))
						{
						    echo "<tr><td> {$row['id']}</td> ".
						         "<td>{$row['name']} </td> ".
						         "<td>{$row['type']} </td> ".
						         "</tr>";
						}

 ?>
				</table>
		</div>

	</div>
</body>
</html>






