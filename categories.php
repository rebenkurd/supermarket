<!-- header -->
<?php include 'includes/header.php'; ?>
<?php
if(isset($_GET['id'])){
        $category=Category::find_by_id($_GET['id']);
        $category->recycle=1;
        $category->save();
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
                                <h1>جۆرەکان</h1>
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
                                        
                                        <table class="table table-striped table-bordered" id="bootstrap-data-table">
                                            <thead>
                                                <tr>
                                                    <th>زنجیرە</th>
                                                    <th>ناو</th>
                                                    <th>زیادکراوە لە لایەن</th>
                                                    <th>کردار</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $categories = Category::find_all();
                                                $a=1;
                                                foreach($categories as $category){
                                                    if($category->recycle==0){
                                                ?>
                                                <tr id="tr_category_<?php echo $category->id; ?>">
                                                    <td><?php echo $a++; ?></td>
                                                    <td><?php echo htmlentities($category->name,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php
                                                        $addedby=User::find_by_id($category->addedby);
                                                        echo htmlentities($addedby->first_name.' '.$addedby->last_name,ENT_QUOTES,'UTF-8');
                                                    ?></td>
                                                    <td>
                                                        <button type="button" onclick="categoryUpdate(<?php echo $category->id; ?>)" class="btn btn-warning" title="دەستکاریکردن">
                                                            <span class="ti-pencil-alt"></span>
                                                        </button>
                                                        <button type="button"  class="btn btn-secondary " onclick="categoryRecycle(<?php echo $category->id; ?>)"
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
