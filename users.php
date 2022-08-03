<!-- header -->
<?php include 'includes/header.php'; ?>
<?php
if(isset($_GET['id'])){
        $user=User::find_by_id($_GET['id']);
        $user->recycle=1;
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
                                <h1>بەڕێوبەرە سەرەکییەکان</h1>
                            </div>
                        </div>
                    </div>
        
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                    <div class="row">
                                            <div class="col-lg-3">
                                                <a href="add_user.php" class="btn btn-primary" title="زیادکردنی بەکارهێنەر"><i class="ti-plus"></i></a>
                                                <button type="button" onclick="multiRecycleUser()" title="ناردنی بۆ بەشی سڕاوەکان" class="btn btn-secondary"><i class="ti-reload"></i></button>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered" id="bootstrap-data-table">
                                            <thead>
                                                <tr>
                                                <th>
                                                    <input type="checkbox" id="checkall">
                                                    </th>
                                                    <th>زنجیرە</th>
                                                    <th>ناو</th>
                                                    <th>ئیمەیڵ</th>
                                                    <th>ژ.مۆبایل</th>
                                                    <th>زیادکراوە لە لایەن</th>
                                                    <th>کردار</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $users = User::find_all();
                                                $a=1;
                                                foreach($users as $user){
                                                    if($user->recycle==0 && $user->role==1){
                                                ?>
                                                <tr id="tr_user_<?php echo $user->id; ?>">
                                                <td>
                                                        <input type="checkbox" 
                                                        id="sel" 
                                                        class="checkitem"
                                                        name="sel[]" 
                                                        value="<?php 
                                                        echo $user->id; ?>">
                                                    </td>
                                                    <td><?php echo $a++; ?></td>
                                                    <td><?php echo htmlentities($user->first_name.' '.$user->last_name,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($user->email,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($user->phone,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php
                                                    if(!empty($user->addedby)){
                                                        $addedby=User::find_by_id($user->addedby);
                                                        echo htmlentities($addedby->first_name.' '.$addedby->last_name,ENT_QUOTES,'UTF-8');
                                                    }else{
                                                        echo "";
                                                    }
                                                    ?> </td>
                                                    <td>
                                                        <button type="button" onclick="userUpdate(<?php echo $user->id; ?>)" class="btn btn-warning" title="دەستکاریکردن">
                                                            <span class="ti-pencil-alt"></span>
                                                        </button>
                                                        <button type="button"  class="btn btn-secondary " onclick="userRecycle(<?php echo $user->id; ?>)"
                                                        title="ناردنی بۆ بەشی سڕاوەکان">
                                                            <span class="ti-archive"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php } } ?>
                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </div>
                </div>
                </div>
                    
<!-- footer -->
<?php include('includes/footer.php'); ?>
