<?php include('./templates/head.php') ?>
<?php
$_SESSION['username'] = "Admin";
?>

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
				<li><a class="active" href="gallery.tpl.php">Galéria</a></li>
				<li><a href="contact.tpl.php">Kapcsolat</a></li>
				<input type="text" placeholder="Keresés">
			</ul>
				<a href="http://ropkese.hu/#" target="_blank">Forrás</a>
			</nav>
		<section id="content">
			<div class="container">
    			<h3>Képfeltöltés</h3>
				<?php
				include_once 'dbh.php';

				$sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					echo "SQL statement failed!";
				} else {
					mysqli_stmt_execute($stmt);
					$result = mysqli_stmt_get_result($stmt);

					while ($row = mysqli_fetch_assoc($result)){
					echo '<a href="#">
					<div style="background-image: url(images/'.$row["imgFullNameGallery"].')"></div>
					<h3>'.$row["titleGallery"].'</h3>
					<p>'.$row["descGallery"].'</p>
					</a>';
					}
				}
				?>
				<?php
				if(isset($_SESSION['username'])){
					echo '
					<form action="upload.php" method="post" enctype="multipart/form-data">
					<input type="text" name="filename" placeholder="Fájl neve">
					<input type="text" name="filetitle" placeholder="Kép címe">
					<input type="text" name="filedesc" placeholder="Kép leírása">
					<input type="file" name="file">
					<button type="submit" name="submit">Kép feltöltése</button>
					</form> ';
				}
				?>
			</div>
		</section>
	</div>
	<?php include('./templates/footer.php') ?>
</html>	