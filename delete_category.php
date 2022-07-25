<?php
include("configs/init.php");
if(empty($_GET['id'])){
RedirectTo("category_recycle.php");
}
$category=Category::find_by_id($_GET['id']);
    $category->delete();
?>