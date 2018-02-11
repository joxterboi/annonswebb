<?php include 'components/header.php'; ?>
<div id="latestAds">
<?php
    if (!isset($_SESSION['u_id'])) {
        header("Location: index.php");
    } else {
        getYourAds($conn);
    }
?>
</div>
<?php include 'components/footer.php'; ?>