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
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            overflow:hidden;
        }
    </style>
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Registration</h2>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6">
                <img src="" alt="register image" class="img-fluid" >
            </div>
            <div class="col-lg-6 col-xl-4">
                <form action="" method="">
                    <div class="form-outline mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username" required="required">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter your email" required="required">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required="required">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="confirm_password" class="form-label">confirm_password</label>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter your confirm_password" required="required">
                    </div>
                    <div>
                        <input type="submit" class="bg-info py-2 px-3 border-0" name="admin_registration" value="Register">
                        <p class="small">don't have an account?<a href="admin_login.php">login</a></p>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>