<?php

$conn = mysqli_connect('localhost', 'root', '', 'annonswebb');

if (!$conn) {
	die("Connection failed: ".msqli_connect_error());
}