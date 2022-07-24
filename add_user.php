
<!-- header -->
<?php include 'includes/header.php'; ?>

<?php
if(isset($_POST['success'])){
        $user=new User();
        $user->first_name = $_POST['first_name'];
        $user->last_name = $_POST['last_name'];
        $user->email = $_POST['email'];
        $user->phone = $_POST['phone'];
        $user->password = $_POST['password'];
        $user->role = $_POST['role'];
        $user->addedby = $_SESSION['user_id'];
        $user->created_at=date("Y-m-d H:i:s");   
        $user->save();
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
                <h1>زیادکردنی بەکارهێنەر</h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>
<!-- /# row -->
<section id="main-content">
        <div class="col-lg-6 mx-auto">
            <div class="card shadow">
            <span id="msg"></span>
                <div class="form-group">
                    <label for="">وێنە</label>
                    <input type="file"  id="image" class="form-control" multiple>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">ناوی سەرەتا</label>
                        <input type="text"  id="first_name" class="form-control" placeholder="ناوی سەرەتا">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">ناوی کۆتای</label>
                        <input type="text"  id="last_name" class="form-control" placeholder="ناوی کۆتای">
                    </div>
                    </div>
                </div>
                <div class="form-group">
                        <label for="">ئیمەیڵ</label>
                        <input type="email"  id="email" class="form-control" placeholder="ئیمەیڵ">
                    </div>
                <div class="form-group">
                        <label for="">ژمارەی مۆبایل</label>
                        <input type="text"  id="phone" class="form-control" placeholder="ژمارەی مۆبایل">
                    </div>
                <div class="form-group">
                        <label for="">وشەی تێپەڕ</label>
                        <input type="password"  id="password" class="form-control" placeholder="وشەی تێپەڕ">
                    </div>
                <div class="form-group">
                        <label for="">ڕۆڵ</label>
                        <select class="form-control" id="role">
                            <option value="">ڕۆڵ</option>
                            <?php
                                $roles=Role::find_all();
                                foreach($roles as $role){
                                    if($role->recycle==0){
                            ?>
                            <option value="<?php echo $role->id; ?>"><?php echo $role->name; ?></option>
                            <?php }}?>
                        </select>
                    </div>
                    <div class="form-group text-center">
                    <button type="submit" onclick="addUser()" class="btn btn-success w-25">زیادکردن</button>
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
