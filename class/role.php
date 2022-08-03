
<?php

class Role extends Db_Object{

    protected static $db_table="role";
    protected static $db_table_fields=array('id','name','created_at','updated_at');

    public $id;
    public $name;
    public $created_at;
    public $updated_at;



}




?>