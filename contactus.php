<?php 
 
 require_once "connection.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
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
   width: 350px;
   height: 300px;

  
   box-shadow: 1px 1px 8px 10px rgb(0, 255, 55); 
   margin:auto;
   margin-top: 100px;
   align-items: center;
   flex-direction: column;

}

label{
    color: rgb(12, 236, 68);
    font-weight: bolder;

}


input[type=submit]{
    color: rgb(6, 0, 12);
    width: 50%;
    padding: 5px 5px;
    border-radius: 10px 10px 10px 10px ;
    cursor: pointer;
    border: none;
    outline:none;
}


input[type=email] {
    width: 50%;
    
    padding: 5px 5px;
    text-align: center;
    border: none;
    outline:none;

}

input::placeholder{
    color: rgb(8, 1, 5);
    text-align: center;
}


.lo{background-color: #FF0000;
}

.lo:hover{
    background-color: #09ff00;
}

h1{
    color:#00FF00;
    text-align:center;
}

textarea{
    resize:none;
}


p{
    color:red;
    text-align:center;
}

.nav{
      display: flex;
      align-items: center;
      justify-content: center;
      
    }

    .nav a{
        margin:0px 10px;
        color: blue;
         padding: 14px 20px;
    }

    .nav a:hover{
        background-color: yellow;
        text-decoration:none;
        color:black;
        border-radius:10px;
    }


</style>
<body>
    <div class="nav">
    <a href="userhome.php">
      HOME
    </a>
    <a href="about.php">
     ABOUT
    </a>
    <a href="contactus.php">
     CONTECT US
    </a> <br> <br> <br>
    </div> <br>  <br> <br>
    <h1>Contact Us</h1> <br>
    <p>Please fill this form in a decent manner</p>

    <form action="" method="post">
   <div class="container">
       

       <label for="">Email</label>
       <input type="email" placeholder="Enter Your Email" name="cemail" required autofocus> <br>
        
       <label for="">Message:</label>
       <textarea id="" cols="20" rows="5" name="cmessage" required></textarea> <br>

       <input type="submit" class="lo" name="contact">
      
   </div> 
   </form>

   <?php
   
   if(isset($_POST['contact'])){
       $cemail=$_POST['cemail'];
       $cmessage=$_POST['cmessage'];

       $sqlcontactus="INSERT INTO `contact`(`email`,`message`) VALUES 
       ('$cemail','$cmessage') " ;
       
       $resultcontactus=mysqli_query($con,$sqlcontactus);

       if($resultcontactus){
           echo "<script>alert('Successfully sent to admin  reply to your email soon');        
                window.location.href='userhome.php' ;
                 </script>" ;
       }


     
   }

?>
</body>
</html>


 