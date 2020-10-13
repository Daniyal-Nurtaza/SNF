<?php 
	$nav = $_SERVER['REQUEST_URI']; // Считываем дополнительные записи в URL
	$nav = preg_split("[\/]", $nav); // Разбиваем URL на вкладки
	unset($nav[0]); // Первый элемент будет пустой поэтому удаляем
	$lang = $nav[1]; // 1 элемент массива всегда будет язык интерфейса
	switch ($lang) {
		case 'ru':
			echo 'Russian';
			break;
		
		case 'en':
			echo 'English';
			break;
		
		case 'kz':
			echo 'Kazakh';
			break;

		default:
			# code...
			break;
	}
 ?>