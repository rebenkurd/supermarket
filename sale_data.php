<?php
include('configs/init.php');
$sales=Sale::find_all();
$a=1;
foreach($sales as $sale){
    if($sale){

?>
<tr id="tr_sale_<?php echo $sale->id;?>">
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
<?php }else{?>
<tr>
<tr><td colspan='7' class='text-center'>هیچ کڕینێک نییە</td></tr></tr>
    <?php
}
}?>