<h2>Create new mapel</h2>
<h2>Create new mapel</h2>
<?php echo validation_errors(); ?>

<?php echo form_open('mapel/create') ?>

	<label for="text">Nama Mapel</label> 
	<input type="text" name="nama_mapel" /><br />

	
	<input type="submit" name="submit" value="Create new mapel" /> 

</form>