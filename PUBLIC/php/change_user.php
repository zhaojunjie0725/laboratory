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
				        <a class="navbar-brand" href="#">用户中心</a>
				    </div>
				    <div>
				        <ul class="nav navbar-nav">
				            <li class="active"><a href="main_1.php">修改个人信息</a></li>
				 
				        </ul>
				    </div>
					</div>
				</nav>

			</div>
			<div class="panel-body">
				<form action="change_user_1.php" method="post" >
					<div class="form-group">
						<label for="">姓名</label>
						<input type="text" class="form-control" name="full_name" id="" >
					</div>
					<div class="form-group">
						<label for="">地址</label>
						<input type="text" class="form-control" name="adress" id="">
					</div>

					<div class="form-group">
						<label for="">联系电话</label>
						<input type="text" class="form-control" name="phone" id="" >
					</div>

					<div class="form-group">
						<input type="hidden" class="form-control" name="name" id="" value="<?php echo $_REQUEST['action']; ?>" >
					</div>

						
						<input type="submit" name="submit" class="btn btn-success" value="提交">
						<input type="reset" class="btn btn-danger" value="重置">
					</div>
				</form>
			</div>
			
		</div>

	</div>
</body>
</html>