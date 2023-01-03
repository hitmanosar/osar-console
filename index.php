<?php

require_once "connection.php";
session_start();

if(isset($_POST['bt'])){
   $gmail=$_POST['gmail'];
   $pas=$_POST['pas'];

   $sql="SELECT * FROM `admin` WHERE `email`='$gmail' AND `password`='$pas'
   ";
     
     $result=mysqli_query($con,$sql);

     $rows=mysqli_num_rows($result);

     if($rows == 1){

         $userss=mysqli_fetch_assoc($result);
         $_SESSION['username']=$userss['email'];
         $_SESSION['password']=$userss['password'];
         $_SESSION['name']=$userss['username'];
         header("location:dashboard.php");
     }




     else{
         echo "<script>alert('Email or Password wrong');  </script>";
     }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <!-- <link rel="stylesheet" href="login.css"> -->

    <link rel="shortcut icon" type="image/x-icon" href="img/R.png">
</head>
<style>

    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
   
}

body{
    background-color:black;
}

.container{
    display: flex;
   justify-content: center;
   width: 300px;
   height: 300px;
   
   margin:200px auto;
   box-shadow: 1px 1px 8px 10px rgb(0, 255, 55);
  
   align-items: center;
   flex-direction: column;

}


label{
    color: rgb(12, 236, 68);
    font-weight: bolder;

}


input[type=submit]{
    color: rgb(6, 0, 12);
    width: 90%;
    padding: 5px 5px;
    border-radius: 10px 10px 10px 10px ;
    cursor: pointer;
    outline:none;
    border:none;
}

.lo{
    background-color: #FF0000;
}

.lo:hover{
    background-color: #09ff00;
}



input[type=email] {
    width: 90%;
    
    padding: 5px 5px;
    text-align: center;
    border:none;
    outline: none;

}

input[type=password] {
    width: 90%;
    
    padding: 5px 5px;
    text-align: center;
    border:none;
    outline: none;
 
}

.cb{
   position: relative;
   left: -20px;
   
    
} 


 .er{
    color: rgb(2, 8, 0);
    width: 90%;
    padding: 5px 5px;
    border-radius: 10px 10px 10px 10px ;
    text-align: center;
    background-color: #FF10CB;
    cursor: pointer;
    outline:none;
    border:none;
}

.er:hover{
    background-color: #d3ff10;
}

.ck{
    position: relative;
    margin-left: 37px;

}

 .lb{
    position: relative;
    margin-left: 15px;
    bottom: 3px;
    left: -10px;
}

input::placeholder{
    color: rgb(8, 1, 5);
    text-align: center;
}



</style>
<body>

    <form action="" method="post" autocomplete="off">
    <div class="container">
       <label for="Email">Email</label>
       <input type="email" placeholder="Enter Your Email"  name="gmail" required autofocus> <br>

       <label for="Password">Password</label>
       <input type="password" placeholder="*********"  name="pas" required> <br>
        
       
   <div class="cb">    <span class="ck"> <input type="checkbox"></span> <span class="lb"><label for="Remember me">Remember me</label></span></div>  <br>
   
         <input type="submit" class="lo" value="Login" name="bt"> <br>
        <a href="register.php" class="er">Register</a>



    </div>
</form>
</body>
</html>