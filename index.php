<?php include ('header.php'); ?>

<?php
<form action="" method="GET">

   <input name="page">

</form>

switch ($_SERVER['REQUEST_URI']) {
    case '/help':
        include 'help.php';
        break;
    case '/calendar':
        include 'calendar.php';
        break;
    default:
        include 'notfound.php';
        break;
}
?>

<?php include ('footer.php'); ?>
