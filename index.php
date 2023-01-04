<?php include ('header.php'); ?>

<?php

if (isset($_GET['Page'])){
    if($_GET['Page'] == "lol") {
    }
    elseif($_GET['Page'] == "contact") {
        include "Contact.php";
    }
    elseif($_GET['Page'] == "home") {
        include "pagePrincipale.php";
    }
    elseif($_GET['Page'] == "faq") {
        include "FAQ.php";
    }
    else {
        include "unfound.php";
    }
}

else {
    include "pagePrincipale.php";
}
?>

<?php include ('footer.php'); ?>
