<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 'on');
error_reporting(E_ALL);

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