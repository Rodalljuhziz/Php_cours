<?php include ('header.php'); ?>

<?php

if (isset($_GET['Page'])){
    if($_GET['Page'] == "lol") {
    }
    if($_GET['Page'] == "contact") {
        include "Contact.php";
    }
    if($_GET['Page'] == "home") {
        include "pagePrincipale.php";
    }
    if($_GET['Page'] == "faq") {
        include "FAQ.php";
    }
}

else {
    include "pagePrincipale.php";
}
?>

<?php include ('footer.php'); ?>
