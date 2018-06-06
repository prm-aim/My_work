<?php
//Подгружаем файлы конфигурации
include 'config.php';
//Проверка файлов конфигурации
	$db = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
	if (mysqli_connect_errno()) {
   		printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
   		exit;
	}
	$db->set_charset("utf8");
?>
