<?php
include('configs/init.php');
$sale=Sale::find_by_code($_GET['product_code']);
echo '<tr>';
echo '<td>'.$sale->pr_code.'</td>';
echo '<td>'.$sale->pr_name.'</td>';
echo '<td>'.$sale->pr_quantity.'</td>';
echo '<td>'.$sale->pr_price.'</td>';
echo '<td>'.$sale->total_price.'</td>';
echo '</tr>';
?>