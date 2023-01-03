<?php


require_once "connection.php";






?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
</head>
<link href="sb-admin-2.css" rel="stylesheet">

<link rel="shortcut icon" type="image/x-icon" href="img/R.png">


<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        text-decoration:none;
    }

    body{
        background-color:black;
        overflow-x:hidden;
    }

    .nav{
      display: flex;
      align-items: center;
      justify-content: center;
      
    }

    .nav a{
        margin:0px 10px;
        color: red;
        padding: 14px 20px;
        text-decoration:none;
    }

    .nav a:hover{
        background-color: white;
        border-radius:10px;
        
    }

   

     

    .name{
        color:pink;
        text-shadow:2px 2px 2px blue;
    }

    .about{
        color:red;
        padding: 6px 10px;
        border-radius: 10px 10px 10px 10px ;
        background-color:white;
        transition:all 1s;
       
       
    }

    .about:hover{
        color: white;
        text-decoration:none;
        background-color:red;
       
        
        

    }

    .t_red{
        color: pink;
    }

    

    h1{
        animation-name:h11;
        animation-duration:2s;
        animation-iteration-count:infinite;
        text-align:center;
    }

    @keyframes h11 {
      0% {
            color:red;
          
        
        }
        25% {
            color:white;
          
        
        }
        50% {
            color:yellow;
          
        
        }
        75% {
            color:pink;
          
        
        }
        100%{
            color:blue;
           
            
        }
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
        </a> 
    </div> <br> 

    <?php 
     $sql9="SELECT * FROM `product` ";
     $result9=mysqli_query($con,$sql9);   
   
     ?>
     <h1>@CONSOLE</h1> <br>
    <h2 class='text-center'>PS2 Consoles</h2> <br> <br>
   
     
     
    <div class="container">

      <div class="row d-flex flex-row  justify-content-center text-sm-center">

      <?php foreach($result9 as $ps){ ?>

        <div class="col-12 col-lg-4 col-md-6 col-sm-8 my-3 text-sm-center">

        <div class="card" style="width: 18rem; height: 30rem; ">
  <img class="card-img-top" src="photos/<?php echo $ps['picture'] ?>"  width="280px"  height="200px" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo 'Name: '.$ps['product_name']; ?></h5>
    <p class="card-text t_red"><?php echo 'Brand: '.$ps['brand']; ?>              </p>
    <p class="card-text t_red"><?php echo 'Price: '.$ps['price']; ?>              </p>
    <a href="productabout.php?aboutproduct=<?php echo $ps['product_id']; ?>" class="about mt-2">About</a>
  </div>
</div>


        </div>

        <?php
         }
         ?>

      </div>

    
    </div>
   
     

   <!-- Footer -->
   <footer class="sticky-footer bg-white mt-5">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

</body>
</html> 