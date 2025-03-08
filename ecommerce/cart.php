<?php
include('./admin/includes/connect.php');
include('functions/common_function.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <style>
      .flex-conatiner{
        display:flex;
        justify-content:center;
       
      }
      a{
        margin:4px;
      }
      
    </style>
</head>
<body>
    <section id="header">
        <a href="#"><img src="images/logo.jpg" class="logo" alt="logo" style="height: 40px; width: 40px;"></a>
        <div>
         <ul id="navbar">
             <li><a href="index.html">Home</a></li>
             <li><a  href="Shop.html">Shop</a></li>
             <li><a  href="about.html">About</a></li>
             <li><a  href="contact.html">Contact</a></li>
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
             <li><a href="./users_area/user_register.php">register</a></li>
             <li><a href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i><sup><?php cart_items();?></sup></a></li>
         </ul>
        </div>
     </section>
     <section id="page-header" class="about-header">
       
       
 
     </section>

     <section id="cart" class="section-p1">
     <form action="" method="post">
      <table>
     
      
        <!--php code to displaydynamic data-->
        <?php
        global $con;
        $get_ip_address = getIPAddress();
        $total_price=0;
        $cart_query="select * from cart_details where ip_address='$get_ip_address'";
        $result=mysqli_query($con,$cart_query);
        $result_count=mysqli_num_rows($result);
        if($result_count>0){
          echo "<thead>
          <tr>
              <th>remove</th>
              <th> product Images</th>
              <th>product Title</th>
              <th>price</th>
              <th>quantity</th>
              <th colspan='2'>operations</th>

          </tr>
      </thead>";
        
        while($row=mysqli_fetch_array($result)){
          $product_id=$row['product_id'];
          $select_products="select * from products where product_id='$product_id'";
          $result_products=mysqli_query($con,$select_products);
          while($row_product_price=mysqli_fetch_array($result_products)){
            $product_price=array($row_product_price['product_price']);
            $price_table=$row_product_price['product_price'];
            $product_title=$row_product_price['product_title'];
            $product_image1=$row_product_price['product_image1'];
            $product_values=array_sum($product_price);
            $total_price+=$product_values;
  
           
        
        
        
        ?>
        <tbody>
            <tr>
                <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                <td><img src="./admin/product_images/<?php echo $product_image1?>" alt=""></td>
                <td><?php echo $product_title?></td>
                <td><?php echo $price_table?>/-</td>
                
               <td><input type="text" value="" name="qty"></td>
               <?php
                $get_ip_address = getIPAddress();
                if(isset($_POST['update_cart'])){
                  $quantities=$_POST['qty'];
                  $update_cart="update cart_details set quantity=$quantities where ip_address='$get_ip_address'";
                  $result_products_quantity=mysqli_query($con,$update_cart);
                  $total_price=$total_price*$quantities;


                }
               
               ?>
               <td><!--<td><button>update</button>-->
               <input type="submit" value="update cart" name="update_cart">
               <input type="submit" value="remove_cart" name="remove_cart">
                
              
          
            </tr>
            <?php }}

        }else{
          echo "<h2 style='text-align:center'>cart is empty</h2>";

        }
        ?>
            
        </tbody>
        
      </table>
      </form>
      <!--function to remove items-->
      <?php
      function remove_cart_item(){
        global $con;
        if(isset($_POST['remove_cart'])){
          foreach($_POST['removeitem'] as $remove_id){
            echo $remove_id;
            $delete_query="Delete from cart_details where product_id=$remove_id";
            $run_delete=mysqli_query($con,$delete_query);
            if($run_delete){
              echo "<script>window.open('cart.php','_self')</script>";
            }
          }
        }
      }
      echo $remove_item=remove_cart_item();
      ?>
     </section>
     <!--sub total-->
     <div class="flex-conatiner">
      <?php
      global $con;
      $get_ip_address = getIPAddress();
      
      $cart_query="select * from cart_details where ip_address='$get_ip_address'";
      $result=mysqli_query($con,$cart_query);
      $result_count=mysqli_num_rows($result);
      if($result_count>0){
        echo "<h4 style='padding:3px;'>subtotal:<strong> $total_price/-</strong></h4>
        <a href='index.php'><button style='padding:3px;border:0;background-color:pink;'>continue shopping</button></a>
        <a href='./users_area/checkout.php'><button style='marin-left:2px;padding:3px;border:0;background-color:grey;'>checkout</button></a>
       </div>";
        
      }else{
        echo "<a href='index.php'><button style='padding:3px;border:0;background-color:pink;'>continue shopping</button></a>";
      }
      
      
      
      
      ?>
      <!--<h4 style="padding:3px;">subtotal:<strong><?php echo $total_price?>/-</strong></h4>
      <a href="index.php"><button style="padding:3px;border:0;background-color:pink;">continue shopping</button></a>
      <a href="#"><button style="marin-left:2px;padding:3px;border:0;background-color:grey;">checkout</button></a>
     </div>-->
     
     <!--call to action banner-->
     
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
           <img src="images/playstore.png" alt="" width="100"height="100" >
           <img src="images/appstore.png" alt="" width="100"height="100">
         </div>
         <p>secured payment gateway</p>
         <img src="images/visa-mastercard.png" alt="" width="100"height="70">
       </div>
       <div class="copyright">
         <p>2024 tech2 etc html css javascript php mysql</p>
       </div>
     </footer>
</body>
</html>