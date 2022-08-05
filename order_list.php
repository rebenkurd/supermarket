<!-- header -->
<?php include 'includes/header.php'; ?>
<?php
if(isset($_GET['id'])){
        $order=Orders::find_by_id($_GET['id']);
        $order->recycle=1;
        $order->save();
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
                                <h1>لیستی فرۆشراوەکان</h1>
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
                                                <button type="button" onclick="multiRecycleOrder()" title="ناردنی بۆ بەشی سڕاوەکان" class="btn btn-secondary"><i class="ti-reload"></i></button>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered" id="bootstrap-data-table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                    <input type="checkbox" id="checkall">
                                                    </th>
                                                    <th>زنجیرە</th>
                                                    <th>کۆدی کاڵا</th>
                                                    <th>ناو کاڵا</th>
                                                    <th>عەدەد</th>
                                                    <th>نرخی کاڵا</th>
                                                    <th>کۆی نرخ</th>
                                                    <th>فرۆشیار</th>
                                                    <th>کردار</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $orders = Orders::find_all();
                                                $a=1;
                                                foreach($orders as $order){
                                                    if($order->recycle==0){
                                                ?>
                                                <tr id="tr_order_<?php echo $order->id; ?>">
                                                    <td>
                                                        <input type="checkbox" 
                                                        id="sel" 
                                                        class="checkitem"
                                                        name="sel[]" 
                                                        value="<?php 
                                                        echo $order->id; ?>">
                                                    </td>
                                                    <td><?php echo $a++; ?></td>
                                                    <td><?php echo htmlentities($order->pr_code,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($order->pr_name,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities($order->pr_quantity,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities(number_format($order->pr_price,0),ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php echo htmlentities(number_format($order->total_price,0),ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td><?php
                                                        $addedby=User::find_by_id($order->saledby);
                                                        echo htmlentities($addedby->first_name.' '.$addedby->last_name,ENT_QUOTES,'UTF-8');
                                                    ?></td>
                                                    <td>
                                                        <button type="button" onclick="orderUpdate(<?php echo $order->id; ?>)" class="btn btn-warning" title="دەستکاریکردن">
                                                            <span class="ti-pencil-alt"></span>
                                                        </button>
                                                        <button type="button"  class="btn btn-secondary " onclick="orderRecycle(<?php echo $order->id; ?>)"
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
