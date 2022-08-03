
<!-- header -->
<?php include 'includes/header.php'; ?>

<?php
if(isset($_GET['id'])){
        $user=User::find_by_id($_GET['id']);
        $user->recycle=0;
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
                                <h1>بەکارهێنەرە سڕاوەکان</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <span id="msg"></span>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                    <div class="row">
                                            <div class="col-lg-3">
                                                <a href="add_user.php" class="btn btn-primary" title="زیادکردنی بەکارهێنەر"><i class="ti-plus"></i></a>
                                                <button type="button" onclick="multiRecoveryUser()" title="گەڕاندەوە" class="btn btn-success"><i class="ti-reload"></i></button>
                                                <button type="button" onclick="multiDeleteUser()" title="سڕینەر" class="btn btn-danger"><i class="ti-trash"></i></button>
                                            </div>
                                        </div>
                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                <th>
                                                    <input type="checkbox" id="checkall">
                                                    </th>
                                                    <th>زنجیرە</th>
                                                    <th>ناو</th>
                                                    <th>ئیمەیڵ</th>
                                                    <th>ژ.مۆبایل</th>
                                                    <th>ڕۆڵ</th>
                                                    <th>زیادکراوە لە لایەن</th>
                                                    <th>کردار</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $users = User::find_all();
                                                $a=1;
                                                foreach($users as $user):
                                                    if($user->recycle==1){
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
                                                    if($user->role==0){
                                                        echo htmlentities('Super Admin',ENT_QUOTES,'UTF-8'); 
                                                    }else if($user->role==1){
                                                        echo htmlentities('Admin',ENT_QUOTES,'UTF-8');
                                                    }else{
                                                        echo htmlentities('Cashier',ENT_QUOTES,'UTF-8');
                                                    }
                                                    ?></td>
                                                    <td><?php
                                                    if(!empty($user->addedby)){
                                                        $addedby=User::find_by_id($user->addedby);
                                                        echo htmlentities($addedby->first_name.' '.$addedby->last_name,ENT_QUOTES,'UTF-8');
                                                    }else{
                                                        echo "";
                                                    }
                                                    ?> 
                                                    </td> 
                                                        <td>
                                                        <button type="button" onclick="userRecovery(<?php echo $user->id; ?>)" class="btn btn-success" title="گەڕاندنەوە">
                                                            <span class="ti-reload"></span>
                                                        </button>
                                                        <button type="button" onclick="userDelete(<?php echo $user->id; ?>)"  class="btn btn-danger" title="سڕینەوەی بە تەواوی">
                                                            <span class="ti-trash"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php } endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                </div>
                </div>
                </div>
                    <!-- /# row -->
                    <!-- footer -->
<?php include 'includes/footer.php'; ?>
