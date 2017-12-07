

<!DOCTYPE html>
<html>
	<head>
		<title>PSB Online SMK Telkom Malang</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	</head>
	<body>
		<div class="container" style="padding-top: 150px;">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"></div>
				<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Login Administrator</h4></div>
				    	<div class="panel-body">
				    	<?php
							if (!empty($notif)) {
								echo '<div class="alert alert-danger">';
								echo "$notif";
								echo '</div>';
							}
						?>
							<form action="<?php echo base_url();?>index.php/admin/login" method='post' id="form-login">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input type="text" id="username" name="username" autofocus value="" placeholder="Username" class="form-control" />
								</div>
								<br>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input type="password" id="password" name="password" autofocus value="" placeholder="Password" class="form-control" />
								</div>
								<br>
								<input type="submit" name="submit" value="LOGIN" class="btn btn-block btn-sm btn-danger">
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"></div>
			</div>
		</div>
	</body>
</html>