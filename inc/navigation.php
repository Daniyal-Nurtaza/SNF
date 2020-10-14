<?php
	$nav = $_SERVER['REQUEST_URI']; // Считываем дополнительные записи в URL
	$navStr = $nav;
	$nav = preg_split("[\/]", $nav); // Разбиваем URL на вкладки
	unset($nav[0]); // Первый элемент будет пустой поэтому удаляем
	$lang = $nav[1]; // 1 элемент массива всегда будет язык интерфейса
	$autoLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	switch ($lang) {
		case 'ru':
			echo 'Russian <br>';

			if (file_exists("pages".$navStr.".php")) {
				echo $lang;
			}
			break;
		
		case 'en':
			echo 'English <br>';
			if (file_exists("pages".$navStr.".php")) {
				echo $lang;
			}
			break;
		
		case 'kz':
			echo 'Kazakh <br>';
			if (file_exists("pages".$navStr.".php")) {
				echo $lang;
			}
			break;

		default: 
			header('location: '.$autoLang);
			break;
	}
?>