<?php ob_start(); ?>
<?php include("configs/init.php"); ?>
<?php if(!$session->is_signed_in()){ RedirectTo("login.php"); } ?>
<!DOCTYPE html>
<html lang="ar" class="rtl" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Supermarket</title>
    <!-- Styles -->
    <link href="assets/css/lib/data-table/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet"></head>
<body>