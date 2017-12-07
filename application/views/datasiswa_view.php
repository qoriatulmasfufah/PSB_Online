

		<div class="container" style="max-width: 800px">
			<br>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">

					  	<div class="panel panel-info">

							<div class="panel-heading">Data Pendaftar</div>
					    	<div class="panel-body">

								<table border="0" cellpadding="4" cellspacing="0" class="datatable table table-striped table-bordered">
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Asal SMP</th>
										<th>Alamat</th>
										<th>No.Telp</th>
										<th>Aksi</th>
									</tr>

								<?php
									$no = 1;
									foreach ($pendaftar as $data)//$pendaftar dari data siswa
									{
										echo '
										<tr>
											<td>'.$no.'</td>
											<td>'.$data->nama.'</td>
											<td>'.$data->asal_smp.'</td>
											<td>'.$data->alamat.'</td>
											<td>'.$data->no_telp.'</td>
											<td>
												<a href="'.base_url().'index.php/admin/detail_siswa/'.$data->id.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i> Lihat</a>

												<a href="'.base_url().'index.php/admin/hapus/'.$data->id.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
											</td>
										</tr>
										';
										$no++;
									}
								?>
								</table>
								<a href="<?php echo base_url();?>index.php/admin/logout" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-log-out"></i> LogOut</a>

								<!--menampilkan halaman-->
								<?php echo $pagination; ?>
							</div>
						</div>
					</div>
				</div>
			<br>
		</div>

