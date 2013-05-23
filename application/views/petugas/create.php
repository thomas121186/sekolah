<h2>Create new petugas</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('petugas/create') ?>

	<label for="text">Nama</label> 
	<input type="text" name="nama" /><br />

	<label for="text">Jenis Kelamin</label>
	<input type="text" name="jenis_kelamin" /><br />
	
	<label for="text">Agama</label>
	<input type="text" name="agama"/><br />
	
	<label for="text">No telpon</label>
	<input type="text" name="no_telpon"/><br /> 
	
	<label for="text">Alamat</label>
	<input type="text" name="alamat"/><br/>
	
	<input type="submit" name="submit" value="Create new petugas" /> 

</form>