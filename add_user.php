
<!-- header -->
<?php include 'includes/header.php'; ?>

<?php
if(isset($_POST['success'])){
        $user=new User();
        $first_name=$user->first_name = $_POST['first_name'];
        $last_name=$user->last_name = $_POST['last_name'];
        $email=$user->email = $_POST['email'];
        $phone=$user->phone = $_POST['phone'];
        $password=$user->password = $_POST['password'];
        $role=$user->role = $_POST['role'];
        $addedby=$user->addedby = $_SESSION['user_id'];

        if(empty($first_name)){
            echo "تکایە خانەی ناوی سەرەتا پڕبکەرەوە";
        }else if(empty($last_name)){
            echo "تکایە خانەی ناوی کۆتا پڕبکەرەوە";
        }else if(empty($email)){
            echo "تکایە خانەی ناوی ئیمەیڵ پڕبکەرەوە";
        }else if(empty($phone)){
            echo "تکایە خانەی ژمارەی مۆبایل پڕبکەرەوە";
        }else if(empty($password)){
            echo "تکایە خانەی وشەی تێپەڕ پڕبکەرەوە";
        }else if(empty($role)){
            echo "تکایە ڕۆلێک هەڵبژێرە";
        } else{
            $user->save();
            echo "زانیارییەکان زیادکرا";
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
                <h1>بەکارهێنەرەکان</h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">سەرەکی</a></li>
                    <li class="breadcrumb-item active">بەکارهێنەرەکان</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>
<!-- /# row -->
<section id="main-content">
        <div class="col-lg-6 mx-auto">
            <div class="card shadow">
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
                        <select  id="role" class="form-control">
                            <option value="">ڕۆڵ</option>
                            <option value="0">Super Admin</option>
                            <option value="1">Admin</option>
                            <option value="2">Cashier</option>
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
