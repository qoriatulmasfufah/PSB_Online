<!DOCTYPE html>
<html>
	<head>
		<title>PSB Online SMK Telkom Malang</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	</head>
	<body>
		<!-- HEADER -->
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				<div id="header">
					<div class="container">
					<div id="header-title">PSB Online | SMK TELKOM Malang</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container" style="max-width: 800px">
			<br>
			

			<!--CONTENT BODY-->
			<?php
				$this->load->view($main_view);
			?>

			<br>
		</div>

		<!-- FOOTER -->
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				<div id="footer">
					&copy; 2017.SMK Telkom Malang 
				</div>
			</div>
		</div>
	</body>
</html>