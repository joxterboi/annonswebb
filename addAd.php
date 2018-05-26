<?php include 'components/header.php'; ?>
<?php
echo "
<form method='POST' action='".setAds($conn)."' class='addAd' enctype='multipart/form-data'>
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
			<option value='iPhone4'>Apple iPhone 4</option>
			<option value='iPhone5'>Apple iPhone 5</option>
			<option value='iPhone5s'>Apple iPhone 5s</option>
			<option value='iPhone6'>Apple iPhone 6</option>
			<option value='iPhone6+'>Apple iPhone 6 Plus</option>
			<option value='iPhone6s+'>Apple iPhone 6s Plus</option>
			<option value='iPhone6s'>Apple iPhone 6s</option>
			<option value='iPhone7'>Apple iPhone 7</option>
			<option value='iPhone7+'>Apple iPhone 7 Plus</option>
			<option value='iPhone8'>Apple iPhone 8</option>
			<option value='iPhone8+'>Apple iPhone 8 Plus</option>
			<option value='nexus5'>Google nexus 5</option>
			<option value='nexus5x'>Google nexus 5x</option>
			<option value='nexus6'>Google nexus 6</option>
			<option value='nexus6p'>Google nexus 6p</option>
			<option value='pixel'>Google Pixel</option>
			<option value='pixelxl'>Google Pixel XL</option>
			<option value='pixel2'>Google Pixel 2</option>
			<option value='pixel2xl'>Google Pixel 2 XL</option>
			<option value='1+3'>Oneplus 3</option>
			<option value='1+3t'>Oneplus 3t</option>
			<option value='1+5'>Oneplus 5</option>
			<option value='1+5t'>Oneplus 5t</option>
			<option value='1+6'>Oneplus 6</option>
			<option value='ESP'>Essential phone</option>
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
			<option value='1'>Norrbotten</option>
			<option value='2'>Västerbotten</option>
			<option value='3'>Jämtland</option>
			<option value='4'>Västernorrland</option>
			<option value='5'>Gävleborg</option>
			<option value='6'>Dalarna</option>
			<option value='7'>Värmland</option>
			<option value='8'>Örebro</option>
			<option value='9'>Västmanland</option>
			<option value='10'>Uppsala</option>
			<option value='11'>Stockholm</option>
			<option value='12'>Södermanland</option>
			<option value='13'>Skaraborg</option>
			<option value='14'>Östergötland</option>
			<option value='15'>Göteborg</option>
			<option value='16'>Älvsborg</option>
			<option value='17'>Jönköping</option>
			<option value='18'>Kalmar</option>
			<option value='19'>Gotland</option>
			<option value='20'>Halland</option>
			<option value='21'>Kronoberg</option>
			<option value='22'>Blekinge</option>
			<option value='23'>Skåne</option>
		</select>
	</span>

	<button name='annonsSubmit' type='submit'>Skapa</button>
</form>
";
?>

<?php include 'components/footer.php'; ?>