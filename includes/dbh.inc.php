<?php

$conn = mysqli_connect('ftp.sandladan.se', '168107_kjelland', '', 'annonswebb');

if (!$conn) {
	die("Connection failed: ".msqli_connect_error());
}