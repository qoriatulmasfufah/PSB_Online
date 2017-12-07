<!-- <!DOCTYPE html>
<html>
	<head>
		<title>PSB Online SMK Telkom Malang</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		HEADER
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				<div id="header">
					<div class="container">
					<div id="header-title">PSB Online | SMK TELKOM Malang</div>
					</div>
				</div>
			</div>
		</div> -->

		<div class="container" style="max-width: 800px">
			<br>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
					  	<div class="panel panel-info">
							<div class="panel-heading">Lihat Detil Data Siswa</div>
					    	<div class="panel-body">
					    		<div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" id="nama" name="nama" autofocus placeholder="Nama Lengkap" value="<?php echo $data->nama; ?>" class="form-control"  disabled />
									</div>
									<br>
						    		<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
										<textarea id="alamat" name="alamat" placeholder="Alamat Lengkap" class="form-control" disabled><?php echo $data->alamat;?></textarea>
									</div>
									<br>
						    		<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
										<input type="number" id="telp" name="telp" autofocus placeholder="Nomor Telepon" value="<?php echo $data->no_telp; ?>" class="form-control" disabled />
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
										<input type="text" id="asal_smp" name="asal_smp" autofocus placeholder="Asal SMP" value="<?php echo $data->asal_smp; ?>" class="form-control" disabled />
									</div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
									<div id="foto-siswa">
										<img width="150" height="200" src="<?php echo base_url('uploads/'.$data->foto);?>">
									</div>
								</div>
								<br>

								<!-- LINK KEMBALI KE TABEL DATA SISWA --> <!--data_siswa dibawah diambil dari method dalam controller admin-->
								<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="margin-top: 10px;">
									<a href="<?php echo base_url();?>index.php/admin/data_siswa" class="btn btn-md btn-primary" >Kembali</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<br>
		</div>

