<?php
	date_default_timezone_set('Europe/Copenhagen');
	include 'includes/dbh.inc.php';
	include 'includes/annons.inc.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>smartBuy - Hem</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
</head>
<body>
	<div class="main-wrapper">
	<header>
		<div id="headerContent">
			<?php
				if (isset($_SESSION['u_id'])) {
					echo '
						<form action="includes/logout.inc.php" method="POST">
						<button id="logOut" type="submit" name="logOutSubmit">Logga ut</button>
						</form>
						<a style="top:200px" href="dinaAnnonser.php">Se dina annonser här!</a>
					';
				} else {
					echo nl2br('
						<form action="includes/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="Användarnamn">
						<input type="password" name="pwd" placeholder="Lösenord">
						<button type="submit" name="logInSubmit">Logga in</button>
						</form>
						<a id="creatAccount" href="createAccount.php">Har du inget konto? <br> Skapa ett här!</a>
					');
				}
			?>
			<a id="logga" href="index.php"><h1><span id="logoFirst">smart</span><span id="logoSecond">Buy</span></h1></a>
			<span id="rightButtons">
				<a id="addAdHeaderButton" href="addAd.php">Lägg upp en annons här!</a>
				<a href="#">Se bara annonser nära dig!</a>
			</span>
		</div>
	</header>
	<div class="wrapper">