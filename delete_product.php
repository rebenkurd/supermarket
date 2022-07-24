<?php
include("configs/init.php");
if(empty($_GET['id'])){
RedirectTo("product_recycle.php");
}
$product=Product::find_by_id($_GET['id']);
    $product->delete();
?>