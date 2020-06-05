<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>管理员界面</title>
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
				        <a class="navbar-brand" href="#">管理员界面</a>
				    </div>
				    <div>
				        <ul class="nav navbar-nav">
				            <li class="active"><a href="#">所有设备</a></li>
				            <li><a href="main_2.3.php">故障设备</a></li>
				            <li>
				            	<form action="search_1.php" method="post" class="navbar-form navbar-left"   >
									<div class="form-group">
										<input id="search" name="search" type="text" class="form-control" placeholder="请输入设备编号">
									</div>
									<button type="submit" class="btn btn-default">提交</button>
								</form>
				            </li>
				            <li>
				            	<form action="increase.php" method="post" class="navbar-form navbar-right">
				            		<div class="form-group">
				            			<button  type="text" class="btn btn-default">添加新设备</button>
				            		</div>
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
				<th>设备号</th>
				<th>设备名称</th>
				<th>价格</th>
				<th>配置</th>
				<th>厂家名称</th>
				<th>出厂日期</th>
				<th>实验室名</th>
				<th>操作1</th>
				<th>操作2</th>
				<th>操作3</th>
				
				<?php 
				header("content-type:text/html;charset=utf-8");
				include('conn.php');
				$sql='select * from device';
				$retval=mysql_query($sql);
				while($row = mysql_fetch_array($retval, MYSQLI_ASSOC))
				{
					$no=$row['d_no'];
					$name=$row['d_name'];
					if($row['d_or']!=1&&$row['f_or']!=1){
				    echo "<tr><td> {$row['d_no']}</td> ".
				         "<td>{$row['d_name']} </td> ".
				         "<td>{$row['d_price']} </td> ".
				         "<td>{$row['d_configuration']} </td> ".
				         "<td>{$row['d_factory']} </td> ".
				         "<td>{$row['d_date']} </td> ".
				         "<td>{$row['d_labname']} </td> ".
				         "<td>  <a href=\"../Function/delete.php?action=$no\">删除</a>   </td> ".
				         "<td>  <a href=\"change_in.php?action=$no\">修改信息</a>   </td> ".
				         "<td>  <a href=\"repair.php?action=$no&name=$name\">报修</a>   </td> ".
				         "</tr>";

				     }
				}
				 ?>
				</table>
		</div>

	</div>
</body>
</html>