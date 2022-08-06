<!-- header -->
<?php include 'includes/header.php'; ?>
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
                                                    <th>کۆدی</th>
                                                    <th>کردار</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $customers = CustOrder::find_all();
                                                $a=1;
                                                foreach($customers as $customer){
                                                    if($customer->recycle==0){
                                                ?>
                                                <tr id="tr_customer_<?php echo $customer->id; ?>">
                                                    <td>
                                                        <input type="checkbox" 
                                                        id="sel" 
                                                        class="checkitem"
                                                        name="sel[]" 
                                                        value="<?php 
                                                        echo $customer->id; ?>">
                                                    </td>
                                                    <td><?php echo $a++; ?></td>
                                                    <td><?php echo htmlentities($customer->code,ENT_QUOTES,'UTF-8'); ?></td>
                                                    <td>
                                                        <button type="button" onclick="seeCustomer(<?php echo $customer->code; ?>)" class="btn btn-warning" title="بینینین">
                                                            <span class="ti-eye"></span>
                                                        </button>
                                                        <button type="button" onclick="customerRestore(<?php echo $customer->id; ?>)" class="btn btn-success" title="گەڕاندنەوە">
                                                            <span class="ti-back-right"></span>
                                                        </button>
                                                        <button type="button"  class="btn btn-secondary " onclick="customerRecycle(<?php echo $customer->id; ?>)"
                                                        title="ناردنی بۆ بەشی سڕاوەکان">
                                                            <span class="ti-archive"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php }} ?>
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
