<?php
 require_once "connection.php";

 if(isset($_POST['btn'])){

     $uname=$_POST['uname'];
     $pass=$_POST['pass'];
     $cpass=$_POST['cpass'];
     $email=$_POST['email'];

     $sql1="SELECT * FROM `admin` WHERE `username`='$uname' AND `email`='$email'
     ";

     $results=mysqli_query($con,$sql1);
     $rows=mysqli_num_rows($results);
     if($rows == 1){
       echo "<script>alert('Duplicate User'); </script>";
     }

     elseif($pass!=$cpass){
       echo "<script>alert('Password does not match'); </script>";
     }

     else{

       $sql="INSERT INTO `admin`(`username`,`email`,`password`,`confirm password`) VALUES 
       ('$uname','$email','$pass','$cpass')";
       $result=mysqli_query($con,$sql);

       if($result){
         
         echo "<script>alert('User Created Successfully');
         window.location.href='index.php';
         </script>";
         
       }
       
     }
       

 }



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <!-- <link rel="stylesheet" href="register.css"> -->

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
    background-color: black;
}

.container{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 300px;
    height: 450px;
    
    box-shadow: 1px 1px 8px 10px rgb(0, 255, 55);
    margin: 200px auto;
    
   
    flex-direction: column;
}

input::placeholder{
    text-align: center;
}

label{
    color: rgb(12, 236, 68);
    font-weight: bolder;

}

input[type=submit]{
    color: rgb(6, 0, 12);
    width: 30%;
    padding: 5px 5px;
    border-radius: 10px 10px 10px 10px ;
    cursor: pointer;
    border: none;
    outline: none;
}


.lo{
    background-color: #FF0000;
    position: relative;
    left: -80px;
}

.lo:hover{
    background-color: #09ff00;
}

.re{
    background-color:#FF10CB;
    position: relative;
    right: -80px;
    bottom: 45px;
    width: 30%;
    padding: 3px 3px;
    border-radius: 10px 10px 10px 10px ;
    cursor: pointer;
    text-align: center;
    color: black;
}
.re:hover{
    background-color:#d3ff10;
}

input[type=email] {
    width: 90%;
   
    padding: 5px 5px;
    text-align: center;
    border: none;
    outline: none;
}

input[type=password] {
    width: 90%;
    
    padding: 5px 5px;
    text-align: center;
    border: none;
    outline: none;
}

input[type=text]
{
    width: 90%;
   
    padding: 5px 5px;
    text-align: center;
    border: none;
    outline: none;
}

option{
    text-align: center;
    color: rgb(10, 10, 10);
    cursor: pointer;
}


select{
    color: rgb(15, 15, 15);
    background-color: rgb(200, 255, 0);
    cursor: pointer;
}





</style>
<body>
   <form action="" method="post" autocomplete="off">
    <div class="container">
    <label for="Username">Username</label>
    <input type="text" placeholder="Username" name="uname"  required autofocus> <br>

    <label for="emailaddress">Email Address</label>
    <input type="email"
    placeholder="Enter Your Email"  name="email"  required> <br>

    <label for="passsword">Password</label>
    <input type="password" placeholder="*********" name="pass" required> <br>

    <label for="repasssword">Repeat Password</label>
    <input type="password" placeholder="*********"  name="cpass" required > <br>

    
   

    <label for="userrole">User Role</label>
    <select name="" id="">
      <option value="Admin">Admin</option>
        <option value="Staff">Staff</option>
        <option value="Developer">Developer</option>  
    </select> 
    <br>

    <input type="submit" value="Register"  name="btn" class="lo"> <br>
    <a href="index.php" class="re">Cancel</a>

</div>
</form>

</body>
</html>