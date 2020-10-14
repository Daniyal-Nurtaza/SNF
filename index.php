<?php

	require_once 'inc/func.php'; // Подключаем файл с функциями.
	require_once 'inc/navigation.php'; // Подключаем файл с навигацией.

	if ($_SESSION['error']) {
		echo "<script>alert('Ошибка ".$_SESSION['error']['code'].": ".$_SESSION['error']['message']."');</script>" ;
		$_SESSION['error'] = array();
	}
 ?>