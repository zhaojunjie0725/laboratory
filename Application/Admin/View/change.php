<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>change</title>
	<link rel="stylesheet"  href="/Lab/public/bs/css/bootstrap.min.css">
	<script src="/Lab/public/bs/js/jquery.min.js"></script>
	<script src="/Lab/public/bs/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel-body">
			<form action="change_1.php" method="post">
				<div class="form-group">
					<label>修改为</label>
					<select class="form-control" name="type">
						<option value="1">一般用户</option>
		                <option value="2">管理员</option>
		                <option value="3">维修员</option>
					</select>
					<input type="hidden" name="id" value="<?php echo $_REQUEST['action']; ?>">
					<input type="hidden" name="type_l" value="<?php echo $_REQUEST['type_l']; ?>">
				</div>
				<div class="form-group">		
					<input type="submit" name="submit" class="btn btn-success" value="提交">
				</div>
			</form>
		</div>
	</div>
</body>
</html>