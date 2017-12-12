<?php include 'header.php'; ?>
<?php
echo "
<form method='POST' action='".setAds($conn)."' class='addAd'>
	<input type='hidden' name='aid' value=''>
	<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
	
	<h2>Titel</h2>
	<input type='text' name='title' placeholder='Skriv in titeln på annonsen här'>

	<h2>Kort info</h2>
	<input type='text' name='kortInfo' placeholder='Skriv kort om telefonen (1-5 ord)'>

	<span style='float: left;'>
		<h2>Telefon modell</h2>	
		<select name='model' id='phoneModel' style='width: 247px'>
			<option value='' disabled selected hidden>Välj modell här</option>
			<option value='iPhone7'>apple iPhone 7</option>
			<option value='iPhone8'>apple iPhone 8</option>
			<option value='nexus5x'>Google nexus 5x</option>
			<option value='nexus6p'>Google nexus 6p</option>
		</select>
	</span>
	<span style='float: right;'>
		<h2>Pris i kr</h2>
		<input type='text' name='pris' style='width: 247px' placeholder='Skriv in priset du begär här'>
	</span>

	<h2 style='clear: both;'>Annons</h2>
	<textarea name='annonsText' style='height: 300px;resize: none;' type='text' placeholder='Skriv in all din information som du vill att köparen ska kunna se'></textarea>
	
<input type='file' name='bild' id='bild' style='float: left;' class='uploadImage'>
<label for='bild'>Ladda upp en bild här</label>

	<span style='float: right;'>
		<h2>Din ort</h2>	
		<select name='ort' id='ortVal' style='width: 247px'>
			<option value='' disabled selected hidden>Välj ort här</option>
			<option value='sthlm'>Stockholm</option>
			<option value='gotenborg'>Göteborg</option>
		</select>
	</span>

	<button name='annonsSubmit' type='submit'>Skapa</button>
</form>
";
?>

<?php include 'footer.php'; ?>