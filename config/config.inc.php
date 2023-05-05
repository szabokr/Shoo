<?php
$pages = array(
	'/' => array('file' => 'landingPage', 'text' => 'Home', 'visible'=>0),
	'?seller' => array('file' => 'seller', 'text' => 'Seller', 'visible'=>0),
	'?contact' => array('file' => 'contact', 'text' => 'Contact Us', 'visible'=>0),
	'?partners' => array('file' => 'partners', 'text' => 'Partners', 'visible'=>0),
	'?cartSystem' => array('file' => 'cartSystem', 'text' => 'Cart', 'visible'=>2),
	'?login' => array('file' => 'login', 'text' => 'Login', 'visible'=>2),
	'?logout' => array('file' => 'logout', 'text' => 'Logout', 'visible'=>2),
	'?register' => array('file' => 'register', 'text' => 'Sign Up', 'visible'=>2),
	'?profilePage' => array('file' => 'profilePage', 'text' => 'Profile', 'visible'=>2),
	'?messages' => array('file' => 'messages', 'text' => 'Messages', 'visible'=>1),
	'?orders' => array('file' => 'orders', 'text' => 'Orders', 'visible'=>1),
	'?shoes' => array('file' => 'shoes', 'text' => 'Shoes', 'visible'=>1),
	'?brands' => array('file' => 'brands', 'text' => 'Brands', 'visible'=>1),
);

$social=array(
	array('name'=>'bi-facebook', 'url'=>'facebook.com'),
	array('name'=>'bi-twitter', 'url'=>'twitter.com'),
	array('name'=>'bi-instagram', 'url'=>'instagram.com'),
	array('name'=>'bi-google', 'url'=>'google.com')
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');

$carousels=array(
	array(
		'image'=>'shoewall',
		'alt'=>'exampleimage',
		'title'=>'join our team!',
		'subtitle'=>'be part of a growing communiy!',
		'action'=>'register'

	),

	array(
		'image'=>'carousel1',
		'alt'=>'exampleimage',
		'title'=>'join our team!',
		'subtitle'=>'be part of a growing communiy!',
		'action'=>'register'

	),

	array(
		'image'=>'carousel2',
		'alt'=>'exampleimage',
		'title'=>'join our team!',
		'subtitle'=>'be part of a growing communiy!',
		'action'=>'register'

	),
);
