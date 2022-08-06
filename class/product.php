
<?php

class Product extends Db_Object{

    protected static $db_table="products";
    protected static $db_table_fields=array('id','code','name','category','price','quantity','company','description','manufacture_date','expire_date','debt','recycle','addedby','created_at','updated_at');

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
    public $debt;
    public $recycle;
    public $addedby;
    public $created_at;
    public $updated_at;



    public static function count_expire_product(){
        global $db;
        $sql="SELECT COUNT(*) FROM ".static::$db_table." WHERE expire_date <= NOW() AND recycle=0";
        $result=$db->query($sql);
        $row=mysqli_fetch_array($result);
        return array_shift($row);
    }








}








?>