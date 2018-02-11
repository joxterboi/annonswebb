<?php

$conn = mysqli_connect('mjet.de.mysql', 'mjet_de', 'kn0hult', 'mjet_de');

if (!$conn) {
	die("Connection failed: ".msqli_connect_error());
}