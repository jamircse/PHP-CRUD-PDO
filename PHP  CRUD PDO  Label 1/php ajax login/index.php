<?php
session_start();
include "classes/db.php";
include "classes/config.php";
$db=new database();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Login system</title>
    <link rel="stylesheet" href="css/demo.css">

</head>
<style>
    

</style>

<body>
    <div class="frm_header">
        <h2 style="text-align:center;">PHP SIMPLE LOGIN WITH SESSION </h2>
    </div>
    <div class="frm_main">
        <p id="inf" style="color:red;text-align: center; display:none;">Your user name or password incurrect </p>
        <form action="#" method="post">
            <input type="text" placeholder="Enter user name " id="name" name="name" required><br>
            <input type="password" placeholder="Enteruser password " id="password" name="pass" required><br>
            <input type="button" id="login" value="submit">
        </form>
    </div>
    <div class="frm_footer">
        <h2>Jamir.cse@gmail.com</h2>
    </div>
    <script src="js/jquery.js"></script>
    <script>
    $(document).ready(function(){
    $('#login').on('click',function(){
        var name=$('#name').val();
        var password=$('#password').val();
//        alert(name);
     $.post('data.php?',
         {
            name:name,
            password:password
        },
         function(data){
            if(data ==true){

            setInterval(function(){
                            window.location ='success.php';
                        },1000);
             }else{
//               $('#inf').fadeIn(700).fadeOut(2500);
//               $('#inf').slideDown(700).slideUp(2500);
//               $('#inf').slideUp(700).slideDown(2500);
               $('#inf').show();
                 
               }
            
        }
         
            
        );
        
//           $.ajax({
//
//                url: "data.php",
//                type: "POST",
//                data: {
//                    name:name,
//                    password:password
//
//                },
//                success: function(dataResult) {
//                    if(dataResult==true){
//                    setInterval(function(){
//                            window.location = 'success.php';
//                        },1000);
//                    }else{
//                        alert(dataResult);
//                    }
////                    	location.reload();
//                }
//            });
        
        
    });
        
    });
    
    </script>
</body>

</html>