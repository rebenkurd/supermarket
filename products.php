<!-- header -->
<?php include 'includes/header.php'; ?>
<?php
if(isset($_GET['id'])){
        $product=Product::find_by_id($_GET['id']);
        $product->recycle=1;
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
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <a href="add_product.php" class="btn btn-primary" title="زیادکردنی بەرهەم"><i class="ti-plus"></i></a>
                                                <button type="button" onclick="multiRecycleProduct()" title="ناردنی بۆ بەشی سڕاوەکان" class="btn btn-secondary"><i class="ti-reload"></i></button>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered" id="bootstrap-data-table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                    <input type="checkbox" id="checkall">
                                                    </th>
                                                    <th>زنجیرە</th>
                                                    <th>کۆد</th>
                                                    <th>ناو</th>
                                                    <th>جۆر</th>
                                                    <th>عەدەد</th>
                                                    <th>کۆمپانیا</th>
                                                    <th>ب.دەرچوون</th>
                                                    <th>ب.بەسەرچوون</th>
                                                    <th>نرخ</th>
                                                    <th>زیادکراوە لە لایەن</th>
                                                    <th> قەرز </th>
                                                    <th> دۆخ </th>
                                                    <th>کردار</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $products = Product::find_all();
                                                $a=1;
                                                foreach($products as $product){
                                                    if($product->recycle==0){
                                                ?>
                                                <tr id="tr_product_<?php echo $product->id; ?>">
                                                    <td>
                                                        <input type="checkbox" 
                                                        id="sel" 
                                                        class="checkitem"
                                                        name="sel[]" 
                                                        value="<?php 
                                                        echo $product->id; ?>">
                                                    </td>
                                                    <td><?php echo $a++; ?></td>
                                                    <td><?php echo htmlentities($product->code,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($product->name,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($product->quantity,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($product->category,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($product->company,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($product->manufacture_date,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($product->expire_date,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities(number_format($product->price,0),ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php
                                                        $addedby=User::find_by_id($product->addedby);
                                                        echo htmlentities($addedby->first_name.' '.$addedby->last_name,ENT_QUOTES,'UTF-8');
                                                    ?></td>
                                                    <td>
                                                        <?php
                                                        if($product->debt==0){
                                                            echo '<span class="text-success">نەخێر</span>';
                                                        }else{
                                                            echo '<span class="text-warning">بەڵێ</span>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            $tody=date('Y-m-d');
                                                            $expire_date=date('Y-m-d',strtotime($product->expire_date));
                                                            if($tody>=$expire_date){
                                                                echo '<span class="text-danger">بەسەرچووە</span>';
                                                            }else{
                                                                echo '<span class="text-success">بەسەرنەچووە</span>';
                                                            }

                                                        ?>
                                                    </td>
                                                    <td>
                                                        <button type="button" onclick="productUpdate(<?php echo $product->id; ?>)" class="btn btn-warning" title="دەستکاریکردن">
                                                            <span class="ti-pencil-alt"></span>
                                                        </button>
                                                        <button type="button"  class="btn btn-secondary " onclick="productRecycle(<?php echo $product->id; ?>)"
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
