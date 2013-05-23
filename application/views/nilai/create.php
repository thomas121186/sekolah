<h2>Create new nilai</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('nilai/create') ?>

	<label for="text">Nilai</label> 
	<input type="text" name="nilai" /><br />
	
	<label for="Semester">Semester</label> 
	<input type="text" name="semester" /><br />

	
	<input type="submit" name="submit" value="Create new nilai" /> 

</form>