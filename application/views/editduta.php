<!DOCTYPE html>
<html>
<head>
	<title>SPK - Duta Genre (metode ahp)</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/datatables.css'); ?>">

</head>
<body>
	
<nav class="navbar fixed-top navbar-dark bg-primary" style="background-color: #77E592;">
<center><h1>SPK - Duta Genre (Metode AHP)</h1></center>
</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
			<ul class="list-group">
					<li class="list-group-item"><a href="<?php echo base_url('page/beranda'); ?>">Beranda</a></li>
					<li class="list-group-item"><a href="<?php echo base_url('page/calonduta'); ?>">Calon Duta</a></li>
					<li class="list-group-item"><a href="<?php echo base_url('page/kriteria'); ?>">Kriteria</a></li>
					<ul class="list-group">
					<li class="list-group-item"><a href="<?php echo base_url('page/hasilpenilaian') ?>">Hasil Penilaian</a></li>
					<li class="list-group-item"><a href="<?php echo base_url('page/hasilpenilaianlk') ?>">laki -laki</a></li>
					<li class="list-group-item"><a href="<?php echo base_url('page/hasilpenilaianpr') ?>">Perempuan</a></li>
					</ul>
					<ul class="list-group">
					<li class="list-group-item"><a href="<?php echo base_url('page/rangking') ?>">rangking</a></li>
					<li class="list-group-item"><a href="<?php echo base_url('page/rangkinglk') ?>">laki -laki</a></li>
					<li class="list-group-item"><a href="<?php echo base_url('page/rangkingpr') ?>">Perempuan</a></li>
					</ul>
					<li class="list-group-item"><a href="<?php echo base_url('autentication/logout'); ?>">Logout</a></li>
				</ul>
			</div>

			<div class="col-md-3">	
				<h3>Edit Data calon Duta</h3>
				<form action="<?php echo base_url(). 'page/updateduta'; ?>" method="post">

				<?php 
				$no = 1;
				foreach($duta as $duta1){ 
				?>

					<label for="nama">Nik :</label>
					<input class="form-control" type="text" name="nik" placeholder="Masukan Nik" value="<?php echo $duta1->nik ?>" required>
					<label for="kriteria">Nama : </label>
					<input class="form-control" type="text" name="nama" placeholder="Masukan nama" value="<?php echo $duta1->nama ?>" required>
					<label for="kriteria">ttl</label>
					<input class="form-control" type="text" name="ttl" placeholder="Masukan ttl" value="<?php echo $duta1->ttl ?>" required>
					<label for="kriteria">Jenis Kelamin</label>
					<select class="form-control" name="jenis_kelamin">
						<option selected>-- pilih --</option>
						<option value="laki_laki">laki - laki</option>
						<option value="perempuan">perempuan</option>
					</select>
					<label for="kriteria">Agama</label>
					<select class="form-control" name="agama">
						<option selected>-- pilih --</option>
						<option value="islam">islam</option>
						<option value="kristen">kristen</option>
						<option value="katholik">katholik</option>
						<option value="budha">budha</option>
						<option value="konghucu">konghucu</option>
					</select>
					<label for="kriteria">no telp</label>
					<input class="form-control" type="text" name="no_telp" placeholder="Masukan no telp" value="<?php echo $duta1->no_telp ?>" required><br>
					<input type="hidden" name="id" value="<?php echo $duta1->id ?>">

					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Edit Data duta</button> 
					<a href="<?php echo base_url('page/calonduta'); ?>" class="btn btn-info" type="button"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Kembali</a> <br>
					*silakan masukan nama calon duta yang diingikan <br>
				<?php 
				} 
				?>
				</form>		
				
			</div>
		</div>
	</div>

			<nav class="navbar fixed-bottom navbar-light bg-light" style="background-color: #77E592;" >
			<center><p class="text-center">&copy Spk - Metode AHP</p></center>
			</nav>
	</div>


	<script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
	<script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/datatables/datatables.js'); ?>"></script>
	<script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js'); ?>"></script>

	<script>
	$(document).ready( function () {
    	$('#table').DataTable();
	} );
	</script>



</body>
</html>