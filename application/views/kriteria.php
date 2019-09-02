			
				<h3>Halaman Kriteria</h3>	
				
				<table  class="table table-striped table-bordered">
				<thead>
					<tr>
					<th scope="col">No</th>
					<th scope="col">Nama kriteria</th>
					<th scope="col">bobot kriteria</th>
					<th scope="col">#</th>
					</tr>
				</thead>
				<tbody>

				<?php 
				$no = 1;
				foreach($kriteria as $kriteria){ 
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $kriteria->nama_kriteria ?></td>
					<td><?php echo $kriteria->bobot_kriteria ?></td>
					
					<td>
					<a href="<?php echo base_url('page/editkriteria/'); ?><?php echo $kriteria->id ?>" class="btn btn-info" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
					
				</tr>

				<?php } ?>

				</tbody>
				</table>
