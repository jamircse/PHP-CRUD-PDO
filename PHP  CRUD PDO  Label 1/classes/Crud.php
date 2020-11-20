<?php
include("DbConfig.php");
class Crud extends DbConfig{
    public function construct(){
        parent::construct();
    }
    //Creat,Read,Update and Delete data
    public function getData($tbl,$id=null){
        $sql="SELECT *FROM $tbl";
        if($id!=null){
            $sql.=" WHERE id=$id";
        }
        $stmt=$this->connection->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
    
    
    public function execute($query){
		$stmt=$this->connection->prepare($query);
        $stmt->execute();
        return $stmt; 
    }
    
    public function delete($tbl,$id){ 
		 $sql="DELETE *FROM $tbl";
        if($id!=null){
            $sql.=" WHERE id=$id";
        }
        $stmt=$this->connection->prepare($sql);
        $stmt->execute();
        return $stmt;
	}
}


?>