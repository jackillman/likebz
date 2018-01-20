<?php
/**
 * Created by PhpStorm.
 * User: AlexN
 * Date: 02.08.2016
 * Time: 10:36
 */
session_start(); 


$name        = $_SESSION['name'];
$phone    = $_SESSION['phone'];
$email      = $_SESSION['email'];
$site      = $_SESSION['site'];




header ('Content-type: text/html; charset=utf-8');

$mysqli = new mysqli("","","","");

/* проверка соединения */
if ($mysqli->connect_errno){
	printf ("Не удалось подключиться: %s\n",$mysqli->connect_error);
	exit();
}

mysqli_query($mysqli, 'SET NAMES UTF8');

/* изменение набора символов на utf8 */
if (!mysqli_set_charset($mysqli, "utf8")) {
	printf("Ошибка при загрузке набора символов utf8: %s\n", mysqli_error($mysqli));
} else {
//	printf("Текущий набор символов: %s\n", mysqli_character_set_name($mysqli));
}

$mysqli->query ("INSERT INTO `conver10_likebz`.`likebz` (`id`, `date`, `name`, 
`phone`, `email`, `site`)
									VALUES (NULL, CURRENT_TIMESTAMP, '$name', '$phone',
									'$email', '$site');");
$mysqli->close ();