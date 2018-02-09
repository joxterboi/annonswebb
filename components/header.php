<?php
	date_default_timezone_set('Europe/Copenhagen');
	include 'includes/dbh.inc.php';
	include 'includes/annons.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>smartBuy - Hem</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
</head>
<body>
	<div class="main-wrapper">
	<header>
		<a id="creatAccount" href="createAcount.php">Skapa ett konto!</a>
		<form>
			<button type="submit" name="logInSubmit">Logga in</button>
			<input type="text" name="uid" placeholder="Användarnamn">
			<input type="password" name="pwd" placeholder="Lösenord">
		</form>
		<a href="index.php"><h1><span class="logoFirst">smart</span><span class="logoSecond">Buy</span></h1></a>

		<a id="addAdHeaderButton" href="addAd.php">Lägg upp en annons här!</a>
		<a href="#">Se bara annonser nära dig!</a>
	</header>
	<div class="wrapper">