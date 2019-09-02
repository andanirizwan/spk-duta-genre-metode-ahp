			
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
