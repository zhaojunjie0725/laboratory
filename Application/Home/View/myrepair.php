<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>维修员界面</title>
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
				        <a class="navbar-brand" href="#">维修员界面</a>
				    </div>
				    <div>
				        <ul class="nav navbar-nav">
				            <li><a href="main_3.php">故障设备</a></li>
				            <li class="active"><a href="#">我的维修</a></li>
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
				<th>维修号</th>
				<th>设备号</th>
				<th>故障序号</th>
				<th>维修日期</th>
				<th>维修内容</th>
				<th>改变配置</th>
				<th>维修金额</th>
				<th>维修人</th>		
				<th>备注</th>		
				<?php 
				session_start();
				header("content-type:text/html;charset=utf-8");
				include('conn.php');
				$se=$_SESSION['name'];
				$sql="select * from service_table where re_name='$se'";
				$retval=mysql_query($sql);
				while($row = mysql_fetch_array($retval, MYSQLI_ASSOC))
				{
					$no=$row['d_id'];
				    echo "<tr><td> {$row['se_id']}</td> ".
				         "<td>{$row['d_id']} </td> ".
				         "<td>{$row['break_id']} </td> ".
				         "<td>{$row['se_date']} </td> ".
				         "<td>{$row['se_information']} </td> ".
				         "<td>{$row['changeconfiguration']} </td> ".
				         "<td>{$row['dealer']} </td> ".
				         "<td>{$row['re_name']} </td> ".
				         "<td>{$row['remark']} </td> ".
				         "</tr>";
				}
				 ?>
				</table>
		</div>

	</div>
</body>
</html>



