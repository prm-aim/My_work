<?php
header( 'Content-Type: text/html; charset=utf8' );
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Документ HTML5</title>
		<meta name='description' content='Первый документ HTML5'>
		<meta name='keywords' content='Документ HTML5'>
        <meta name='author' content='Ankudinov I.M.'>
		<link href="style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
		<header>
			<?php include ("header.php");?>
		</header>
		<main role="main">
			<?php include ("main.php");?>
		</main>
		<footer>
			<?php include ("footer.php");?>
		</footer>
    </body>
</html>