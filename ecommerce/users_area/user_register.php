<?php
include('../admin/includes/connect.php');
include('../functions/common_function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body { 
  
} 
.container { 
  display: flex; 
  flex-direction: column; 
  justify-content: center; 
  align-items: center; 
  height: 100vh; 
} 
  
form { 
  display: flex; 
  flex-direction: column; 
  align-items: center; 
} 
label { 
  display: block; 
  margin-bottom: 5px; 
} 
  
input[type="text"], 
input[type="email"], 
input[type="password"] { 
  width: 100%; 
  padding: 10px; 
  margin-bottom: 20px; 
  border: 1px solid #ccc; 
  border-radius: 5px; 
} 
input[type="submit"] { 
  background-color: #4caf50; 
  color: white; 
  padding: 10px 20px; 
  border: none; 
  border-radius: 5px; 
  cursor: pointer; 
} 
  
input[type="submit"]:hover { 
  background-color: #45a049; 
}

    </style>
</head>
<body>
<div class="container"> 
        <h1>Registration Page</h1> 
        <form method="post" action="" > 
            <label for="user_username"> 
                Username: 
            </label> 
            <input type="text" 
                   id="user_username"
                   name="user_username" required> 
  
            <label for="user_email"> 
                Email: 
            </label> 
            <input type="email" 
                   id="username" 
                   name="user_email" required> 
  
            <label for="user_password">password:</label> 
            <input type="password" 
                   id="password" 
                   name="user_password" required> 
  
            <label for="user_password">confirm_Password:</label> 
            <input type="password" 
                   id="password" 
                   name="conf_user_password" required>
                   
            <label for="user_address"> 
                address: 
            </label> 
            <input type="text" 
                   id="user_address"
                   name="user_address" required>   
                   
                   <label for="user_phone"> 
                phone: 
            </label> 
            <input type="text" 
                   id="user_contact"
                   name="user_contact" required>

  
            <input type="submit" 
                   value="Register" name="user_register"> 
            
        </form> 
        <p> Already have an account?</p> 
        <a href="user_login.php">Click Here</a> 
    </div> 
    <br> 
</body>
</html>
<?php
if(isset($_POST['user_register'])){
  $user_username=$_POST['user_username'];
  $user_email=$_POST['user_email'];
  $user_password =$_POST['user_password'];
  $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
  $conf_user_password =$_POST['conf_user_password'];
  $user_address =$_POST['user_address'];
  $user_contact=$_POST['user_contact'];
  $user_ip=getIPAddress();
  //select query
  $select_query="select * from user_table where username='$user_username' or user_email='$user_email'";
  $result=mysqli_query($con,$select_query);
  $rows_count=mysqli_num_rows($result);
  if($rows_count>0){
    echo "<script>alert('username and email already exists')</script>";
  }else if($user_password!=$conf_user_password){
    echo "<script>alert('password do not match')</script>";
  }
  else{
    //insert query
    $insert_query="insert into user_table (username,user_email,user_password,user_ip,user_address,user_mobile) values(
      '$user_username','$user_email','$hash_password','$user_ip','$user_address','$user_contact')";
      $sql_excute=mysqli_query($con,$insert_query);
  }
  //selecting cart items
  $select_cart_items="select * from cart_details where ip_address='$user_ip'";
  $result_cart=mysqli_query($con,$select_cart_items);
  $rows_count=mysqli_num_rows($result_cart);
  if($rows_count>0){
    $_SESSION['username']=$user_username;
    echo "<script>alert('you have items in your cart')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
  }else{
    echo "<script>window.open('../index.php','_self')</script>";
  }
 
   


}

?>