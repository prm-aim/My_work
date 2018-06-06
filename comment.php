<?php
header( 'Content-Type: text/html; charset=utf8' );
//Проверка на передачу значения методом GET
if (isset($_GET['id'])){$id_trade = $_GET['id'];}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Отзыв книги</title>
		<meta name='description' content='Отзыв о книге'>
		<meta name='keywords' content='Озтыв'>
        <meta name='author' content='Ankudinov I.M.'>
		<link href="style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
		<header>
			<?php include ("header.php");?>
		</header>
		<main role="main">
			<?php include ("comment_main.php");?>
		</main>
		<footer>
			<?php include ("footer.php");?>
		</footer>
    </body>
</html>