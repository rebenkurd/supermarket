<?php
include("configs/init.php");
        $user=new User();
        $first_name=$user->first_name = $_POST['first_name'];
        $last_name=$user->last_name = $_POST['last_name'];
        $email=$user->email = $_POST['email'];
        $phone=$user->phone = $_POST['phone'];
        $password=$user->password = $_POST['password'];
        $role=$user->role = $_POST['role'];
        $addedby=$user->addedby = $_SESSION['user_id'];

        if(empty($first_name)){
            echo "تکایە خانەی ناوی سەرەتا پڕبکەرەوە";
        }else if(empty($last_name)){
            echo "تکایە خانەی ناوی کۆتا پڕبکەرەوە";
        }else if(empty($email)){
            echo "تکایە خانەی ناوی ئیمەیڵ پڕبکەرەوە";
        }else if(empty($phone)){
            echo "تکایە خانەی ژمارەی مۆبایل پڕبکەرەوە";
        }else if(empty($password)){
            echo "تکایە خانەی وشەی تێپەڕ پڕبکەرەوە";
        }else if(empty($role)){
            echo "تکایە ڕۆلێک هەڵبژێرە";
        } else{
            $user->save();
            echo "زانیارییەکان زیادکرا";
        }
?>
