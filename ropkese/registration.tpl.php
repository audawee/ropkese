<?php include('./templates/head.php') ?>


	<div id="reg">
		<a class="active" href="login.tpl.php">Belépés</a>
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
				<li><a href="contact.tpl.php">Kapcsolat</a></li>
				<input type="text" placeholder="Keresés">
			</ul>
			<a href="http://ropkese.hu/#" target="_blank">Forrás</a>
		</nav>
	</div>
	<section id="content">
	<form action="regisztral.php">
	<div class="container">
		<h2>Regisztráció</h2><br>
		<label for="lastname"><b>Vezetéknév</b></label>
		<input type="text" placeholder="Adja meg a vezeték nevét" name="lastname" required>

		<label for="firstname"><b>Keresztnév</b></label>
		<input type="text" placeholder="Adja meg a kereszt nevét" name="firstname" required>

		<label for="username"><b>Felhasználónév</b></label>
		<input type="text" placeholder="Adja meg a felhasználónevét" name="username" required>

		<label for="email"><b>E-mail cím</b></label>
		<input type="text" placeholder="Adja meg az e-mail címét" name="email" required>

		<label for="password"><b>Jelszó</b></label>
		<input type="password" placeholder="Adja meg a jelszavát" name="password" required>

		<button type="submit" class="registerbtn">Regisztráció</button>
		<p>Van már felhasználója?<a href="login.php">Jelentkezzen be</a>.</p>
		</div>
		</form>
		
		
		<!--<label>Név: <input name="nev" type="text"></label><br><br>
			<label>E-mail: <input name="email" type="text"></label><br><br>
			<label>Születési év: <select name="szulev">
			<?php for($ev=1900;$ev<2010;$ev++){?>
				<option value="<?php echo $ev?>"><?php echo $ev?></option>
			<?php }?>
			</select></label>
			<label>Születési hónap: <select name="szulho">
			<?php for ($ho=1; $ho<=12;$ho++){?>
			<option value="<?php echo $ho?>"><?php echo $ho?></option>
			<?php } ?>
			</select></label>
			<label>Születési nap: <select name="szulnap">
			<?php for ($nap=1;$nap<=31;$nap++) {?>
				<option value="<?php echo $nap?>"><?php echo $nap?></option>
			<?php }?>
			</select></label>
			<br><br>
			<fieldset>
				<legend>Testsúly: </legend>
				<?php for ($suly=0; $suly<140;$suly+=10){?>
				<label><input name="suly" value="<?php echo $suly?>" type="radio">
				<?php echo $suly . ' - ' . ($suly+10); ?><br></label>
				<?php }?>
			</fieldset>
			<br>
			<input value="Űrlap Feladása" type="submit">
		</form>-->
	</div>
	</section>
	<?php include('./templates/footer.php') ?>
</html>
