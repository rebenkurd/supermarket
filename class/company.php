
<?php

class Company extends Db_Object{

    protected static $db_table="Company";
    protected static $db_table_fields=array('id','name','description','recycle','addedby','created_at','updated_at');

    public $id;
    public $name;
    public $description;
    public $recycle;
    public $addedby;
    public $created_at;
    public $updated_at;



}




?>