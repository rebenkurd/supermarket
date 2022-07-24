
<?php

class Product extends Db_Object{

    protected static $db_table="products";
    protected static $db_table_fields=array('id','code','name','category','price','quantity','company','description','manufacture_date','expire_date','recycle','addedby','created_at','updated_at');

    public $id;
    public $code;
    public $name;
    public $category;
    public $price;
    public $quantity;
    public $company;
    public $description;
    public $manufacture_date;
    public $expire_date;
    public $recycle;
    public $addedby;
    public $created_at;
    public $updated_at;




}








?>