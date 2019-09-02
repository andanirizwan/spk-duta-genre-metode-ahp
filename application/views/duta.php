
				<h3>Halaman Data Calon Duta</h3>	
				<a href="<?php echo base_url('page/tambahdataduta'); ?>" class="btn btn-success" type="button"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Tambah Data</a> <br><br>
				
				<table id="table" class="table table-striped table-bordered">
				<thead>
					<tr>
					<th scope="col">No</th>
					<th scope="col">Nik</th>
					<th scope="col">Nama</th>
					<th scope="col">ttl</th>
					<th scope="col">jenis kelamin</th>
					<th scope="col">agama</th>
					<th scope="col">alamat</th>
					<th scope="col">No Hp</th>
					<th scope="col">#</th>
					</tr>
				</thead>
				<tbody>

				<?php 
				$no = 1;
				foreach($duta as $duta1){ 
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $duta1->nik ?></td>
					<td><?php echo $duta1->nama ?></td>
					<td><?php echo $duta1->ttl ?></td>
					<td><?php echo $duta1->jenis_kelamin ?></td>
					<td><?php echo $duta1->agama ?></td>
					<td><?php echo $duta1->alamat ?></td>
					<td><?php echo $duta1->no_telp ?></td>
					
					<td>
					<a href="<?php echo base_url('page/editdataduta/'); ?><?php echo $duta1->id ?>" class="btn btn-info" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
					<!-- <a href="<?php echo base_url('page/hapusmakanan/'); ?><?php echo $duta1->id ?>" class="btn btn-danger" type="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</a> -->
					
				</tr>

				<?php } ?>

				</tbody>
				</table>
