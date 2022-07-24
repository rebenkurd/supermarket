<?php 

class User extends Db_Object{

    protected static $db_table="users";
    protected static $db_table_fields=array('id','first_name','last_name','email','password','role','phone','recycle','addedby','image','type_image','tmp_image','size_image','created_at','updated_at');

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $role;
    public $phone;
    public $recycle;
    public $addedby;
    public $image;
    public $type_image;
    public $tmp_image;
    public $size_image;
    public $created_at;
    public $updated_at;
    public $upload_directory="images";

    public function set_file($file){
        if(empty($file) || !$file || !is_array($file)){
            $this->errors[]="هیچ فایلیکمان نییە لیرە";
            return false;
        }elseif($file['error'] !=0){
            $this->errors[] = $this->upload_errors_array[$file['error']];
            return false;
        }else{
            $this->image = basename($file['name']);
            $this->tmp_image = $file['tmp_name'];
            $this->type_image = $file['type'];
            $this->size_image = $file['size'];
        }
    }

    public function save(){

        
        if($this->id){
            $this->update();
        } else {
            if(!empty($this->errors)){
                return false;
            }

            if(empty($this->image) || empty($this->tmp_image)){
                $this->errors[]="the file was not avalable";
                return false;
            }

            $target_path=SITE_ROOT.DS.'assets'.DS.$this->upload_directory.DS.$this->image;

            if(file_exists($target_path)){
                $this->errors[]="The file {$this->image} already exists";
                return false;
            }

            if(move_uploaded_file($this->tmp_image,$target_path)){
                if($this->create()){
                    unset($this->tmp_image);
                    return true;
                }
            }else{

                $this->errors[] = "the file directory probably does not permission";
                return false;
            }

        }
    }

    public function picture_path(){
        return $this->upload_directory.DS.$this->image;
    }

    public function delete_photo(){
        if($this->delete()){
            $target_path=SITE_ROOT.DS.$this->picture_path();
            return unlink($target_path) ? true : false ;
        }else{
            return false;
        }
    }




    public static function verify_user($email,$password){
        global $db;
        $email=$db->es($email);
        $password=$db->es($password);
        $sql="SELECT * FROM ". self::$db_table . " WHERE email='$email' AND password='$password' LIMIT 1";
        $the_result_array=self::find_by_query($sql);
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

}
?>