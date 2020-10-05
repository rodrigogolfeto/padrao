<?php

if($_SERVER['HTTP_HOST'] == 'padrao.localhost'){
	$s = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
	$gets = array_filter(explode('/', $s));
	$gets = explode('/',implode('/',$gets));
}
else{
	$s = (!empty($_GET['s'])) ? $_GET['s'] : '';
	$gets = explode('/', $s);	
}

$arquivo = $gets[0];

if(file_exists('cont_'.$arquivo.'.php')) include 'cont_'.$arquivo.'.php';
else if ($gets[0]=='') include 'cont_home.php';
else include 'cont_home.php';

?>