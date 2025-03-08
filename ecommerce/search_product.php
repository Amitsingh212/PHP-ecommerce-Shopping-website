<?php
include('./admin/includes/connect.php');
include('functions/common_function.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="style.css">
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
       <a href="#"><img src="images/logo.jpg" class="logo" alt="logo" style="height: 40px; width: 40px;"></a>
       <div>
        <ul id="navbar">
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="Shop.html">Shop</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <?php
            if(!isset($_SESSION['username'])){
              echo "<li><a href=''>welcome guest</a></li>";
            }else{
              echo "<li><a href=''>welcome ".$_SESSION['username']."</a></li>";
            }
              if(!isset($_SESSION['username'])){
                echo "<li><a href='./users_area/user_login.php'>Login</a></li>";
              }else{
                echo "<li><a href='./users_area/logout.php'>Logout</a></li>";
              }
              ?>
            <form action="">
            <input type="text" name="search_data" placeholder="Search..">
            <input type="submit" value="search" name="search_data_product">
            </form>
            
        
            <li><a href="cart.html"><i class="fa-sharp fa-solid fa-cart-shopping"></i><sup><?php cart_items();?></sup></a></li>
            <li><a href="#">total price:<?php total_cart_price();?>/-</a></li>
        </ul>
       </div>
    </section>
    <section id="hero">
      <h4>Trade-in-offer</h4>
      <h2>Super value deals</h2>
      <h1>on all product</h1>
      <p>save more with coupons & up to 70% off!</p>
      <button>shop Now</button>

    </section>
    <section id="feature" class="section-p1">
      <div class="fe-box">
        <img src="images/free shipping.png" style=width:90px height="90px">
        <h6>free shipping</h6>
      </div>
      <div class="fe-box">
        <img src="images/order.png" style=width:90px height="90px">
        <h6>online order</h6>
      </div>
      <div class="fe-box">
        <img src="images/free shipping.png" style=width:90px height="90px">
        <h6>free shipping</h6>
      </div>
      <div class="fe-box">
        <img src="images/free shipping.png" style=width:90px height="90px">
        <h6>free shipping</h6>
      </div>
      <div class="fe-box">
        <img src="images/free shipping.png" style=width:90px height="90px">
        <h6>free shipping</h6>
      </div>

    </section>
    <section  id="product1" class="section-p1">
      <!--<h2>Featured Product</h2>
      <p>summer collection new Design</p>-->
      <div class="pro-container">
        <!--fectch products-->
        <?php
        search_product();
        
        
        
        
        ?>
        <!--<div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>-->
        <!--<div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>-->


      </div>

    <!--</section>
    <section id="banner" class="section-ml">
      <h4>Repair Services</h4>
      <h2>up to <span>70% off</span> - All shirts & Accessories</h2>
      <button class="normal">explore more</button>
    </section>
    <!--new arrival-->
    <!--<section  id="product1" class="section-p1">
      <h2>New Arrival</h2>
      <p>summer collection new Design</p>
      <div class="pro-container">
        <!fetching product-->
       
     
        <!--<div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>-->
        <!--<div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/blackshirt.jpg" alt="">
          <div class="des">
            <span>addidas</span>
            <h5>black shirt for men</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>rs400</h4>
          </div>
          <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
        </div>-->


      </div>

    </section>
    <!--call to action banner-->
    <section id="sm-banner" class="section-p1">
      <div class="banner-box">
        <h4>carzy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>the best classic dress is on sale at cara</span>
        <button class="white">learn more</button>
      </div>
      <div class="banner-box">
        <h4>carzy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>the best classic dress is on sale at cara</span>
        <button class="white">learn more</button>
      </div>
    </section>
    <footer class="section-p1">
      <div class="col">
        <img src="" alt="">
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
          <img src="images/Googleplay.png" alt="">
          <img src="images/Googleplay.png" alt="">
        </div>
        <p>secured payment gateway</p>
        <img src="images/payment.png" alt="">


      </div>
      <div class="copyright">
        <p>2024 tech2 etc html css javascript</p>
      </div>
    </footer>
    
</body>
</html>