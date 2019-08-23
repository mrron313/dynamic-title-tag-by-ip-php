<?php
    ob_start();
?>

<?php include 'header.php';

    $details = getClientIpDetails();

    $details = json_decode($details, true);
    
    ch_title($details["CountryName"]);
?>

<?php include 'footer.php';?>