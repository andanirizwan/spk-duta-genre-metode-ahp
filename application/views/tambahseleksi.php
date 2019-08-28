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
				<h3>Penilaian calon duta genre</h3>

				<form action="<?php echo base_url(). 'page/updateseleksi'; ?>" method="post">

					<label for="nama">Nama : </label>
					<select class="form-control" name="id_nama">
						<option selected>-- pilih --</option>
						<?php 
						foreach($seleksi as $seleksi1){ 
						?>
						<option value="<?php echo $seleksi1->id ?>"><?php echo $seleksi1->nama ?></option>
					</select>

					<label for="kriteria">tes tertulis : </label>
					<input class="form-control" type="text" name="tes_tertulis" placeholder="Masukan tes tertulis" required>
					<label for="kriteria">presentasi : </label>
					<input class="form-control" type="text" name="presentasi" placeholder="Masukan presentasi" required>
					<label for="kriteria">wawancara : </label>
					<input class="form-control" type="text" name="wawancara" placeholder="Masukan wawancara" required>
					<label for="kriteria">uji bakat : </label>
					<input class="form-control" type="text" name="uji_bakat" placeholder="Masukan uji bakat" required>
					
					
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Tambah data seleksi</button> 
					<a href="<?php echo base_url('page/hasilpenilaian'); ?>" class="btn btn-info" type="button"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Kembali</a> <br>
					
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