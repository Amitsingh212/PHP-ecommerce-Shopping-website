<?php
if(isset($_GET['edit_account'])){
    $user_session_name=$_SESSION['username'];
    $select_query="select * from user_table where username='$user_session_name'";
    $result_query=mysqli_query($con,$select_query);
    $row_fetch=mysqli_fetch_assoc($result_query);
    $user_id=$row_fetch['user_id'];
    $username=$row_fetch['username'];
    $user_email=$row_fetch['user_email'];
    $user_address=$row_fetch['user_address'];
    $user_mobile=$row_fetch['user_mobile'];
}

    if(isset($_POST['user_update'])){
        $update_id=$user_id;
        $username=$_POST['user_username'];
        $user_email=$_POST['user_email'];
        $user_address=$_POST['user_address'];
        $user_mobile=$_POST['user_mobile'];
        //update query
        $update_data="update user_table set username='$username',user_email='$user_email',user_address='$user_address',
        user_mobile='$user_mobile' where user_id=$update_id";
        $result_query_update=mysqli_query($con,$update_data);
        if($result_query_update){
            echo "<script>alert('data update successfully')</script>";
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form{
            text-align:center;
            margin-top:4px;
        }
        .form-1{
            text-align:center;

        }
        
    </style>
</head>
<body>
    <h3 style="text-align:center;">Edit account</h3>
    <form action="" method="post" style="text-align:center;">
        <div class="form">
        <input type="text" name="user_username" value="<?php echo $username ?>">
        </div>
        <div class="form">
        <input type="email" name="user_email" value="<?php echo $user_email ?>">
        </div>
        <div class="form">
        <input type="text" name="user_address" value="<?php echo $user_address?>">
        </div>
        <div class="form">
        <input type="text" name="user_mobile" value="<?php echo $user_mobile?>">
        </div>
        
        <input type="submit" value="update" name="user_update";>
    </form>
</body>
</html>