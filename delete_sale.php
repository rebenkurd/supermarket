<?php
include("configs/init.php");
if(empty($_GET['id'])){
RedirectTo("sale.php");
}
$sale=Sale::find_by_id($_GET['id']);
    $sale->delete();




?>