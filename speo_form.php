<?php
require_once('load_libraries.php');

$customer_form = '
	<form class="form-horizontal" action="add_customer_input.php" method="post" enctype="multipart/form-data">
	<fieldset>

	<!-- Form Name -->
	<legend>New SPEO Form</legend>
	
	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="group_name">Group Name</label>
	  <div class="controls">
		<input id="group_name" name="group_name" placeholder="" class="input-xlarge" type="text">
		
	  </div>
	</div>	

	<!-- Button -->
	<div class="control-group">
	  <label class="control-label" for="submit_button"></label>
	  <div class="controls">
		<button id="submit_button" name="submit_button" class="btn btn-primary">Submit</button>
	  </div>
	</div>

	</fieldset>
	</form>
';

$template->setContent($customer_form);
$template->render();
?>