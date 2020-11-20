<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
});

$db=new Crud();
$stmt= $db->getData("setting",5);

if($stmt->rowCount()>0){
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row['keys']."</br>";
    }
}


?>