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
				        <a class="navbar-brand" href="#"></a>
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
				<th>设备号</th>
				<th>设备名称</th>
				<th>价格</th>
				<th>配置</th>
				<th>厂家名称</th>
				<th>出厂日期</th>
				<th>实验室名</th>
				
				<?php 
					include('conn.php');
					$t= $_POST['search'];

					$sql="select * from device where d_no=$t ";
					$retval=mysql_query($sql);
					mysql_error();
					while($row = mysql_fetch_array($retval, MYSQLI_ASSOC))
						{
						    echo "<tr><td> {$row['d_no']}</td> ".
						         "<td>{$row['d_name']} </td> ".
						         "<td>{$row['d_price']} </td> ".
						         "<td>{$row['d_configuration']} </td> ".
						         "<td>{$row['d_factory']} </td> ".
						         "<td>{$row['d_date']} </td> ".
						         "<td>{$row['d_labname']} </td> ".
						         "</tr>";
						}

 ?>
				</table>
		</div>

	</div>
</body>
</html>






