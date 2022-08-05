
<!-- header -->
<?php include 'includes/header.php'; ?>


<?php

if(isset($_GET['category_id'])){
echo '<option value="" selected disabled>کاڵا</option>';
$products=Product::find_all();
foreach($products as $product){
    if($product->recycle==0){
        if($product->category==$_GET['category_id']){
            echo '<option value="'.$product->id.'">'.$product->name.'</option>';
        }
    }
}
}

if(isset($_GET['delete'])){
    Sale::clearAllSale();
}

if(isset($_GET['pr_id'])){
$sale=new Sale();
$product=Product::find_by_id($_GET['pr_id']);
$saleUp=Sale::find_by_product_id($product->id);
if($product){
    if($saleUp){
    if($saleUp->product_id==$product->id){
        if(isset($_GET['inc'])){
            $saleUp->pr_quantity=(int)$_GET['pr_quantity'];
            $saleUp->total_price=$saleUp->pr_quantity*$saleUp->pr_price;
            if(!$saleUp->save()){
                die("error".mysqli_error($db->connection));
            }        
        }else{
            $saleUp->pr_quantity++;
            $saleUp->total_price=$saleUp->pr_quantity*$saleUp->pr_price;
            if(!$saleUp->save()){
                die("error".mysqli_error($db->connection));
            }        
        }
    }
    }else{
    $sale->product_id=$product->id;
    $sale->pr_code=$product->code;
    $sale->pr_name=$product->name;
    $sale->pr_price=$product->price;
    if(isset($_GET['qty'])){
        $sale->pr_quantity= (int)$_GET['qty'];
        $sale->total_price=$sale->pr_quantity*$sale->pr_price;
    }else{
        $sale->pr_quantity= 1 ;
        $sale->total_price=$sale->pr_quantity*$sale->pr_price;
    }
    $sale->saledby=$_SESSION['user_id'];
    $sale->created_at=date('Y-m-d H:i:s');
    if(!$sale->save()){
        die("error".mysqli_error($db->connection));
    }

}
    }else{
        
        $sale->product_id=$product->id;
        $sale->pr_code=$product->code;
        $sale->pr_name=$product->name;
        $sale->pr_price=$product->price;
        if(isset($_GET['qty'])){
            $sale->pr_quantity=(int)$_GET['qty'];
            $sale->total_price=$sale->pr_quantity*$sale->pr_price;
        }else{
            $sale->pr_quantity=1 ;
            $sale->total_price=$sale->pr_quantity*$sale->pr_price;
        }
        $sale->saledby=$_SESSION['user_id'];
        $sale->created_at=date('Y-m-d H:i:s');
        if(!$sale->save()){
            die("error".mysqli_error($db->connection));
        }
    
    }
}

if(isset($_GET['product_code'])){
$sale=new Sale();
$product=Product::find_by_code($_GET['product_code']);
    $saleUp=Sale::find_by_product_id($product->id);
    $saleUp=Sale::find_by_product_id($product->id);
    if($saleUp->product_id==$product->id){
        if(isset($_GET['inc'])){
            $saleUp->pr_quantity=$_GET['pr_quantity'];
            $saleUp->total_price=$saleUp->pr_quantity*$saleUp->pr_price;
            if(!$saleUp->save()){
                die("error".mysqli_error($db->connection));
            }        
        }else{
            $saleUp->pr_quantity++;
            $saleUp->total_price=$saleUp->pr_quantity*$saleUp->pr_price;
            if(!$saleUp->save()){
                die("error".mysqli_error($db->connection));
            }        
        }
    }else{
    $sale->product_id=$product->id;
    $sale->pr_code=$product->code;
    $sale->pr_name=$product->name;
    $sale->pr_price=$product->price;
    if(isset($_GET['qty'])){
        $sale->pr_quantity=(int)$_GET['qty'];
        $sale->total_price=$sale->pr_quantity*$sale->pr_price;
    }else{
        $sale->pr_quantity=1 ;
        $sale->total_price=$sale->pr_quantity*$sale->pr_price;
    }
    $sale->saledby=$_SESSION['user_id'];
    $sale->created_at=date('Y-m-d H:i:s');
    if(!$sale->save()){
        die("error".mysqli_error($db->connection));
    }
}
    
}

if(isset($_POST['success'])){
    $order=new Orders();
    $order->pr_id=$_POST['pr_id'];
    $order->pr_code=$_POST['pr_code'];
    $order->pr_name=$_POST['pr_name'];
    $order->pr_price=$_POST['pr_price'];
    $order->pr_quantity=$_POST['pr_quantity'];
    $order->total_price=$_POST['total_price'];
    $order->saledby=$_SESSION['user_id'];
    $order->created_at=date('Y-m-d H:i:s');
        if(!$order->save()){
            die("error".mysqli_error($db->connection));
        }
    }

?>


<!-- sidebar -->
<?php include 'includes/sidebar.php'; ?>
<!-- header -->
<?php include 'includes/top_header.php'; ?>
<!-- content -->
<canvas id="canvas" class="d-none"></canvas>
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>بەشی فرۆشتن</h1>
                            </div>
                        </div>
                    </div>	
                </div>
				<section id="main-content">
                <div class="row">
                    <div class="col-lg">
                        <div class="card position-relative">
                            <div class="search">
                                <input type="text" class="form-control" onkeyup="search(this.value)"  id="#search-txt" placeholder="گەڕان بە دوای بەرهەم...">
                            </div>
                            <div class="card" id="search-result">
                                <span class="ti-close pointer text-danger m-2" style="font-size: 1.2rem;" onclick="searchClose()"></span>
                                    <div class="card-header">
                                        <h5>بەرهەمی دۆزراوە</h5>
                                    </div>
                                    <div class="card-body p-2" id="result">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <lable>جۆری کاڵا</lable>
                                    <select id="categories" class="form-control" onchange="selectedCategory()">
                                        <option value="" selected disabled>جۆری کاڵا</option>
                                        <?php
                                        $categories=Category::find_all();
                                        foreach($categories as $category){
                                            if($category->recycle==0){
                                            ?>
                                        <option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <lable>جۆری کاڵا</lable>
                                    <select id="products" class="form-control">
                                        <option value="" selected disabled>کاڵا</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <lable>عەدەد</lable>
                                    <input type="number" value="1" class="form-control" id="quantity">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-3">
                                    <div class="form-group">
                                    <lable>کۆدی وەصڵ</lable>
                                    <input type="text" disabled class="form-control" id="code" name="code" value="">    
                                    </div>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary" onclick="addSaleProduct()">زیادکردن</button>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
					<div class="row">
                        <!-- /# column -->
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                    <table class="table student-data-table m-t-20">
                        <thead>
                            <tr>
                                <th>زنجیرە</th>
                                <th>کۆد</th>
                                <th>ناو</th>
                                <th>عەدەد</th>
                                <th>نرخ</th>
                                <th>نرخی گشتی</th>
                                <th>کردار</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td colspan="6" style="font-size:1.4rem ;font-weight:bold" class="text-success">کۆی گشتی</td>
                                <?php
                                
                                ?>
                                <td style="font-size:1.4rem;font-weight:bold" class="text-success"><?php echo Sale::totalPrice(); ?> دینار</td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $sales=Sale::find_all();
                            $a=1;
                            foreach($sales as $sale){
                            if($sale->status==0){
                            ?>
                            <tr id="tr_sale_<?php echo $sale->id; ?>" class="tr_sale">
                                    <td><?php echo $a++; ?></td>
                                <td>
                                    <input type="hidden" id="pr_id"  name="pr_id[]" value="<?php echo $sale->product_id; ?>">    
                                    <input type="hidden" id="pr_code" name="pr_code[]" value="<?php echo $sale->pr_code; ?>">    
                                    <?php echo $sale->pr_code; ?>
                                </td>
                                <td>
                                    <input type="hidden" id="pr_name" name="pr_name[]" value="<?php echo $sale->pr_name; ?>">    
                                    <?php echo $sale->pr_name; ?>
                                </td>
                                <td>
                                    <input type="hidden" id="value" value="<?php echo $sale->pr_quantity; ?>">    
                                    <input type="text" id="pr_quantity" 
                                    onchange="Qty(<?php echo $sale->product_id; ?>)"
                                    name="pr_quantity[]" class="form-control" style="width:100px ; text-align:center" value="<?php echo $sale->pr_quantity; ?>"/>    
                                </td>
                                <td>
                                    <input type="hidden" id="pr_price" name="pr_price[]" value="<?php echo $sale->pr_price; ?>">    
                                    <?php echo number_format($sale->pr_price,0); ?>
                                </td>
                                <td>
                                    <input type="hidden" id="total_price" name="total_price[]" value="<?php echo $sale->total_price; ?>">    
                                    <?php echo number_format($sale->total_price,0); ?>
                                </td>
                                <td>
                                    <button type="button" onclick="saleDelete(<?php echo $sale->id; ?>)" class="btn btn-danger"><i class="ti-trash"></i></button>    
                                </td>
                            </tr>
                            <?php } }?>
                        </tbody>
                    </table>
                                </div>
                                    <div class="col-lg-3 mt-5">
                                        <button type="button" onclick="clearAllSale()" class="btn btn-danger">سڕینەوەی هەمووی</button>
                                        <button type="button" onclick="saveAllProduct()" class="btn btn-success">پاشەکەوتکردن</button>
                                        <a type="button" href="small_invoice.php" target="_blanc" id="printer_btn" class="btn btn-primary">چاپکردن</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
					
                </section>
			</div>
			<!-- /# row -->
        </div>
    </div>

<!-- footer -->
<?php include 'includes/footer.php'; ?>
