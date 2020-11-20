<?php
session_start();
if(!isset($_SESSION['login'])||$_SESSION['login']==false){
    header("location:index.php");
}
include "classes/db.php";
include "classes/config.php";

$db=new database();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if($_POST["submit"]){
        $_SESSION['login']=false;
        header("location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP SIMPLE LOGIN</title>
    <link rel="stylesheet" href="css/demo.css">

</head>
<style>


</style>

<body>
    <div class="frm_header">
        <h2 style="text-align:center;">PHP SIMPLE LOGIN WITH SESSION </h2>
    </div>
    <div class="frm_main">


        <p>Successfully you are login...</p>
        <form action="#" method="post">
            <input type="hidden">
            <input type="submit" name="submit" value="Logout">
        </form>
    </div>
    <div class="frm_footer">
        <h2>Jamir.cse@gmail.com</h2>
    </div>
</body>

</html>