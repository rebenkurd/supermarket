<?php

require_once("configs/constants.php");

class Database{

public $connection;

public function __construct()
{
    $this->open_db_connection();
}

// database connection function
public function open_db_connection(){
    $this->connection=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if($this->connection->connect_errno){
        die("داتابەیسەکەت پەیوەست نەبووە!!!").$this->connection->connect_error;
    }
}


public function query($sql){
    $result=$this->connection->query($sql);
    return $result;
}

private function confirm_query($result){
    if(!$result){
        die("کوێرییەکەت کێشەی تیایە!". $this->connection->error) ;
    }
}

public function es($str){
    $es=$this->connection->real_escape_string($str);
    return $es;
}

}
$db = new Database();


?>