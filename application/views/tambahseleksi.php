				<h3>Penilaian calon duta genre</h3>
<div class="col-md-5">
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