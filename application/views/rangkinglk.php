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

			<div class="col-md-9">
			
				<h3>Halaman ranking</h3>	
				
				<table id="table" class="table table-striped table-bordered">
				<thead>
					<tr>
					
					<th scope="col">Nama peserta</th>
					<th scope="col">total nilai</th>
					<th scope="col">Rangking</th>
					</tr>
				</thead>
				<tbody>

				<?php 
				$no = 1;
				foreach($duta as $rangking){ 
				?>
				<tr>
					
					<td><?php echo $rangking->nama ?></td>
					<td><?php echo $rangking->total_nilai ?></td>
					<td><?php echo $no++ ?></td>
					
				</tr>

				<?php } ?>

				</tbody>
				</table>
				
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