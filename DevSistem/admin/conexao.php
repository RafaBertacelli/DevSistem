<?php
	$servidor="localhost";
	$banco="dbdevsistem";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);	
	
?>
