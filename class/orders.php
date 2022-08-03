<?php

class Orders extends Db_Object{

    protected static $db_table="orders";
    protected static $db_table_fields=array('id','pr_id','pr_code','pr_name','pr_quantity','pr_price','total_price','recycle','saledby','created_at','updated_at');

    public $id;
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


}
?>