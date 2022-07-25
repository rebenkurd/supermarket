
<!-- header -->
<?php include 'includes/header.php'; ?>

<?php
if(isset($_POST['success'])){
        $category=new Category();
        $category->name = $_POST['name'];
        $category->description = $_POST['description'];
        $category->addedby = $_SESSION['user_id'];
        $category->created_at=date("Y-m-d H:i:s");   
        if(!$category->save()){
            die("error".mysqli_error($db->connection));  
        }    }
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
                <h1>زیادکردنی جۆر</h1>
            </div>
        </div>
    </div>

</div>
<!-- /# row -->
<section id="main-content">
        <div class="col-lg-6 mx-auto">
            <div class="card shadow">
            <span id="msg"></span>
            <div class="form-group">
                <label for="">ناو</label>
                <input type="text" id="name" class="form-control" placeholder="ناو">
            </div>
            <div class="form-group">
                <label for="">زانیاری زیاتر</label>
                <textarea id="description" class="form-control"></textarea>
            </div>
            <div class="form-group text-center">
            <button type="button" onclick="addCategory()" class="btn btn-success w-25">زیادکردن</button>
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
