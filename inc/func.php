<?php
	/*
	  *Функция для ошибок на сайте (по умолчанию ошбика 404)
	*/ 
	function error($err=404, $message)
	{
		switch ($err) {
			case 404:
				$_SESSION['error']['code'] = $err;
				$_SESSION['error']['message'] = $message;
				break;
		}
	}
 ?>