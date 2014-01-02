<?php
require_once('load_libraries.php');

$customer_form = '
<div class="container">
<form class="form-horizontal" action="speo_form.php" method="post" enctype="multipart/form">
<fieldset>

<!-- Form Name -->
<legend><center>Enter SPEO</center></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="group_name">Group Name</label>  
  <div class="col-md-3">
  <input id="group_name" name="group_name" placeholder="" class="form-control input-md" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="billing_address">Billing Address</label>  
	<div class="col-md-3">
		<input id="billing_address" name="billing_address" placeholder="Street #, Street Name" class="form-control input-md" type="text">
	</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="billing_address"></label>  
	<div class="col-md-2">
		<input id="billing_city" name="billing_city" placeholder="City" class="form-control input-md" type="text">
	</div>
	<div class="col-md-1">
		<input id="billing_state" name="billing_state" placeholder="State" class="form-control input-md" type="text">
	</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="email">Email</label>  
  <div class="col-md-3">
	<input id="email" name="email" placeholder="" class="form-control input-md" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="phone_number">Phone Number</label>  
  <div class="col-md-3">
	<input id="phone_number" name="phone_number" placeholder="" class="form-control input-md" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="cell_number">Cell Number</label>  
  <div class="col-md-3">
	<input id="cell_number" name="cell_number" placeholder="" class="form-control input-md" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="date_time_event">Date And Time of Event</label>  
  <div class="col-md-3">
	<div id="date_time_event" class="input-group date">
		<input id="date_time_event" name="date_time_event" type="text" class="form-control input-md" data-format="MM/DD/YYYY hh:mm A" />
		<span class="input-group-addon">
			<span class="glyphicon glyphicon-calendar"></span>
		</span>
	</div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="day_of_contact">Day of Contact</label>  
  <div class="col-md-3">
	<input id="day_of_contact" name="day_of_contact" placeholder="Name" class="form-control input-md" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="day_of_phone_number"></label>  
  <div class="col-md-3">
	<input id="day_of_phone_number" name="day_of_phone_number" placeholder="Phone Number" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="delivery_time_frame_earliest">Delivery Time Frame</label>  
	<div class="col-md-1">
		<input id="delivery_time_frame_earliest" name="delivery_time_frame_earliest" placeholder="Earliest" class="form-control input-md" required="" type="text">
	</div>
	<div class="col-md-1">
		<input id="delivery_time_frame_latest" name="delivery_time_frame_latest" placeholder="Latest" class="form-control input-md" required="" type="text">
	</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="event_address">Location of Event</label>  
  <div class="col-md-3">
	<input id="event_address" name="event_address" placeholder="Street #, Street Name" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="event_city"></label>  
  <div class="col-md-2">
	<input id="event_city" name="event_city" placeholder="City" class="form-control input-md" required="" type="text">
  </div>
  <div class="col-md-1">
	<input id="event_state" name="event_state" placeholder="State" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-5 control-label" for="payment">Form of Payment</label>
  <div class="col-md-3">
    <select id="payment" name="payment" class="form-control">
      <option value="credit">Credit Card (Visa/MC)</option>
      <option value="check_at_delivery">Check at Delivery</option>
      <option value="check_in_mail">Mailing Check (prior to event)</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-5 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
</div> <!-- end container -->
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