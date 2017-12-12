<?php
	date_default_timezone_set('Europe/Copenhagen');
	include 'dbh.inc.php';
	include 'annons.inc.php';
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
		<button>Logga in</button>
		<input type="text" placeholder="Användarnamn">
		<input type="password" placeholder="Lösenord">

		<a href="index.php"><h1><span class="logoFirst">smart</span><span class="logoSecond">Buy</span></h1></a>

		<a href="addAd.php">Lägg upp en annons här!</a>
		<a href="#">Se bara annonser nära dig!</a>
	</header>
	<div class="wrapper">