<?php

//header( 'Content-Type: text/html; charset=utf-8' );

echo '<head><style type="text/css">';
	echo 'body{background: #f8feff;}';
echo '</style></head>';

$mysqli = new mysqli("","","","");

/* проверка соединения */
if ($mysqli->connect_errno){
	printf ("Не удалось подключиться: %s\n",$mysqli->connect_error);
	exit();
}

/* изменение набора символов на utf8 */
if (!mysqli_set_charset ($mysqli,"utf8")){
	printf ("Ошибка при загрузке набора символов utf8: %s\n",mysqli_error ($mysqli));
} else{
//	printf ("Текущий набор символов: %s\n",mysqli_character_set_name ($mysqli));
}

echo "<h1>Статистика последних 100 записей в базу</h1>";

/* Select запросы возвращают результирующий набор */
if ($result = $mysqli->query ("SELECT * 
		FROM  `likebz` 
		ORDER BY  `likebz`.`date` DESC 
		LIMIT 0 , 100")
){
	printf ("Select вернул %d строк.\n",$result->num_rows);

	echo "<br>";

	echo "<table border='1'>";
		echo "<tr>";
		echo "<td>";
            echo "id";
		echo "</td>"; 
		echo "<td>";
            echo "date";
		echo "</td>"; 
 		echo "<td>";
            echo "name";
		echo "</td>";
		echo "<td>";
            echo "phone";
		echo "</td>"; 
		echo "<td>";
            echo "email";
		echo "</td>"; 
		echo "<td>";
            echo "site";
		echo "</td>"; 
		
   		echo "</tr>"; 
    
	foreach ($result as $res => $key){
		//		var_dump($key);
        
        
        
		echo "<tr>";

		echo "<td>";

		echo $key['id'];
		echo "</td>";

		echo "<td>";
		echo $key['date'];
		echo "</td>";

		echo "<td>";
		echo $key['name'];
		echo "</td>";

		echo "<td>";
		echo $key['phone'];
		echo "</td>";

		echo "<td>";
		echo $key['email'];
		echo "</td>";

		echo "<td>";
		echo $key['site'];
		echo "</td>";
        
     
        
		echo "</tr>";
	}
	echo "</table>";

	/* очищаем результирующий набор */
	$result->close ();
}
$mysqli->close ();
