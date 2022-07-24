
<!-- header -->
<?php include 'includes/header.php'; ?>

<?php 
if(!isset($_GET['id'])){
    RedirectTo('users.php');
}

if(!empty($_GET['uid'])){
    $user=User::find_by_id($_GET['uid']);
    $user->first_name = $_GET['first_name'];
    $user->last_name = $_GET['last_name'];
    $user->email = $_GET['email'];
    $user->phone = $_GET['phone'];
    $user->role = $_GET['role'];
    $user->addedby = $_SESSION['user_id'];
    if($user->update()){
        echo "زانیارییەکان زیادکرا";
    }else{
        echo "error";
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
                <?php 
                $user = User::find_by_id($_GET['id']);
                ?>
                <!-- /# row -->
                <section id="main-content">
                        <div class="col-lg-6 mx-auto">
                            <div class="card shadow">
                                <input type="hidden" id="user_id" value="<?php echo $user->id;?>">
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">ناوی سەرەتا</label>
                                        <input type="text" id="first_name" value="<?php echo $user->first_name; ?>" class="form-control" placeholder="ناوی سەرەتا">
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">ناوی کۆتای</label>
                                        <input type="text" id="last_name" value="<?php echo $user->last_name; ?>"  class="form-control" placeholder="ناوی کۆتای">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label for="">ئیمەیڵ</label>
                                        <input type="email" id="email" class="form-control" value="<?php echo $user->email; ?>"  placeholder="ئیمەیڵ">
                                    </div>
                                <div class="form-group">
                                        <label for="">ژمارەی مۆبایل</label>
                                        <input type="text" id="phone" class="form-control" value="<?php echo $user->phone; ?>"  placeholder="ژمارەی مۆبایل">
                                    </div>
                                <div class="form-group">
                                        <label for="">ڕۆڵ</label>
                                        <span><?php echo $user->first_name; ?></span>
                                        <select id="role" class="form-control">
                                            <option value="">ڕۆڵ</option>
                                            <option value="0">Super Admin</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Cashier</option>
                                        </select>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="button" id="edit_user" class="btn btn-success w-25">پاشەکەوتکرده</button>
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
