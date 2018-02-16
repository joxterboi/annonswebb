<?php include 'components/header.php'; ?>
    <div id="adsNearYouContainer">
        <h1>Var bor du?</h1>
        <form name="adsNearYouSubmit" action="<?php adNearYou($conn)?>" method="POST" id="adsNearYouSubmit">
            <button type="adsNearYouSubmit" name="place" value="1">Norrbotten</button><br>
            <button type="adsNearYouSubmit" name="place" value="2">Västerbotten</button><br>
            <button type="adsNearYouSubmit" name="place" value="3">Jämtland</button><br>
            <button type="adsNearYouSubmit" name="place" value="4">Västernorrland</button><br>
            <button type="adsNearYouSubmit" name="place" value="5">Gävleborg</button><br>
            <button type="adsNearYouSubmit" name="place" value="6">Dalarna</button><br>
            <button type="adsNearYouSubmit" name="place" value="7">Värmland</button><br>
            <button type="adsNearYouSubmit" name="place" value="8">Örebro</button><br>
            <button type="adsNearYouSubmit" name="place" value="9">Västmanland</button><br>
            <button type="adsNearYouSubmit" name="place" value="10">Uppsala</button><br>
            <button type="adsNearYouSubmit" name="place" value="11">Stockholm</button><br>
            <button type="adsNearYouSubmit" name="place" value="12">Södermanland</button><br>
            <button type="adsNearYouSubmit" name="place" value="13">Skaraborg</button><br>
            <button type="adsNearYouSubmit" name="place" value="14">Östergötland</button><br>
            <button type="adsNearYouSubmit" name="place" value="15">Göteborg</button><br>
            <button type="adsNearYouSubmit" name="place" value="16">Älvsborg</button><br>
            <button type="adsNearYouSubmit" name="place" value="17">Jönköping</button><br>
            <button type="adsNearYouSubmit" name="place" value="18">Kalmar</button><br>
            <button type="adsNearYouSubmit" name="place" value="19">Gotland</button><br>
            <button type="adsNearYouSubmit" name="place" value="20">Halland</button><br>
            <button type="adsNearYouSubmit" name="place" value="21">Kronoberg</button><br>
            <button type="adsNearYouSubmit" name="place" value="22">Blekinge</button><br>
            <button type="adsNearYouSubmit" name="place" value="23">Skåne</button>
        </form>
    </div>
<?php include 'components/footer.php'; ?>