<?php
	$nav = $_SERVER['REQUEST_URI']; // Считываем дополнительные записи в URL
	$navStr = $nav;
	$nav = preg_split("[\/]", $nav); // Разбиваем URL на вкладки
	unset($nav[0]); // Первый элемент будет пустой поэтому удаляем
	$lang = $nav[1]; // 1 элемент массива всегда будет язык интерфейса
	$autoLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	$langs = ['ru', 'kz', 'en'];
	if (in_array($lang, $langs)) {
		if (count($nav) <= 1) header('location: '.$autoLang.'/main');
		if (file_exists('pages'.$navStr.'.php')) include 'pages'.$navStr.'.php';
	} else {
		header('location: '.$autoLang.'/main');
	}
?>