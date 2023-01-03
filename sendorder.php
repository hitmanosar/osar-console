<?php
require_once "connection.php";

if(isset($_GET['sendproduct'])){
    $sendproduct_id=$_GET['sendproduct'];

    $sqlsend="SELECT * FROM `product` WHERE `product_id`='$sendproduct_id' ";
    $resultsend=mysqli_query($con,$sqlsend);
    if($resultsend){
        $rowsend=mysqli_fetch_assoc($resultsend);
    }

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDER SENT</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/R.png">
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    
    body{
        background-color:pink;
    }

    .container{
        display:flex;
        flex-direction:column;
        flex-wrap:wrap;
        
        margin-top:50px;
        align-items:center;
        justify-content:center;
        
    }


    input[type=text]
{
    width: 50%;
    text-align:center;
    padding: 5px 5px;
    outline:none;
    border:none;
   
   
}

label{
     color:brown;
     
   
    
 }

 .payment label input {
    margin:0px 10px 0px 10px;
 }

 .payment{
     width:200px;
     height:100px;
     border:2px solid blue;
     padding:10px 0px 0px 10px;
 }

 input[type=checkbox]{
     width:50px;
     height:20px;
     position: relative;
     top:5px;
 }


 .dda{
    background-color: #FF0000;
    position: relative;
    left: -200px;
    color: rgb(6, 0, 12);
    width: 30%;
    max-width:390px;
    padding: 7px 10px;
    border-radius: 10px 10px 10px 10px ;
    cursor: pointer;
    text-align: center;
    border: none;
}

.dda:hover{
    background-color: #09ff00;
    text-decoration: none;
}

.re{
    background-color:#FF10CB;
    position: relative;
    left:200px;
    bottom: 48px;
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



img{
      
      border-radius:20px;
      box-shadow: 1px 1px 5px 7px red;
  }

  h3{
        color:blue;
    }

    h1{
        color:red;
    }

    h2{
        color:blue;
        margin-left:10px;
        margin-top:10px;
        display:flex;
        align-items:center;
        justify-content:center;
        
        
      
    }

@media(max-width:600px){
    

    .dda{
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

<?php

if(isset($_POST['buy'])){

    $puname=$_POST['puname'];
    $pemail=$_POST['pemail'];
    $pphone=$_POST['pphone'];
    $paddress=$_POST['paddress'];
    $pname_assign= $rowsend['product_name'];
    $psize=$rowsend['size'];
    $pcolor=$rowsend['color'];
    $pprice=$rowsend['price'];


    $sqlp1="INSERT INTO `order detail`(`customername`,`email`,`phone`,`address`,
    `order pname`,`size`,`color`,`total`) VALUES
    ('$puname','$pemail','$pphone','$paddress','$pname_assign','$psize','$pcolor',
    '$pprice') " ;

    $resultp1=mysqli_query($con,$sqlp1);

    if($resultp1){
        echo "<script>alert('successfully sent order we will replay you soon');
              window.location.href='success.php' ;
            </script>" ;
    }
   
    
}



?>



<body>
<div class="container">
<h1> About product </h1> <br> <br>
<h3><?php echo "Name: ".$rowsend['product_name']; ?> </h3> <br>
<h3><?php echo "Decription: ".$rowsend['product description']; ?> </h3> <br>
<h3><?php echo "Size: ". $rowsend['size']; ?> </h3> <br>
<h3><?php echo "Color: ".$rowsend['color']; ?> </h3> <br> 
<h3><?php echo "Brand: ".$rowsend['brand']; ?> </h3> <br>
<h3><?php echo "Category: ". $rowsend['category']; ?> </h3> <br>
<h3><?php echo "Price: ".$rowsend['price']; ?> </h3> <br> <br>
<img src="photos/<?php echo $rowsend['picture'];?>" alt="" width="300" height="300">

</div> 


    <form action="" method="post">
        <div class="container">
        <h2 >Order Form</h2> <br>
       <label for="">Full Name</label>
       <input type="text" name="puname" required autofocus> <br>

       <label for="">Email</label>
       <input type="text" name="pemail" required> <br>

       <label for="">Phone Number</label>
       <input type="text" name="pphone" required> <br>

       <label for="">Address</label>
       <input type="text" name="paddress" required> <br>

        <div class="payment">
       <label for="">Payment Method</label> <br> <br> 
       <label for="">PayPal</label><input type="checkbox" value="">
       <label for="">Visa</label><input type="checkbox" value="">
       </div>
       


      
         <br> <br>

         
       <input type="submit" value="Buy Now" class="dda" name="buy">  <br>
       <a href="userhome.php" class="re">Back</a>
       </div>

    </form>
</body>
</html>