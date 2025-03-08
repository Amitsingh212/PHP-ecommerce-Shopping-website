<!--connect file-->
<?php
include('../admin/includes/connect.php');
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkoutpage</title>
    <link rel ="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <style>
      #product1 .pro .addtocart{
 background-color: #088178;
 color:#fff;
 bottom:20px;
 margin-left:0px;
 
}



    </style>
</head>
<body>
    
    <section id="header">
       <a href="#"><img src="../images/logo.jpg" class="logo" alt="logo" style="height: 40px; width: 40px;"></a>
       <div>
        <ul id="navbar">
            <li><a class="active" href="../index.php">Home</a></li>
            <li><a href="../products.php">Products</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <?php
            if(!isset($_SESSION['username'])){
              echo "<li><a href=''>welcome guest</a></li>";
            }else{
              echo "<li><a href=''>welcome ".$_SESSION['username']."</a></li>";
            }
              if(!isset($_SESSION['username'])){
                echo "<li><a href='./user_login.php'>Login</a></li>";
              }else{
                echo "<li><a href='logout.php'>Logout</a></li>";
              }
              ?>
              <li><a href="user_register.php">register</a></li>
            <form action="search_product.php" method="get">
              
            
           
            <input type="text" name="search_data" placeholder="Search..">
            <input type="submit" value="search" name="search_data_product">
            </form>
            
        </ul>
       </div>
    </section>
    <div>
        <div>
            <?php
            if(!isset($_SESSION['username'])){
            include('user_login.php');    
            }else{
                include('payment.php'); 
            }
            
            
            ?>
        </div>
    </div>
     
    
    <footer class="section-p1">
      <div class="col">
        <h4>contact</h4>
        <p><strong>address</strong>123 wallinton road,street,san francico</p>
        <p><strong>phone:</strong>+0123456789</p>
        <p><strong>hours</strong>00:18:09,mon-sat</p>
        <div class="follow">
          <h4>follow us</h4>
          <div class="icon">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-youtube"></i>
          </div>
        </div>
      </div>
      <div class="col">
        <h4>about</h4>
        <a href="#">about</a>
        <a href="#">deleviry information</a>
        <a href="#">terms and conditions</a>
        <a href="#">contact us</a>

      </div>
      <div class="col">
        <h4>my account</h4>
        <a href="#">view cart</a>
        <a href="#">my wishlist</a>
        <a href="#">track my orders</a>
        <a href="#">help</a>

      </div>
      <div class="col install">
        <h4>Install app</h4>
        <p>from app store or goggle play</p>
        <div class="row">
          <img src="../images/playstore.png" alt="" width="100"height="100" >
          <img src="../images/appstore.png" alt="" width="100"height="100">
        </div>
        <p>secured payment gateway</p>
        <img src="../images/visa-mastercard.png" alt="" width="100"height="70">


      </div>
      <div class="copyright">
        <p>2024 tech2 etc html css javascript</p>
      </div>
    </footer>
    
</body>
</html>