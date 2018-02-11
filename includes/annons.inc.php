<?php
function setAds($conn) {
	if (isset($_POST['annonsSubmit'])) {
		if (!isset($_SESSION['u_id'])) {
			echo 'För att lägga upp en annons så måste du först logga in.';
		} else {	
			$aid = $_POST['aid'];
			$date = $_POST['date'];
			$annonsText = $_POST['annonsText'];
			$pris = $_POST['pris'];
			$title = $_POST['title'];
			$kortInfo = $_POST['kortInfo'];
			$ort = $_POST['ort'];
			$model = $_POST['model'];
			$image = $_FILES['bild'];
			$uploader = $_SESSION['u_uid'];

			// Image properies
			$imageName = $_FILES['bild']['name'];
			$imageTmpName = $_FILES['bild']['tmp_name'];
			$imageSize = $_FILES['bild']['size'];
			$imageError = $_FILES['bild']['error'];
			$imageType = $_FILES['bild']['type'];

			// Looks at extentions of image
			$imageExt = explode('.', $imageName);
			$imageActualExt = strtolower(end($imageExt));

			// Array of exsterntisonns
			$allowed = array('jpg', 'jpeg', 'png');

			if (in_array($imageActualExt, $allowed)) {
				if ($imageError === 0) {
					if ($imageSize < 500000) {
						$imageNameNew = uniqid('', true).".".$imageActualExt;
						$imageDestination = 'uploads/'.$imageNameNew;
						move_uploaded_file($imageTmpName, $imageDestination);
						$imageDbName = $_POST['key'] = $imageDestination;
					} else {
						echo "The images is to big!";
					}
				} else {
					echo "There was an error when uploading the image!";
				}
			} else {
				echo "You cannot upload image of this type!";
			}


			if ($title == !null && $pris == !null && $annonsText == !null && $kortInfo == !null && $ort == !null && $model == !null && $imageDbName == !null) {
				$sql = "INSERT INTO annonswebb (aid, date, annonsText, pris, title, kortInfo, ort, model, imageName, uploader)
				VALUES ('$aid', '$date', '$annonsText', '$pris', '$title', '$kortInfo', '$ort', '$model', '$imageDbName', '$uploader')";
				$result = mysqli_query($conn, $sql);
				//echo "Din annons har lagts till!";
				header("Location: index.php");
			}else{
				echo "Fyll i alla fält innan du skickar in!";
			}
		}
	}
}
function getAds($conn) {
	$sql = "SELECT * FROM annonswebb";
	$result = mysqli_query($conn, $sql);
	while ($row = $result->fetch_assoc()) {
			echo "<div class='annons'>";
				echo "<div class='annonsImg'><img src='".$row['imageName']."'></div>";
				echo "<h2>".$row['title']."</h2><p>";
				echo $row['pris']."kr<br>";
				echo $row['kortInfo']."<br>";
				echo $row['model'];
			echo "</p></div>";
	}
}
function getYourAds($conn) {
	$uploader = $_SESSION['u_uid'];
	$sql = "SELECT * FROM annonswebb WHERE uploader='$uploader'";
	$result = mysqli_query($conn, $sql);
	while ($row = $result->fetch_assoc()) {
			echo "<div class='annons'>";
				echo "<div class='annonsImg'><img src='".$row['imageName']."'></div>";
				echo "<h2>".$row['title']."</h2><p>";
				echo $row['pris']."kr<br>";
				echo $row['kortInfo']."<br>";
				echo $row['model'];
				echo '<br>Redigera';
				echo "</p>
					<form action='".deleteAd($conn)."' method='POST' class='deleteAd'>
								<input type='hidden' name='aid' value='".$row['aid']."'>
								<button type='submit' name='deleteAd'>Delete</button>
							</form>
					</div>";
	}
}
function deleteAd($conn) {
	if (isset($_POST['deleteAd'])) {
		$aid = $_POST['aid'];
		$sql = "DELETE FROM annonswebb WHERE aid='$aid'";
		$result = $conn->query($sql);
		header("Location: dinaAnnonser.php?status=success");
	}
}

// $result = mysqli_query($conn, $sql);