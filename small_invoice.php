
<?php include 'configs/init.php'; ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/lib/data-table/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet"></head>
</head>
<body>

    <div class="mx-auto" id="small_invoice">
        <h4 class="text-center my-5">سوپەرمارکێتی سلیمانی</h4>
    <div class="row" id="row">
        <div class="col-lg-8">
            <p> فرۆشیار : <span><?php 
            $user=User::find_by_id($_SESSION['user_id']);
            echo $user->first_name.' '.$user->last_name;
            
            ?></span></p>
            <p> بەرواری فرۆشتن : <span><?php echo date('d/m/Y');?></span></p>
        </div>
        <div class="col-lg-4">
            <div class="invoice-logo">
                <img src="assets/images/avatar.png" alt="">
            </div>
        </div>
    </div>
    <div class="row">
            <table class="table">
                <thead>
                    <th>کاڵا</th>
                    <th>عەدەد</th>
                    <th>نرخ</th>
                    <th>کۆی نرخ</th>
                </thead>

                <tbody>
                    <?php
                    $sales=Sale::find_all();
                    foreach($sales as $sale){
                        if($sale->saledby == $_SESSION['user_id']){
                    ?>
                    <tr>
                        <td><?php echo $sale->pr_name; ?></td>
                        <td><?php echo $sale->pr_quantity; ?></td>
                        <td><?php echo $sale->pr_price; ?></td>
                        <td><?php echo $sale->total_price; ?></td>
                    </tr>
                    <?php } }?>
                </tbody>
                <tfoot>
                    <tr style="font-weight:bold">
                        <td colspan="3">کۆی گشتی</td>
                        <td><?php echo Sale::TotalPrice(); ?> دینار</td>
                    </tr>
                </tfoot>
            </table>
</div>
</div>
</div>
</div>
</div>
<script>
    var reportPage=document.querySelector('#small_invoice').outerHTML;
    var orginalPage=document.body.innerHTML;
    document.body.innerHTML=reportPage;
    window.print({
        headerTemplate: '',
        footerTemplate: '',
        printBackground: false,
        scale: 1.0,
        pageSize: 'Envelope #10',
        orientation: 'portrait',
        border: {
        top: '0',
        left: '0',
        bottom: '0',
        right: '0'
    }
    });

    document.body.innerHTML=orginalPage
    
</script>
<!-- footer -->
    
</body>
</html>