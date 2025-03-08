<?php
//include connect file
//include('./admin/includes/connect.php');
//getting products
function getproducts(){
    global $con;
    $select_query="select * from products order by rand() limit 0,4";
    $result_query=mysqli_query($con,$select_query);
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      echo "<div class='pro'>
      <img src='./admin/product_images/$product_image1' alt='$product_title'>
      <div class='des'>
        <span>$product_title</span>
        <h5>$product_description</h5>
        <div class='star'>
          <i class='fa-solid fa-star'></i>
          <i class='fa-solid fa-star'></i>
          <i class='fa-solid fa-star'></i>
          <i class='fa-solid fa-star'></i>
        </div>
        <h4>RS $product_price /-</h4>
      </div>
      <a href='index.php?add_to_cart=$product_id'<button class='addtocart'>add to cart</button></a>
      <a href='product_details.php?product_id=$product_id'><button>view more</button></a>
    </div>";
}

}

//getting another function
function get_all_products(){
  global $con;
  $select_query="select * from products order by rand()";
  $result_query=mysqli_query($con,$select_query);
  //$row=mysqli_fetch_assoc($result_query);
  //echo $row['product_title'];
  while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    echo "<div class='pro'>
    <img src='./admin/product_images/$product_image1' alt='$product_title'>
    <div class='des'>
      <span>$product_title</span>
      <h5>$product_description</h5>
      <div class='star'>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
      </div>
      <h4>Price $product_price /-</h4>
    </div>
    <a href='index.php?add_to_cart=$product_id'<button class='addtocart'>add to cart</button></a>
    <a href='product_details.php?product_id=$product_id'><button>view more</button></a>
  </div>";
}
}
//searching products function
function search_product(){
  global $con;
  if(isset($_GET['search_data_product'])){
    $search_data_value = $_GET['search_data'];

  
    $search_query="select * from products where product_keyword like '%$search_data_value%'";
    $result_query=mysqli_query($con,$search_query);
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      echo "<div class='pro'>
      <img src='./admin/product_images/$product_image1' alt='$product_title'>
      <div class='des'>
        <span>$product_title</span>
        <h5>$product_description</h5>
        <div class='star'>
          <i class='fa-solid fa-star'></i>
          <i class='fa-solid fa-star'></i>
          <i class='fa-solid fa-star'></i>
          <i class='fa-solid fa-star'></i>
        </div>
        <h4>Price $product_price /-</h4>
      </div>
      <a href='index.php?add_to_cart=$product_id'<button class='addtocart'>add to cart</button></a>
      <a href='product_details.php?product_id=$product_id'><button>view more</button></a>
    </div>";
}


}
}
//view details function
function view_details(){
  global $con;
  if(isset($_GET['product_id'])){
    $product_id=$_GET['product_id'];
    $select_query="select * from products where product_id=$product_id";
    $result_query=mysqli_query($con,$select_query);
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_image2=$row['product_image2'];
      $product_image3=$row['product_image3'];
      
      $product_price=$row['product_price'];
      echo "<div class='pro' >
      <img src='./admin/product_images/$product_image1' alt='$product_title'>
      <div class='des'>
        <span>$product_title</span>
        <h5>$product_description</h5>
        <div class='star'>
          <i class='fa-solid fa-star'></i>
          <i class='fa-solid fa-star'></i>
          <i class='fa-solid fa-star'></i>
          <i class='fa-solid fa-star'></i>
        </div>
        <h4>Price $product_price</h4>
      </div>
      <a href='index.php?add_to_cart=$product_id'<button class='addtocart'>add to cart</button></a>
      <a href='index.php'><button>go home</button></a>
      </div>
      <div class='small-img-group'>
      <img src='./admin/product_images/$product_image2' alt='' style=width:400px; height=400px;  >
      <img src='./admin/product_images/$product_image3' alt='' style=width:400px; height=400px;>
    </div>
   ";
}
}
}
//get ip address function
function getIPAddress() { 
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip; 
//cart function
function cart(){
if(isset($_GET['add_to_cart'])){
global $con;
$get_ip_address = getIPAddress();
$get_product_id = $_GET['add_to_cart'];
$select_query = "select * from cart_details where ip_address='$get_ip_address' and product_id=$get_product_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows>0){
  echo "<script>alert('this item is already present inside cart')</script>";
  echo "<script>window.open('index.php','self')</script>";
}else{
  $insert_query="insert into cart_details (product_id,ip_address,quantity) values ($get_product_id,'$get_ip_address',0)";
  $result_query=mysqli_query($con,$insert_query);
  echo "<script>alert('this item is added to cart')</script>";
  echo "<script>window.open('index.php','self')</script>";
}

}
}
//function to get cart item numbers
function cart_items(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $get_ip_address = getIPAddress();
    $select_query = "select * from cart_details where ip_address='$get_ip_address'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
    
     
    }else{
      global $con;
    $get_ip_address = getIPAddress();
    $select_query = "select * from cart_details where ip_address='$get_ip_address'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
    }
    echo $count_cart_items;
    }
    //total price funtion 
    function total_cart_price(){
      global $con;
      $get_ip_address = getIPAddress();
      $total_price=0;
      $cart_query="select * from cart_details where ip_address='$get_ip_address'";
      $result=mysqli_query($con,$cart_query);
      while($row=mysqli_fetch_array($result)){
        $product_id=$row['product_id'];
        $select_products="select * from products where product_id='$product_id'";
        $result_products=mysqli_query($con,$select_products);
        while($row_product_price=mysqli_fetch_array($result_products)){
          $product_price=array($row_product_price['product_price']);
          $product_values=array_sum($product_price);
          $total_price+=$product_values;

        }
      } 
      echo $total_price;

    }
  //get user orders details
  function get_user_order_details(){
    global $con;
    $username=$_SESSION['username'];
    $get_details="select * from user_table where username='$username'";
    $result_query=mysqli_query($con,$get_details);
    while($row_query=mysqli_fetch_array($result_query)){
      $user_id=$row_query['user_id'];
      if(!isset($_GET['edit_account'])){
        if(!isset($_GET['my_orders'])){
          if(!isset($_GET['delete_account'])){
            $get_orders="select * from user_order where user_id=$user_id and order_status='pending'";
            $result_orders_query=mysqli_query($con,$get_orders);
            $row_count=mysqli_num_rows($result_orders_query);
            if($row_count>0){
              echo "<h3 style='text-align:center'>you have <span>$row_count</span> pending orders</h3>
              <p style='text-align:center'><a href='profile.php?my_orders'>orders_details</a></p>";
            }else{
              echo "<h3 style='text-align:center'>you have zero pending orders</h3>
              <p style='text-align:center'><a href='../index.php.php?my_orders'>explore products</a></p>";
            }
          }
          
        }

      }
    }

  }





?>