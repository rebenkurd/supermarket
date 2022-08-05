<?php
include("configs/init.php");
if(empty($_GET['id'])){
RedirectTo("order_recycle.php");
}
$order=Orders::find_by_id($_GET['id']);
    $order->delete();
?>