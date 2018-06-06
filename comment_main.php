<?php
if ($id_trade == 1)
	echo "<article>
		<h2>Отзыв для книги: Хочу и буду. Принять себя, полюбить жизнь и стать счастливым</h2>
		<div id='mainLeft'>
			<img src='images/bookID_1.jpg' alt='Хочу и буду. Принять себя, полюбить жизнь и стать счастливым' />
		</div>
		<div id='mainRight'>
			<form method='post' autocomplete='off' action='http://localhost/github/rezult.php'>
				<fieldset>
					<legend>Ваш отзыв:</legend>
					<p><label>Ваша Фамилия Имя Отчество: </label></p>
						<input type='text' placeholder='Не более 90 лисмолов' size='90' maxlength='90' required
							pattern='[а-яА-Я]{1,90}' name='name'/>
					<p><label>Ваш отзыв о книге: </label></p>
						<textarea name='comment' maxlength='1000' cols='90' rows='8' autofocus required placeholder='Не более 1000 символов'></textarea>
					<p><label>Ваш номер телефона: </label></p>
						<input type='text' placeholder='+7-900-00-00-000' size='15' required 
							pattern='\+\d-\d{3}-\d{2}-\d{2}-\d{3}' name='phone'/>
					<p><label>Ваша оценка книге (0 - ужасно, 10 - великолепно):</label></p>
					<input type='number' step='1' min='0' max='10' value='0' required name='mark'/>
					<input type='hidden' name='id' value='1'>
					<p><input type='submit' value='Оставить свой отзыв' /></p>
				</fieldset>
			</form>
		</div>
	</<article>";
if ($id_trade == 2)
	echo "<article>
		<h2>Отзыв для книги: Трансформатор</h2>
		<div id='mainLeft'>
			<img src='images/bookID_2.jpg' alt='Трансформатор' />
		</div>
		<div id='mainRight'>
			<form method='post' autocomplete='off' action='http://localhost/github/rezult.php'>
				<fieldset>
					<legend>Ваш отзыв:</legend>
					<p><label>Ваша Фамилия Имя Отчество: </label></p>
						<input type='text' placeholder='Не более 90 лисмолов' size='90' maxlength='90' required
							pattern='[а-яА-Я]{1,90}' name='name'/>
					<p><label>Ваш отзыв о книге: </label></p>
						<textarea name='text' maxlength='1000' cols='90' rows='8' autofocus required placeholder='Не более 1000 символов'></textarea>
					<p><label>Ваш номер телефона: </label></p>
						<input type='text' placeholder='+7-900-00-00-000' size='15' required 
							pattern='\+\d-\d{3}-\d{2}-\d{2}-\d{3}' name='phone'/>
					<p><label>Ваша оценка книге (0 - ужасно, 10 - великолепно):</label></p>
					<input type='number' step='1' min='0' max='10' value='0' required name='mark'/>
					<input type='hidden' name='id' value='2'>
					<p><input type='submit' value='Оставить свой отзыв' /></p>
				</fieldset>
			</form>
		</div>
	</<article>";
?>
