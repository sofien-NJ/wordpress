<?php
/**
 * Template Name: Form-Template
 */

get_header();?>
	
	<div class="container" style="width:20%; margin-left: 500px; margin-top: -10px;">
	<form method="post">
	<div class="form-group">
	<label for="email">First name:</label>
	<input type="text" class="form-control" id="email" name="first_name">
	</div>
	
	<div class="form-group">
	<label for="email">Last name:</label>
	<input type="text" class="form-control" id="email" name="last_name">
	</div>
	
	<div class="form-group">
	<label for="email">email:</label>
	<input type="text" class="form-control" id="email" name="email">
	</div>
	
	<div class="form-group">
	<label for="email">mobile n:</label>
	<input type="text" class="form-control" id="email" name="mobile">
	</div>
	
	<div class="form-group">
	<label for="email">Comment:</label>
	<textarea type="text" class="form-control" id="email" name="comment"></textarea>
	</div>
	
	<Button type="submit" name="BtnSubmit" class="btn btn-defautl">Submit</Button>
	 
	</form>
	</div>
	

	<?php get_footer();


