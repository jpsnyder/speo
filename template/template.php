<?php

class SPEO_Template{
	public $title = 'SPEO';
	public $head = '<!DOCTYPE html>
		<html>
		  <head>
			<title>Bootstrap 101 Template</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!-- Bootstrap -->
			<link href="libraries/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

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
			<script src="js/bootstrap.min.js"></script>
		</body>
	</html>';

	public $content;
	public function setContent($content){
		$this->content = $content;
	}
	
	public function render(){
		print $this->head;
		print $this->body_prefix;
		print $this->content;
		print $this->body_suffix;
	}
}