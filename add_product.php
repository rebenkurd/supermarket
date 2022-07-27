
<!-- header -->
<?php include 'includes/header.php'; ?>

<?php
if(isset($_POST['success'])){
        $product=new Product();
        $product->name = $_POST['name'];
        $product->code = $_POST['code'];
        $product->category = $_POST['category'];
        $product->company = $_POST['company'];
        $product->quantity = $_POST['quantity'];
        $product->price = $_POST['price'];
        $product->description = $_POST['description'];
        $product->manufacture_date = $_POST['manufacture_date'];
        $product->expire_date = $_POST['expire_date'];
        $product->addedby = $_SESSION['user_id'];
        $product->created_at=date("Y-m-d H:i:s");   
        $product->save();
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
                <h1>زیادکردنی بەرهەم</h1>
            </div>
        </div>
    </div>

</div>
<!-- /# row -->
<section id="main-content">
        <div class="col-lg-6 mx-auto">
            <div class="card shadow">
            <span id="msg"></span>
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">کۆد</label>
                        <input type="text"  id="code" class="form-control" placeholder="کۆد">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">ناو</label>
                        <input type="text"  id="name" class="form-control" placeholder="ناو">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">نرخ</label>
                        <input type="text" class="form-control" id="price" placeholder="نرخ">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">دانە</label>
                        <input type="text" class="form-control" id="quantity" placeholder="دانە">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">جۆر</label>
                        <select class="form-control" id="category">
                            <option value="">جۆر</option>
                            <?php
                                $categories=Category::find_all();
                                foreach($categories as $category){
                                    if($category->recycle==0){
                            ?>
                            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                            <?php }}?>
                        </select>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">کۆمپانیا</label>
                        <select class="form-control" id="company">
                            <option value="">کۆمپانیا</option>
                            <?php
                                $companys=Company::find_all();
                                foreach($companys as $company){
                                    if($company->recycle==0){
                            ?>
                            <option value="<?php echo $company->id; ?>"><?php echo $company->name; ?></option>
                            <?php }}?>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">بەرواری دەرچوون</label>
                        <input type="date"  id="manufacture_date" class="form-control">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">بەرواری بەسەرچوون</label>
                        <input type="date"  id="expire_date" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group">
                        <label for="">زانیاری زیاتر</label>
                        <textarea  id="description" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group text-center">
                    <button type="submit" onclick="addProduct()" class="btn btn-success w-25">زیادکردن</button>
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
