<?php include 'components/header.php'; ?>
<!-- <div id="hottestModels">
    <h1>Hetaste modellerna</h1>
</div> -->
<div id="latestAds">
    <h1>Senaste annonserna</h1>
    <?php
        getAds($conn);
    ?>
</div>
<!-- <div id="hottestAds">
    <h1>Hetaste annonserna</h1>
</div> -->
<?php include 'components/footer.php'; ?>