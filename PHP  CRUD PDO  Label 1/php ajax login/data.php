<?php
session_start();

    
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $data=0;
    if($name=="admin"&&$pass=="1234"){
        $_SESSION['login']=true;
        $data=1;
//        echo "login... successfully";
        echo json_encode($data);
    }else{
//        echo " fail....";
        $data='Your User name or Password was incurrect..';
        echo json_encode($data);
    }

 
?>