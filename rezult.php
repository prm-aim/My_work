<?php
header( 'Content-Type: text/html; charset=utf8' );
//Получаем данные с формы. 
if ((isset($_POST['name']))&&($_POST['name'] != '')){
	$name=stripslashes(trim($_POST['name']));
}
if ((isset($_POST['phone']))&&($_POST['phone'] != '')){
	$phone=stripslashes(trim($_POST['phone']));
}
if ((isset($_POST['comment']))&&($_POST['comment'] != '')){
	$comment=stripslashes(trim($_POST['comment']));
}
	if ((isset($_POST['mark']))&&($_POST['mark'] != '')&&(is_numeric($_POST['mark']))){
	$mark=$_POST['mark'];
}
if ((isset($_POST['id']))&&($_POST['id'] != '')&&(is_numeric($_POST['id']))){
	$id=$_POST['id'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Отзыв о книге</title>
		<meta name='description' content='Учебное задание'>
		<meta name='keywords' content='Отзыв'>
        <meta name='author' content='Ankudinov I.M.'>
		<link href="style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
		<header>
			<?php include ("header.php");?>
		</header>
		<main role="main">
			<?php
			//Подключение к серверу MySQL
			require ("blocks/bd.php");
			//Запрос к БД
			$sql = "INSERT INTO `comment` (`id_book`,`name`,`phone`,`comment`,`mark`) VALUES ('%d','%s','%s','%s','%d')";
			$query = sprintf($sql, $id, mysql_real_escape_string($name),mysql_real_escape_string($phone),
				mysql_real_escape_string($comment),$mark);
			$result = $db->query($query) or die(mysqli_error());
			if ($result == 1) {
				echo "<p>Ваш комментарий успешно добавлен.</p>";
				
			}
			else{
				echo "<p>Произошла ошибка. Ваш комментарий НЕ добавлен.</p>";
			}
			echo "<p><a href='index.php'>На главную страницу.</a></p><br>";
			//Закрываем соединение
			$db->close(); 
			?>
		</main>
		<footer>
			<?php include ("footer.php");?>
		</footer>
    </body>
</html>