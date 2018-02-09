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
		<?php
			if (isset($_SESSION['u_id'])) {
				echo '<form action="includes/logout.inc.php" method="POST">
				<button type="submit" name="logOutSubmit">Logga ut</button>
				</form>
				<a href="dinaAnnonser.php">Se dina annonser!</a>
				';
			} else {
				echo '<a id="creatAccount" href="createAccount.php">Skapa ett konto!</a>
				<form action="includes/login.inc.php" method="POST">
				<button type="submit" name="logInSubmit">Logga in</button>
				<input type="text" name="uid" placeholder="Användarnamn">
				<input type="password" name="pwd" placeholder="Lösenord">
				</form>';
			}
		?>
		<a href="index.php"><h1><span class="logoFirst">smart</span><span class="logoSecond">Buy</span></h1></a>

		<span>
			<a id="addAdHeaderButton" href="addAd.php">Lägg upp en annons här!</a>
			<a href="#">Se bara annonser nära dig!</a>
		</span>
	</header>
	<div class="wrapper">