<?php

class Sale extends Db_Object{

    protected static $db_table="sale";
    protected static $db_table_fields=array('id','pr_code','pr_name','pr_quantity','pr_price','total_price','saledby','status','recycle','created_at','updated_at');

    public $id;
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

    



}








?>