

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
				
