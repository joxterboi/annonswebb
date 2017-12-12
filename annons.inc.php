<?php
function setAds($conn) {
	if (isset($_POST['annonsSubmit'])) {
		$aid = $_POST['aid'];
		$date = $_POST['date'];
		$annonsText = $_POST['annonsText'];
		$pris = $_POST['pris'];
		$title = $_POST['title'];
		$kortInfo = $_POST['kortInfo'];
		$ort = $_POST['ort'];
		$model = $_POST['model'];

		if ($title == !null && $pris == !null && $annonsText == !null && $kortInfo == !null && $ort == !null && $model == !null) {
			$sql = "INSERT INTO annonswebb (aid, date, annonsText, pris, title, kortInfo, ort, model)
			VALUES ('$aid', '$date', '$annonsText', '$pris', '$title', '$kortInfo', '$ort', '$model')";
			$result = mysqli_query($conn, $sql);
			//echo "Din annons har lagts till!";
			header("Location: dinAnnons.php");

		}else{
			echo "Fyll i alla fält innan du skickar in!";
		}
	}
}



// $result = mysqli_query($conn, $sql);