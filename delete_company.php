<?php
include("configs/init.php");
if(empty($_GET['id'])){
RedirectTo("company_recycle.php");
}
$company=Company::find_by_id($_GET['id']);
    $company->delete();
?>