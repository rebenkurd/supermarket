<?php

class CustOrder extends Db_Object{

    protected static $db_table="customer_order";
    protected static $db_table_fields=array('id','code','recycle','created_at','updated_at');

    public $id;
    public $code;
    public $recycle;
    public $created_at;
    public $updated_at;

}
?>