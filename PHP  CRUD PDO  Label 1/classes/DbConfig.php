<?php
class DbConfig{
   // specify your own database credentials
    private $host = "localhost";
    private $db_name = "database";
    private $username = "root";
    private $password = "";
    
    protected $connection;
    
    public function __construct(){
        if(!isset($this->connection)){
            try{
                $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            }catch(PDOException $exception){
                echo "Connection error: " . $exception->getMessage();
            }
        }
        return $this->connection;
    }
}

?>