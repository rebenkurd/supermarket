
<!-- header -->
<?php include 'includes/header.php'; ?>

<?php
if(isset($_GET['category_id'])){
$products=Product::find_all();
foreach($products as $product){
if($product->category==$_GET['category_id']){
echo '<option value="">بەرهەمێک هەڵبژێرە</option>';
echo '<option value="'.$product->id.'">'.$product->name.'</option>';
}
}
}

if(isset($_GET['delete'])){
    Sale::clearAllSale();
}

if(isset($_GET['product_code'])){
$sale=new Sale();
$product=Product::find_by_code($_GET['product_code']);
if($product){
$saleUp=Sale::find_by_product_id($product->id);
    if($saleUp->pr_id==$product->id){
        $saleUp->pr_quantity++;
        $saleUp->total_price=$saleUp->pr_quantity*$saleUp->pr_price;
        $saleUp->save();
    }else{
    $sale->pr_id=$product->id;
    $sale->pr_code=$product->code;
    $sale->pr_name=$product->name;
    $sale->pr_price=$product->price;
    $sale->pr_quantity=1;
    $sale->total_price=$product->price * 1;
        if(!$sale->save()){
            die("error".mysqli_error($db->connection));
        }
    }
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
                                <h1>بەشی فرۆشتن</h1>
                            </div>
                        </div>
                    </div>	
                </div>
				<section id="main-content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                            <div class="row">
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">جۆر</label>
                                            <select onchange="selectedCategory()" id="category_id" class="form-control">
                                            <option value="">جۆرێک هەڵبژێرە</option>
                                            <?php
                                            $categories=Category::find_all();
                                            foreach($categories as $category){?>
                                            <option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
                                            <?php }?>
                                        </select>
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">بەرهەم</label>
                                        <select id="product" class="form-control">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">عەدەد</label>
                                            <input type="number" class="form-control" id="quantity">
                                        </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" onclick="addSale()" class="btn btn-primary">زیادکردن</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="card w-10">
                                    <canvas></canvas>
                                    <div id="result"></div>

                            </div>
                            
                                <div class="card">
                            <button type="button" onclick="clearAllSale()" class="btn btn-danger">سڕینەوەی هەمووی</button>
                                </div>  
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <!-- /# column -->
                        <div class="col-lg-12">
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sales=Sale::find_all();
                                                $a=1;
                                                foreach($sales as $sale){
                                                if($sale->status==0){
                                                ?>
                                                <tr id="tr_sale_<?php echo $sale->id; ?>" class="tr_sale">
                                                    <td><?php echo $a++; ?></td>
                                                    <td><?php echo $sale->pr_code; ?></td>
                                                    <td><?php echo $sale->pr_name; ?></td>
                                                    <td><?php echo $sale->pr_quantity; ?></td>
                                                    <td><?php echo $sale->pr_price; ?></td>
                                                    <td><?php echo $sale->total_price; ?></td>
                                                    <td>
                                                        <button type="button" onclick="saleDelete(<?php echo $sale->id; ?>)" class="btn btn-danger"><i class="ti-trash"></i></button>    
                                                    </td>
                                                </tr>
                                                <?php } }?>
                                            </tbody>
                                        </table>
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
