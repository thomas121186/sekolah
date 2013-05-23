<h2>Create new siswa</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('siswa/create') ?>

	<label for="text">NIS</label> 
	<input type="text" name="nis" /><br />

	<label for="text">Nama</label> 
	<input type="text" name="nama" /><br />
	
	<label for="text">Tahun masuk</label> 
	<input type="text" name="tahun_masuk" /><br />
	
	<label for="text">Agama</label> 
	<input type="text" name="agama" /><br />

	<label for="text">Tgl lahir</label>
	<input type="text" name="tgl_lahir" /><br />
	
	<label for="text">Jenis kelamin</label>
	<input type="text" name="jenis_kelamin"/><br />
	
	<label for="text">No telpon</label>
	<input type="text" name="no_telpon"/><br /> 
	
	<label for="text">Alamat</label>
	<input type="text" name="alamat"/><br/>
	
	<label for="text">Id User</label>
	<input type="text" name="id_user"/><br/>
	
	<input type="submit" name="submit" value="Create new siswa" /> 

</form>