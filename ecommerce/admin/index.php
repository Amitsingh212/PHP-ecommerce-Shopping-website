<?php
include('../admin/includes/connect.php');
include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admindashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <style>
       
        .logo1{
            height: 7%;
            width: 7%;
        }
        .admin_image{
            width: 100px;
            object-fit:conatin;
        }
        .product_img{
            width:100px;
            object-fit:contain;

        }
        
    </style>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <!--navbar-->
    <!--first child-->
    <div class="container-fluid p-0">
         <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info ">
            <div class="container-fluid">
                <img src="../images/logo.jpg" alt="" class="logo1">
                <nav class="navbar navbar-expand-lg navbar-light bg-info ">
                    <ul class="navbar-nav ">
                        <li class="nav-item"></li>
                        <a href="" class="nav-link">welcome guest</a>
                    </ul>
                </nav>
            </div>
        </nav>
         <!--second child-->
         <div class="bg-light">
            <h3 class="text-center p-2">manage details</h3>
         </div>
          <!--third child-->
          <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-5">
                    
                    <p class="text-light text-center">ADMIN AREA</p>
                </div>
                <!--button*10>a.nav-link.text-light.bg-info.my-1-->
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">insert product</a></button>
                    <button><a href="index.php?view_products" class="nav-link text-light bg-info my-1">view products</a></button>
                    <button><a href="index.php?list_orders" class="nav-link text-light bg-info my-1">All orders</a></button>
                    <button><a href="index.php?list_payment" class="nav-link text-light bg-info my-1">all payment</a></button>
                    <button><a href="index.php?list_users" class="nav-link text-light bg-info my-1">list users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">logout</a></button>
                </div>
            </div>
          </div>
    </div>
    <!--fouth child-->
    <div class="conatiner my-5">
        <?php
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_brand'])){
            include('insert_brand.php');
        }
        if(isset($_GET['view_products'])){
            include('view_products.php');
        }
       if(isset($_GET['list_orders'])){
            include('list_orders.php');
       }
       if(isset($_GET['list_payment'])){
        include('list_payment.php');
        }
        if(isset($_GET['list_users'])){
            include('list_users.php');
            }
        
        ?>
    </div>
    </div>
    


    <!--bootstarp js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
