<?php
require_once "connection.php";

if(isset($_GET['aboutproduct'])){
   $abut=$_GET['aboutproduct'];
   $sql11="SELECT * FROM `product` WHERE `product_id`='$abut' ";
   $result11=mysqli_query($con,$sql11);
   if($result11){
       $abutprodut=mysqli_fetch_assoc($result11);
   }
}




?>

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
    <title>ABOUT PRODUCT</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/R.png">
    
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        text-decoration:none;
    }

    body{
        background-color: black;
    }  

    h3{
        color:#00FF00;
    }

    h1{
        color:red;
    }


    .container{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }
   
   img{
      
       border-radius:20px;
       box-shadow: 1px 1px 5px 7px red;
   }

   .de{
    background-color: #FF0000;
    position: relative;
    left: -200px;
    color: rgb(6, 0, 12);
    width: 30%;
    max-width:390px;
    padding: 6px 10px;
    border-radius: 10px 10px 10px 10px ;
    cursor: pointer;
    text-align: center;
    border: none;
}

.de:hover{
    background-color: #09ff00;
    text-decoration: none;
}

.re{
    background-color:#FF10CB;
    position: relative;
    left:200px;
    bottom: 32px;
    width: 30%;
    max-width:390px;
    padding: 6px 10px;
    border-radius: 10px 10px 10px 10px ;
    cursor: pointer;
    text-align: center;
    color: black;
    text-decoration: none;
}

.re:hover{
    background-color:#d3ff10;
    text-decoration: none;
}

@media(max-width:600px){
    

    .de{
        margin-left:200px;
        
    }

    .re{
        margin-right:200px;
    }

    img{
        width:200px;
        height:200px;
    }
}






</style>
<body>
   

    
  
<div class="container">
<h1> About product </h1> <br> <br>
<h3><?php echo "Name: ".$abutprodut['product_name']; ?> </h3> <br>
<h3><?php echo "Decription: ".$abutprodut['product description']; ?> </h3> <br>
<h3><?php echo "Size: ". $abutprodut['size']; ?> </h3> <br>
<h3><?php echo "Color: ".$abutprodut['color']; ?> </h3> <br> 
<h3><?php echo "Brand: ".$abutprodut['brand']; ?> </h3> <br>
<h3><?php echo "Category: ". $abutprodut['category']; ?> </h3> <br>
<h3><?php echo "Price: ".$abutprodut['price']; ?> </h3> <br>
<img src="photos/<?php echo $abutprodut['picture'];?>" alt="" width="400" height="400">
<br> <br>
<a href="sendorder.php?sendproduct=<?php echo $abutprodut['product_id'];  ?>" class="de">Add To Cart</a> 
<a href="userhome.php" class="re">Cancel</a>

</div>

</body>
</html>