<?php include("configs/init.php"); ?>
<?php
    $session->logout();
    RedirectTo("login.php");
?>