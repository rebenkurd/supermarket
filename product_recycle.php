<!-- header -->
<?php include 'includes/header.php'; ?>
<?php
if(isset($_GET['id'])){
        $product=Product::find_by_id($_GET['id']);
        $product->recycle=0;
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
                                <h1>بەرهەمەکان</h1>
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
                                                    <th>کۆد</th>
                                                    <th>ناو</th>
                                                    <th>جۆر</th>
                                                    <th>کۆمپانیا</th>
                                                    <th>ب.دەرچوون</th>
                                                    <th>ب.بەسەرچوون</th>
                                                    <th>نرخ</th>
                                                    <th>زیادکراوە لە لایەن</th>
                                                    <th>کردار</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $products = Product::find_all();
                                                $a=1;
                                                foreach($products as $product){
                                                    if($product->recycle==1){
                                                ?>
                                                <tr id="tr_product_<?php echo $product->id; ?>">
                                                    <td><?php echo $a++; ?></td>
                                                    <td><?php echo htmlentities($product->code,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($product->name,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($product->category,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($product->company,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($product->manufacture_date,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($product->expire_date,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($product->price,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php
                                                        $addedby=User::find_by_id($product->addedby);
                                                        echo htmlentities($addedby->first_name.' '.$addedby->last_name,ENT_QUOTES,'UTF-8');
                                                    ?></td>
                                                    <td><?php
                                                        $addedby=User::find_by_id($user->addedby);
                                                        echo htmlentities($addedby->first_name.' '.$addedby->last_name,ENT_QUOTES,'UTF-8');
                                                    ?></td>
                                                    <td>
                                                        <button type="button" onclick="productRecovery(<?php echo $product->id; ?>)" class="btn btn-success" title="گەڕاندنەوە">
                                                            <span class="ti-reload"></span>
                                                        </button>
                                                        <button type="button" onclick="productDelete(<?php echo $product->id; ?>)"  class="btn btn-danger" title="سڕینەوەی بە تەواوی">
                                                            <span class="ti-trash"></span>
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
