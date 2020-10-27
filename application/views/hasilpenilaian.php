				<h3>Halaman hasil penilaian Peserta</h3>	
				
				<table id="table" class="table table-striped table-bordered">
				<thead>
					<tr>
					<th scope="col">No</th>
					<th scope="col">Nama peserta</th>
					<th scope="col">tes tertulis</th>
					<th scope="col">presentasi</th>
					<th scope="col">wawancara</th>
					<th scope="col">uji bakat</th>
					
					</tr>
				</thead>
				<tbody>

				<?php 
				$no = 1;
				foreach($duta as $seleksi1){ 
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $seleksi1->nama ?></td>
					<td><?php echo $seleksi1->test_tertulis ?></td>
					<td><?php echo $seleksi1->presentasi ?></td>
					<td><?php echo $seleksi1->wawancara ?></td>
					<td><?php echo $seleksi1->uji_bakat ?></td>
					
					
				</tr>

				<?php } ?>

				</tbody>
				</table>
