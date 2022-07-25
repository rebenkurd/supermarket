
<!-- header -->
<?php include 'includes/header.php'; ?>

<?php
if(!isset($_GET['id'])){
    RedirectTo('categories.php');
}

if(isset($_GET['category_id'])){
        $category=Category::find_by_id($_GET['category_id']);
        $category->name = $_GET['name'];
        $category->description = $_GET['description'];
        $category->updated_at=date("Y-m-d H:i:s");
        if(!$category->save()){
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
                <h1>دەستکاریکردنی جۆر</h1>
            </div>
        </div>
    </div>

</div>
<!-- /# row -->
<section id="main-content">
    <?php $category= Category::find_by_id($_GET['id']); ?>
        <div class="col-lg-6 mx-auto">
            <div class="card shadow">
            <span id="msg"></span>
            <div class="form-group">
                <label for="">ناو</label>
                <input type="text" value="<?php echo $category->name; ?>" id="name" class="form-control" placeholder="ناو">
            </div>
            <div class="form-group">
                <label for="">زانیاری زیاتر</label>
                <textarea id="description" class="form-control"><?php echo $category->description; ?></textarea>
            </div>
            <div class="form-group text-center">
            <button type="button" onclick="editCategory(<?php echo $category->id; ?>)" class="btn btn-success w-25">پاشەکەوتکردن</button>
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
