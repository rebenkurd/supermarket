<?php

class Orders extends Db_Object{

    protected static $db_table="orders";
    protected static $db_table_fields=array('id','order_code','pr_id','pr_code','pr_name','pr_quantity','pr_price','total_price','recycle','saledby','created_at','updated_at');

    public $id;
    public $order_code;
    public $pr_id;
    public $pr_code;
    public $pr_name;
    public $pr_price;
    public $pr_quantity;
    public $total_price;
    public $recycle;
    public $saledby;
    public $created_at;
    public $updated_at;



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