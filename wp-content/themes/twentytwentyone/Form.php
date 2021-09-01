<?php
/**
 * Template name: Form Template
 */

get_header();?>
	
<div class="container" style="width:20%; margin-left:500px; margin-top:-10px";>
<form method="post">
<div class="form-group">
<label>Name : </label>
<input type="text" class="form-control" id="email" name="name">
</div>
<div class="form-group">
<label>Email : </label>
<input type="text" class="form-control" id="email" name="email">
</div>
<div class="form-group">
<label>Mobile : </label>
<input type="text" class="form-control" id="email" name="mobile">
</div>
<button type="submit" name="BtnSubmit" class="Btn Btn-default">Submit</Button>
</form>
</div>

	
<?php

get_footer(); ?>
