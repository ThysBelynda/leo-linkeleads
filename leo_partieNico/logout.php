<?php
	session_start();

	$_SESSION = array();
	session_destroy();

	setcookie('loginauto', '');
	setcookie('emailUser', '');
	setcookie('passwordUser', '');

	header('Location: index');
?>
