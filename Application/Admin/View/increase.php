<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>管理员界面</title>
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
				        <a class="navbar-brand" href="#">管理员界面</a>
				    </div>
				    <div>
				        <ul class="nav navbar-nav">
				            <li class="active"><a href="#">添加设备</a></li>
				 
				        </ul>
				    </div>
					</div>
				</nav>

			</div>
			<div class="panel-body">
				<form action="../Function/increase_1.php" method="post" >
					<div class="form-group">
						<label for="">设备号</label>
						<input type="text" class="form-control"name="d_no" id="" >
					</div>
					<div class="form-group">
						<label for="">设备名称</label>
						<input type="text" class="form-control"name="d_name" id="" >
					</div>

					<div class="form-group">
						<label for="">价格</label>
						<input type="text" class="form-control"name="d_price" id="" >
					</div>

					<div class="form-group">
						<label for="">配置</label>
						<input type="text" class="form-control"name="d_configuration" id="">
					</div>

					<div class="form-group">
						<label for="">厂家名称</label>
						<input type="text" class="form-control"name="d_factory" id="">
					</div>

					<div class="form-group">
						<label for="">出厂日期</label>
						<input type="date" class="form-control"name="d_date" id="">
					</div>

					<div class="form-group">
						<label for="">实验室名</label>
						<input type="text" class="form-control"name="d_labname" id="">
					</div>

					<div class="form-group">
						
						<input type="submit" name="submit" class="btn btn-success" value="提交">
						<input type="reset" class="btn btn-danger" value="重置">
					</div>
				</form>
			</div>
			
		</div>

	</div>
</body>
</html>