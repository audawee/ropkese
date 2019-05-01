<?php include('./templates/head.php') ?>
     
    <div id="reg">
	    <a href="registration.tpl.php">Regisztráció</a>
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
    <form action="login.php">
        <div class="container">   
            <h2>Belépés</h2>
            <input type="text" placeholder="Felhasználónév/e-mail" name="username" required>
            
            <input type="password" placeholder="Jelszó" name="password" required>
            
            <button type="submit" name="login">Belépés</button>
            <label>
            <input type="checkbox" checked="checked" name="remember">Emlékezz rám
            </label>
            <span class="password"><a href="#">Elfelejtett jelszó?</a></span>
        </div>
    </form>
    </section>
    
    <?php include('./templates/footer.php') ?>

 </html>