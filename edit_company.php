
<!-- header -->
<?php include 'includes/header.php'; ?>

<?php
if(!isset($_GET['id'])){
    RedirectTo('companys.php');
}

if(isset($_GET['company_id'])){
        $company=Company::find_by_id($_GET['company_id']);
        $company->name = $_GET['name'];
        $company->description = $_GET['description'];
        $company->updated_at=date("Y-m-d H:i:s");
        if(!$company->save()){
            die('error'.mysqli_error($db->connection));
        }
    }
?>
<!-- sidebar -->
<?php include 'includes/sidebar.php'; ?>
<!-- header -->
<?php include 'includes/top_header.php'; ?>
<!-- content -->
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>دەستکاریکردنی کۆمپانیا</h1>
            </div>
        </div>
    </div>

</div>
<!-- /# row -->
<section id="main-content">
    <?php $company= Company::find_by_id($_GET['id']); ?>
        <div class="col-lg-6 mx-auto">
            <div class="card shadow">
            <span id="msg"></span>
            <div class="form-group">
                <label for="">ناو</label>
                <input type="text" value="<?php echo $company->name; ?>" id="name" class="form-control" placeholder="ناو">
            </div>
            <div class="form-group">
                <label for="">زانیاری زیاتر</label>
                <textarea id="description" class="form-control"><?php echo $company->description; ?></textarea>
            </div>
            <div class="form-group text-center">
            <button type="button" onclick="editCompany(<?php echo $company->id; ?>)" class="btn btn-success w-25">پاشەکەوتکردن</button>
            </div>
            </div>
            <!-- /# card -->
        </div>
        </div>
        </div>
        </div>
        <!-- /# column -->

        <!-- footer -->
<?php include 'includes/footer.php'; ?>
