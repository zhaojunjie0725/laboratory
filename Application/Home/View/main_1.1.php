<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>普通用户界面</title>
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
				        <a class="navbar-brand" href="#">一般用户界面</a>
				    </div>
				    <div>
				        <ul class="nav navbar-nav">
				            <li><a href="main_1.php">所有设备</a></li>
				            <li class="active"><a href="main_1.1.php">我的借用</a></li>
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
				<th>使用编号</th>
				<th>设备编号</th>
				
				<?php 
				session_start();
				header("content-type:text/html;charset=utf-8");
				include('conn.php');
				$se=$_SESSION['id'];
				$sql="select * from use_table where c_id='$se'";
				$retval=mysql_query($sql);
				while($row = mysql_fetch_array($retval, MYSQLI_ASSOC))
				{
					$no=$row['d_id'];
				    echo "<tr><td> {$row['use_id']}</td> ".
				         "<td>{$row['d_id']} </td> ".
				         "<td>  <a href=\"../Function/return.php?action=$no\">归还</a>   </td> ".
				         "</tr>";
				}
				 ?>
				</table>
		</div>

	</div>
</body>
</html>



