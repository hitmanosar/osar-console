<?php
require_once "connection.php";
session_start();

if(!isset($_SESSION['username'])){
    header("location:index.php");
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUCCESS</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/R.png">
</head>
<style>
    *{
        margin:0;
        padding: 0;
        box-sizing:border-box;
    }
       

    body{
        background-color:pink;
    }
      

    h1{
        color:purple;
    }

    .container{
        width:100%;
        display:flex;
        align-items:center;
        
        justify-content:center;
        flex-direction:column;
        margin-top:200px;
        
    }

    h3{
        color:#0000FF;
    }

    h4{
        color:red;
    }

    a{   
        background-color:black;
         text-decoration:none;
         cursor:pointer;
         text-align: center;
         padding: 6px 10px;
         border-radius: 10px 10px 10px 10px ;
         color:#00FF00;
    }

    a:hover{
        background-color:blue;
        color:pink;
    }

</style>
<body>
    <div class="container">
    <h1>THANK YOU</h1>  <br> <br>

    <h3>For Purchasing Our Product </h3> <br> 
    <h4>Just A Second We're Sending Order Details To Your Email.</h4> <br> <br>
    <a href="userhome.php">Back To Home Page</a>
    </div>
</body>
</html>