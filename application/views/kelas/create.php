<h2>Create new kelas</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('kelas/create') ?>

	<label for="text">Nama kelas</label> 
	<input type="text" name="nama_kelas" /><br />

	<label for="text">Jumlah siswa</label>
	<input type="text" name="jumlah_siswa" /><br />
	
	<input type="submit" name="submit" value="Create new kelas" /> 

</form>