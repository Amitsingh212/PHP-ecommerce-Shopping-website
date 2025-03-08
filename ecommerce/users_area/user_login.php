<?php
include('../admin/includes/connect.php');
include('../functions/common_function.php');
@session_start();
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
        <form method="post" action=""> 
            <label for="user_username">Username:</label> 
            <input type="text" 
                   id="user_username" 
                   name="user_username" required> 
  
            <label for="user_password">Password:</label> 
            <input type="password" 
                   id="user_password" 
                   name="user_password" required> 
  
            <input type="submit" 
                   value="Login" name="user_login"> 
        </form> 
        <br><br> 
        <p> Does not have an account? 
            <a href="user_register.php">Click Here</a> 
        </p> 
    </div> 

</body>
</html>
<?php
if(isset($_POST['user_login'])){
  $user_username=$_POST['user_username'];
  $user_password=$_POST['user_password'];
  $select_query="select * from user_table where username='$user_username'";
  $result=mysqli_query($con,$select_query);
  $row_count=mysqli_num_rows($result);
  $row_data=mysqli_fetch_assoc($result);
  $user_ip=getIPAddress();




//cart item 
$select_query_cart="select * from cart_details where ip_address='$user_ip'";
$select_cart=mysqli_query($con,$select_query_cart);
$row_count_cart=mysqli_num_rows($select_cart);
  if($row_count>0){
    $_SESSION['username']=$user_username;
    if(password_verify($user_password,$row_data['user_password'])){
      //echo "<script>alert('login have login successfully')</script>";
      if($row_count==1 and $row_count_cart==0){
        $_SESSION['username']=$user_username;
        echo "<script>alert('login have login successfully')</script>";
        echo "<script>window.open('profile.php','_self')</script>";
      }else{
        $_SESSION['username']=$user_username;
        echo "<script>alert('login have login successfully')</script>";
        echo "<script>window.open('payment.php','_self')</script>";
      }
    }else{
      echo "<script>alert('invalid credentials')</script>";
    }
  }else{
    echo "<script>alert('invalid credentials')</script>";
  }
}
?>