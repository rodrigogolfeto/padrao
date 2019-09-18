<?php
$s = isset($_GET['s'])?$_GET['s']:'';
$gets = explode('/', $s);
$arquivo = $gets[0];

if(file_exists('cont_'.$arquivo.'.php')) {
	include 'cont_'.$arquivo.'.php';
} else if ($gets[0]=='') {
	include 'cont_home.php';
} else {
	include 'cont_home.php';
}
?>