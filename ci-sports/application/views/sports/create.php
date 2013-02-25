<h2>Add Your Favorite Team</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('sports/create') ?>

	<label for="title">Team</label> 
	<input type="input" name="title" /><br />

	<label for="text">Description</label>
	<textarea name="text"></textarea><br />
	
	<input type="submit" name="submit" value="Add A Team" /> 

</form>