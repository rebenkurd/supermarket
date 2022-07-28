<?php

class Sale extends Db_Object{

    protected static $db_table="sale";
    protected static $db_table_fields=array('id','pr_id','pr_code','pr_name','pr_quantity','pr_price','total_price','saledby','status','recycle','created_at','updated_at');

    public $id;
    public $pr_id;
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

    public static function find_by_product_id($id){
    global $db;
    $the_result_array=static::find_by_query("SELECT * FROM ".static::$db_table." WHERE pr_id='$id' LIMIT 1");
    return !empty($the_result_array) ? array_shift($the_result_array) : false;
}




}








?>