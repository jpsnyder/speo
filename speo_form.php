<?php
require_once('load_libraries.php');

$customer_form = '
	<form class="form-horizontal" action="speo_form.php" method="post" enctype="multipart/form-data">
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
		<button id="submit" name="submit" class="btn btn-primary">Submit</button>
	  </div>
	</div>

	</fieldset>
	</form>
';

if(isset($_POST['submit'])){
	$db = db_connect();
	unset($_POST['submit']);
	$db->insert('customer_input',$_POST);
	$template->setContent($_POST['group_name']);
} else {
$template->setContent($customer_form);
}

$template->render();
?>