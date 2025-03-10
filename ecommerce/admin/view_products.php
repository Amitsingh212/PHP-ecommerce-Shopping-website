    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        
    <h3 class="text-center text-success">All products</h3>
    <table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr>
            <th>Product ID</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Total sold</th>
            <th>status</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php
        $get_products="select * from  products";
        $result=mysqli_query($con,$get_products);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];
            $status=$row['status'];
            $number++;
            ?>
           <tr class='text-center'>
        <td><?php echo $number;?></td>
        <td><?php echo $product_title;?></td>
        <td><img src='./product_images/<?php echo $product_image1;?>' class='product_img'  /></td>
        <td><?php echo $product_price;?></td>
        <td><?php
        $get_count="select * from orders_pending where product_id=$product_id";
        $result_count=mysqli_query($con,$get_count);
        $rows_count=mysqli_num_rows($result_count);
        echo $rows_count;
        
        ?>
            
        </td>
        <td><?php echo $status;?></td>
        <td><a href='index.php?edit_products' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
        <td><a href='' class='text-light'><i class='fa-regular fa-trash'></i></a></td>
        </tr>
    <?php

        }
        ?>
   
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>
 