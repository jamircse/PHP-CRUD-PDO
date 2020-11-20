<?php


class database{
    public $host=DB_HOST;
    public $user=DB_USER;
    public $pass=DB_PASS;
    public $db_name=DB_NAME;
    public $con;
    
    public function __construct(){
        $this->db_connect();
    }
    public function db_connect(){
        $this->con=new mysqli($this->host,$this->user,$this->pass,$this->db_name);
        if(!$this->con){
            echo "Error : Database connection fail..</br>";
        }else{
//            echo "Database connection successfully.";
        }
    }
    
    public function img_upload($name,$file){
        $destination="..\images/".$name;
        move_uploaded_file($file,$destination);
        return $this;
    }
}
?>