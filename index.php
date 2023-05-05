<?php
session_start();
include('./config/config.inc.php');
$url = $_SERVER['REQUEST_URI'];
$stringArray = explode("/", $url);
$page = $stringArray[count($stringArray)-1];

if ($page!="") {
	if (isset($pages[$page]) && file_exists("./app/views/templates/{$pages[$page]['file']}.tpl.php")) {
		
		$find = $pages[$page];
	}
	else { 
		$find = $error_page;
	}
}
else $find = $pages['/'];

include('./app/views/index.tpl.php');
