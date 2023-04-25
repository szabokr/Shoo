<?php
include('./config/config.inc.php');
//echo "\$_SERVER['REQUEST_URI'] = " . $_SERVER['REQUEST_URI'];
$url = $_SERVER['REQUEST_URI'];
$stringArray = explode("/", $url);
$page = $stringArray[count($stringArray)-1];
// echo "<br><br><br><br>";

if ($page!="") {
	if (isset($pages[$page]) && file_exists("./app/views/templates/{$pages[$page]['file']}.tpl.php")) {
		
		$find = $pages[$page];
        // var_export($find);
		// die();
        // die();
	}
	else { 
		$find = $error_page;
		// header("HTTP/1.0 404 Not Found");
	}
}
else $find = $pages['/'];

include('./app/views/index.tpl.php'); 
// include("./app/views/templates/{$find['file']}.tpl.php"); 
?>

