<?php
require_once ('load_libraries.php');
$welcome_message = "<h1>This is a title</h1>";

$template->setContent($welcome_message);
//$template->setTab(1);
$template->render();
?>