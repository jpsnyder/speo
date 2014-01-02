<?php

class SPEO_Template{
	public $title = 'SPEO';
	public $head = '<!DOCTYPE html>
		<html>
		  <head>
			<title>SPEO Form</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!-- Bootstrap -->
			<link href="libraries/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
			<link rel="stylesheet" href="libraries/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />


			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
			<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
			<![endif]-->
		</head>';
	public $body_prefix = '<body>';

	public $body_suffix ='
			<!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
			<script src="https://code.jquery.com/jquery.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="libraries/bootstrap/dist/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="libraries/moment/moment.js"></script>
			<script type="text/javascript" src="libraries/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
			
			<script type="text/javascript">
				$(function () {
					$(\'#date_time_event\').datetimepicker();
					$(\'#delivery_time_frame_earliest\').datetimepicker({
						pickDate: false
					});
					$(\'#delivery_time_frame_latest\').datetimepicker({
						pickDate: false
					});

				});
				
			</script>
		</body>
	</html>';

	public $content;
	public function setContent($content){
		$this->content = $content;
	}
	
	
	public function setScripts($script){
		$this->script = $script;
	}
	
	public function render(){
		print $this->head;
		print $this->body_prefix;
		print $this->content;
		print $this->body_suffix;
	}
}
