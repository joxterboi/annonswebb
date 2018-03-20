<?php include 'components/header.php'; ?>
    <div id="adsNearYouContainer">
        <h1>Var bor du?</h1>
        <?php echo '
            <form action="'.adNearYou($conn).'" method="POST" id="adsNearYouSubmit">
                <button type="submit" name="adsNearYouSubmit" value="1">Norrbotten</button><br>
                <button type="submit" name="adsNearYouSubmit" value="2">Västerbotten</button><br>
                <button type="submit" name="adsNearYouSubmit" value="3">Jämtland</button><br>
                <button type="submit" name="adsNearYouSubmit" value="4">Västernorrland</button><br>
                <button type="submit" name="adsNearYouSubmit" value="5">Gävleborg</button><br>
                <button type="submit" name="adsNearYouSubmit" value="6">Dalarna</button><br>
                <button type="submit" name="adsNearYouSubmit" value="7">Värmland</button><br>
                <button type="submit" name="adsNearYouSubmit" value="8">Örebro</button><br>
                <button type="submit" name="adsNearYouSubmit" value="9">Västmanland</button><br>
                <button type="submit" name="adsNearYouSubmit" value="10">Uppsala</button><br>
                <button type="submit" name="adsNearYouSubmit" value="11">Stockholm</button><br>
                <button type="submit" name="adsNearYouSubmit" value="12">Södermanland</button><br>
                <button type="submit" name="adsNearYouSubmit" value="13">Skaraborg</button><br>
                <button type="submit" name="adsNearYouSubmit" value="14">Östergötland</button><br>
                <button type="submit" name="adsNearYouSubmit" value="15">Göteborg</button><br>
                <button type="submit" name="adsNearYouSubmit" value="16">Älvsborg</button><br>
                <button type="submit" name="adsNearYouSubmit" value="17">Jönköping</button><br>
                <button type="submit" name="adsNearYouSubmit" value="18">Kalmar</button><br>
                <button type="submit" name="adsNearYouSubmit" value="19">Gotland</button><br>
                <button type="submit" name="adsNearYouSubmit" value="20">Halland</button><br>
                <button type="submit" name="adsNearYouSubmit" value="21">Kronoberg</button><br>
                <button type="submit" name="adsNearYouSubmit" value="22">Blekinge</button><br>
                <button type="submit" name="adsNearYouSubmit" value="23">Skåne</button>
            </form>
        '?>
        
    </div>
<?php include 'components/footer.php'; ?>