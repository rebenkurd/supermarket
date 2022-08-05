<?php

class Sale extends Db_Object{

    protected static $db_table="sale";
    protected static $db_table_fields=array('id','product_id','pr_code','pr_name','pr_quantity','pr_price','total_price','saledby','status','recycle','created_at','updated_at');

    public $id;
    public $product_id;
    public $pr_code;
    public $pr_name;
    public $pr_price;
    public $pr_quantity;
    public $total_price;
    public $recycle;
    public $saledby;
    public $status;
    public $created_at;
    public $updated_at;


    public static function clearAllSale(){
        global $db;
        $sql="DELETE FROM ".self::$db_table;
        return $db->query($sql);
    }

    public static function find_by_product_id($str){
    global $db;
    $the_result_array=static::find_by_query("SELECT * FROM ".static::$db_table." WHERE product_id='$str' LIMIT 1");
    return !empty($the_result_array) ? array_shift($the_result_array) : false;
}
    public static function find_by_cashier($id){
    global $db;
    return static::find_by_query("SELECT * FROM ".static::$db_table." WHERE saledby='$id'");
}

public static function TotalPrice(){
    global $db;
    $query = "SELECT SUM(total_price) AS Total FROM ".Static::$db_table;
    $sql =$db->query($query);
    $rows = mysqli_fetch_assoc($sql);
    $Total = $rows['Total'];
    return number_format($Total);
}


}








?>