

			<div class="col-md-3">	
				<h3>Edit Data Kriteria</h3>
				<form action="<?php echo base_url(). 'page/updatekriteria'; ?>" method="post">

				<?php 
				$no = 1;
				foreach($kriteria as $kriteria1){ 
				?>

					<label for="nama">Nama kriteria :</label>
					<input class="form-control" type="text" name="nama_kriteria" placeholder="Masukan nama_kriteria" value="<?php echo $kriteria1->nama_kriteria ?>" required>
					<label for="kriteria">Bobot Kriteria : </label>
					<input class="form-control" type="text" name="bobot_kriteria" placeholder="Masukan bobot_kriteria" value="<?php echo $kriteria1->bobot_kriteria ?>" required><br>
					<input class="form-control" type="hidden" name="id" value="<?php echo $kriteria1->id ?>" required><br>
					
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Edit Data Kriteria</button> 
					<a href="<?php echo base_url('page/kriteria'); ?>" class="btn btn-info" type="button"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Kembali</a> <br>
					
				<?php 
				} 
				?>
				</form>		
