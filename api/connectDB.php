<?php
	$dsn = "mysql:host=localhost;port=8889;dbname=dd106g2;charset=utf8";
	$user = "root";
	$password = "tibame";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO( $dsn, $user, $password, $options);  
?>