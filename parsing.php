<?php
header( 'Content-Type: text/html; charset=utf8' );
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Парсинг</title>
		<meta name='description' content='Учебное задание'>
		<meta name='keywords' content='Парсинг'>
        <meta name='author' content='Ankudinov I.M.'>
		<link href="style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
		<header>
			<?php include ("header.php");?>
		</header>
		<main role="main">
			<?php
			$sait = "http://rubook.org/top.php";
			echo "<p>Список книг с сайта ".$sait."</p><br>";
			//**Функция для парсинга сайта
			include("blocks/simple_html_dom.php");
			
			function html_no_comment($url) {
				// create HTML DOM
				$html = file_get_html($url);
				foreach($html->find('img') as $e)
					echo '<p>'.$e->outertext.'</p>';
					return 0;
			}
			
			// Вывод названий всех изображений на сайте
			
			$html = html_no_comment($sait);
				
			?>
		</main>
		<footer>
			<?php include ("footer.php");?>
		</footer>
    </body>
</html>