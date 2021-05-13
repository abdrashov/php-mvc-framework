<?php

function dd(...$txt){
	foreach($txt as $text){
		echo '<pre>';
			var_dump($text);
		echo '</pre>';
	}
	exit;
}

function dump(...$txt){
	foreach($txt as $text){
		echo '<pre>';
			var_dump($text);
		echo '</pre>';
	}
}

function abort(int $code){
	http_response_code(404);
	require 'resources/views/errors/404.php';
	exit;
}

function redirect(string $url){
	header('location: ' . $url);
	exit;
}

function url(string $url = ''){
	return trim($_SERVER['SCRIPT_URI'], '/') . '/' . trim($url, '/');
}

function view($file, $vars = []){
	extract($vars);
	require 'resources/views/'.$file.'.php';
}