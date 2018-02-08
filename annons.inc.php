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

function getAds($conn) {
	$sql = "SELECT * FROM annonswebb";
	$result = mysqli_query($conn, $sql);
	while ($row = $result->fetch_assoc()) {
			echo "<div class='annons'>";
				echo "<h1>".$row['title']."</h1><br>";
				echo $row['pris']."kr<br>";
				echo $row['kortInfo']."<br>";
				echo $row['model'];
			echo "</div>";
	}
}

// $result = mysqli_query($conn, $sql);