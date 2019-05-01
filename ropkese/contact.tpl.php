<?php include('./templates/head.php') ?>

	<div id="reg">
		<a href="registration.tpl.php">Regisztráció</a> vagy <a href="login.tpl.php">Belépés</a>
	</div>
	
	<header>
		<a href="index.php" class="logo float-left">
		<img src="images/hlogo.png" alt="logo"></a>
		<h1>Röpke SE Röplabda Klub</h1>
	</header>
	<div id="wrapper">
			<nav>
			<ul>
				<li><a href="index.php">Főoldal</a></li>
				<li><a href="sponsors.tpl.php">Támogatóink</a></li>
				<li><a href="gallery.tpl.php">Galéria</a></li>
				<li><a class="active" href="contact.tpl.php">Kapcsolat</a></li>
				<input type="text" placeholder="Keresés">
			</ul>
				<a href="http://ropkese.hu/#" target="_blank">Forrás</a>
			</nav>
	</div>
	<section id="content">
		<div class="container">
			<h3>Röpke SE Kecskemét</h3>
			<p>Sportcsapat</p><br>
			<h3>Kása Róbert - Elnök</h3>
			<p>+36/30 123-4567</p><br>
			<h3>Mérkőzések helye:</h3>
			<p>6000 Kecskemét</p>
			<p>Tóth László sétány 2 (II. Rákóczi Ferenc Általános Iskola Tornacsarnoka)</p><br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10904.122010567828!2d19.6880564!3d46.9021185!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef9f53afb48592c8!2zSUkuIFLDoWvDs2N6aSBGZXJlbmMgw4FsdGFsw6Fub3MgSXNrb2xh!5e0!3m2!1shu!2shu!4v1556566148834!5m2!1shu!2shu" 
				width="960" height="540" frameborder="0" style="border:0" allowfullscreen></iframe>
			<hr>
			<p>Kérdése van? Küldjön e-mailt nekünk!</p><br>
			<form action="mailto:modoku18@gmail.com" method="post" enctype="text/plain">
			Név:<br>
			<input type="text" placeholder="Név" name="Név: "><br>
			E-mail:<br>
			<input type="text" placeholder="E-mail cím" name="E-mail cím: "><br>
			Szöveg:<br>
			<textarea id="txtbox" type="text" name="Szöveg: " size="1000"></textarea><br>
			<button type="submit" value="Send">Küldés
			</form>
		</div>
	</section>
	<?php include('./templates/footer.php') ?>
</html>
