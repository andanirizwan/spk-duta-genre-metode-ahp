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
			
				<h3>Halaman Data Calon Duta</h3>	
				<a href="<?php echo base_url('page/tambahdataduta'); ?>" class="btn btn-success" type="button"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Tambah Data</a> <br><br>
				
				<table id="table" class="table table-striped table-bordered">
				<thead>
					<tr>
					<th scope="col">No</th>
					<th scope="col">Nama</th>
					<th scope="col">ttl</th>
					<th scope="col">jenis kelamin</th>
					<th scope="col">alamat</th>
					<th scope="col">No Hp</th>
					<th scope="col">#</th>
					</tr>
				</thead>
				<tbody>

				<!-- <?php 
				$no = 1;
				foreach($makanan as $makanan1){ 
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $makanan1->nama_makanan ?></td>
					<td><?php echo $makanan1->karbohidrat ?></td>
					<td><?php echo $makanan1->protein ?></td>
					<td><?php echo $makanan1->lemak ?></td>
					
					<td>
					<a href="<?php echo base_url('page/editdatamakanan/'); ?><?php echo $makanan1->id ?>" class="btn btn-info" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
					<a href="<?php echo base_url('page/hapusmakanan/'); ?><?php echo $makanan1->id ?>" class="btn btn-danger" type="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</a>
					
				</tr>

				<?php } ?> -->

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