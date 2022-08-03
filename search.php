<?php
include 'configs/init.php';
if(isset($_POST['query'])){
$products=Product::searching($_POST['query']);
foreach($products as $product){
if($product){
if($product->recycle==0){
    ?>
    <div class="search-item d-flex justify-content-between align-items-center my-1 p-1 bg-light">
        <div class="search-item-image bg-danger">
            <img src="assets/images/bookingSystem/1.png"alt="">
        </div>
        <input type="hidden" id="code" value="<?php echo $product->code; ?>">
        <div class="search-item-body p-1">
            <h6 style="color:#373757 ;">
            <?php echo $product->name;?>
        </h6>
        </div>
        <button type="button" onclick="addItem(<?php echo $product->code; ?>)" class="btn btn-success mx-2"><span class="ti-plus"></span></button>
        <div class="search-item-price p-1">
            <h6 style="color:#373757 ;"><span><?php echo number_format($product->price); ?></span> دینار</h6>
        </div>
    </div>
<?php }}else{ 
    echo "<div class='text-danger text-center m-3'>هیچ بەرهەمێک نەدۆزرایەوە</div>";
}}}
?>
<?php
    if(empty($_POST['query'])){
    $products=Product::find_all();
    foreach($products as $product){
        if($product->recycle==0){
    ?>
        <span onclick="addSearchItem(<?php echo $product->code;?>)" >
    <div class="search-item d-flex justify-content-between align-items-center my-1 p-1 bg-light">
        <div class="search-item-image bg-danger">
            <img src="assets/images/bookingSystem/1.png"alt="">
        </div>
        <div class="search-item-body p-1">
            <h6 style="color:#373757 ;">
            <?php echo $product->name;?>
        </h6>
        </div>
        <div class="search-item-price p-1">
            <h6 style="color:#373757 ;"><span><?php echo number_format($product->price); ?></span> دینار</h6>
        </div>
    </div>
</span>
<?php }}} ?>
