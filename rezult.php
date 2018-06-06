<?php
header( 'Content-Type: text/html; charset=utf8' );
if ((isset($_POST['name']))&&($_POST['name'] != '')){
	$name=$_POST['name'];
}
if ((isset($_POST['phone']))&&($_POST['phone'] != '')){
	$phone=$_POST['phone'];
}
if ((isset($_POST['comment']))&&($_POST['comment'] != '')){
	$comment=$_POST['comment'];
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
			if ((isset($name))&&(isset($phone))&&(isset($comment))&&(isset($mark))&&(isset($id)))
				echo "<p>Данные получены успешно.</p>";
			else
				echo "<p>Ошибка. Данные НЕ получены.</p>";
			?>
		</main>
		<footer>
			<?php include ("footer.php");?>
		</footer>
    </body>
</html>