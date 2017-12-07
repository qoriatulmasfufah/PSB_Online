<?php
	if (!empty($notif)) {
		echo '<div class="alert alert-danger">';
		echo "$notif";
		echo '</div>';
	}
?>

<form method="post" id="form-pendaftaran" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/pendaftaran/simpan">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
					  	<div class="panel panel-primary">
							<div class="panel-heading">Biodata Siswa</div>
					    	<div class="panel-body">
					        	
					        	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input type="text" id="nama" name="nama" autofocus value="" placeholder="Nama Lengkap" class="form-control"  />
								</div>
								<br>
					    		<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
									<textarea id="alamat" name="alamat" value="" placeholder="Alamat Lengkap" class="form-control" ></textarea>
								</div>
								<br>
					    		<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
									<input type="text" id="telp" name="telp" autofocus value="" placeholder="Nomor Telepon" class="form-control"  />
								</div>
								<br>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
									<input type="text" id="asal_smp" name="asal_smp" autofocus value="" placeholder="Asal SMP" class="form-control" />
								</div>
								<br>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
									<input type="file" name="foto" autofocus class="form-control" required />
								</div>


					    	</div>
					   	</div>
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
						<input type="submit" name="submit" value="DAFTAR" class="btn btn-block btn-md btn-primary">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
						<input type="reset" name="reset" value="RESET" class="btn btn-block btn-md btn-danger">
					</div>
				</div>
			</form>