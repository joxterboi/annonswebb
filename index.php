<?php include 'components/header.php'; ?>
<div id="hottestModels">

</div>
<div id="latestAds">
    <h1>Senaste annonserna</h1>
    <?php
        getAds($conn);
    ?>
</div>
<div id="hottestAds">

</div>
<?php include 'components/footer.php'; ?>