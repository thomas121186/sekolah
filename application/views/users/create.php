<h2>Create new user</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('users/create') ?>

	<label for="text">Username</label> 
	<input type="username" name="username" /><br />

	<label for="text">Password</label>
	<input type="password" name="password" /><br />
	
	<label for="text">Email</label>
	<input type="text" name="email"/><br />
	
	<label for="text">Hak Akses</label>
	<input type="text" name="hak_akses"/><br />
	
	<input type="submit" name="submit" value="Create new user" /> 

</form>