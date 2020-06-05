<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>维护员界面</title>
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
				        <a class="navbar-brand" href="#">维修员界面</a>
				    </div>
				    <div>
				        <ul class="nav navbar-nav">
				            <li class="active"><a href="#">故障设备</a></li>
				            <li><a href="myrepair.php">我的维修</a></li>
				            <li>
				            	<form action="search.php" method="post" class="navbar-form navbar-left"   >
									<div class="form-group">
										<input id="search" name="search" type="text" class="form-control" placeholder="请输入设备编号">
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
				<th>故障序列</th>
				<th>故障名称</th>
				<th>设备号</th>
				<th>故障日期</th>
				<th>故障信息</th>
				<th>经手人</th>
				<th>操作</th>
				
				<?php 
				header("content-type:text/html;charset=utf-8");
				include('conn.php');
				$sql='select * from faulty_equip';
				$retval=mysql_query($sql);
				while($row = mysql_fetch_array($retval, MYSQLI_ASSOC))
				{
					$no=$row['d_id'];
					$mo=$row['fa_id'];
					// if($row['d_or']!=1){
				    echo "<tr><td> {$row['fa_id']}</td> ".
				         "<td>{$row['fa_name']} </td> ".
				         "<td>{$row['d_id']} </td> ".
				         "<td>{$row['fa_date']} </td> ".
				         "<td>{$row['fa_information']} </td> ".
				         "<td>{$row['use_name']} </td> ".
				         "<td>  <a href=\"torepair.php?action=$no&fa_id=$mo\">维修</a>   </td> ".
				         "</tr>";

				     //}
				}
				 ?>
				</table>
		</div>

	</div>
</body>
</html>