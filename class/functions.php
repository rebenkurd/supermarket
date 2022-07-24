<?php


    function ClassAutoLoader($class){
        $class=strtolower($class);
        $the_path="class/{$class}.php";
        if(file_exists($the_path)){
            require_once($the_path);
        }else{
            die("This File {$class}.php Was Not Found!!");
        }
    }

    spl_autoload_register('ClassAutoLoader');

    function RedirectTo($location){
        return header("Location:".$location);
        exit;
    }




?>