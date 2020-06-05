<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>维护员界面</title>
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
				            <li class="active"><a href="#">维修设备</a></li>
				 
				        </ul>
				    </div>
					</div>
				</nav>

			</div>
			<div class="panel-body">
				<form action="../Function/repair.php" method="post" >
					<div class="form-group">
						<label for="">维修号</label>
						<input type="text" class="form-control"name="se_id" id="" >
					</div>
					<div class="form-group">
						<label for="">设备号</label>
						<input type="text" class="form-control"name="d_id" id="" value="<?php echo $_REQUEST['action']; ?>">
					</div>

					<div class="form-group">
						<label for="">故障序号</label>
						<input type="text" class="form-control"name="break_id" id="" value="<?php echo $_REQUEST['fa_id']; ?>" >
					</div>

					<div class="form-group">
						<label for="">维修日期</label>
						<input type="date" class="form-control"name="se_date" id="">
					</div>

					<div class="form-group">
						<label for="">维修内容</label>
						<input type="text" class="form-control"name="se_information" id="">
					</div>

					<div class="form-group">
						<label for="">改变配置</label>
						<input type="text" class="form-control"name="changeconfiguration" id="">
					</div>

					<div class="form-group">
						<label for="">维修金额</label>
						<input type="text" class="form-control"name="dealer" id="">
					</div>

					<div class="form-group">
						<input type="hidden" class="form-control"name="re_name" id="" value="<?php session_start(); echo $_SESSION['name'] ?>">
					</div>

					<div class="form-group">
						<label for="">备注</label>
						<input type="text" class="form-control"name="remark" id="">
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