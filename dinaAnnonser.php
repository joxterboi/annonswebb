<?php include 'components/header.php'; ?>

<?php
    if (!isset($_SESSION['u_id'])) {
        header("Location: index.php");
    } else {
        getYourAds($conn);
    }
?>

<?php include 'components/footer.php'; ?>