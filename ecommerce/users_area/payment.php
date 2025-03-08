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
        .container{
            text-align:center;
        }
        img{
            width:100px;
            height:100px;
        }
    </style>
</head>
<body>
    <!--php code to access user_id-->
    <?php
   $user_ip = getIPAddress();
   $get_user="select * from user_table where user_ip='$user_ip'";
   $result=mysqli_query($con,$get_user);
   $run_query=mysqli_fetch_array($result);
   $user_id=$run_query['user_id'];
    ?>
    <div class="container">
        <h2>payment options</h2>
        <a href=""><img src="../images/Paytm_logo.png"></a>
        
        <br>
        <a href="order.php?user_id=<?php echo $user_id ?>"><h2>payoffline</h2></a>



    </div>
</body>
</html>