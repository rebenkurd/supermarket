<?php
include("configs/init.php");
if(empty($_GET['id'])){
RedirectTo("user_recycle.php");
}
$user=User::find_by_id($_GET['id']);
    $user->delete();
?>