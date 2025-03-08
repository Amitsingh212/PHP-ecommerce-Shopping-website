<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,th,td{
       border-collapse:collapse;
       border:1px solid black;
       margin-top:5px;
    }
    </style>
</head>
<body>
    <?php
    $username=$_SESSION['username'];
    $get_user="select * from user_table where username='$username'";
    $result=mysqli_query($con,$get_user);
    $row_fetch=mysqli_fetch_assoc($result);
    $user_id=$row_fetch['user_id'];
    //echo $user_id;
   
    ?>
<h3 style="text-align:center;">All my orders</h3>
<table>
    

    <tr>
        <th>S1 no</th>
        <th>amount product</th>
        <th>total product</th>
        <th>invoice number</th>
        <th>date</th>
        <th>Complete/Incomplete</th>
        <th>status</th>
    </tr>
    <?php
    $get_order_details="select * from user_order where user_id=$user_id";
    $result_orders=mysqli_query($con,$get_order_details);
    $number=1;
    while($row_orders=mysqli_fetch_assoc($result_orders)){
        $order_id=$row_orders['order_id'];
        $amount_due=$row_orders['amount_due'];
        $total_products=$row_orders['total_products'];
        $invoice_number=$row_orders['invoice_number'];
        $order_status=$row_orders['order_status'];
        if($order_status=='pending'){
            $order_status='incomplete';
        }else{
            $order_status='Complete';
        }
        $order_date=$row_orders['order_date'];
        
        echo "  <tr>
        <td>$number</td>
        <td>$amount_due</td>
        <td>$total_products</td>
        <td>$invoice_number</td>
        <td>$order_date</td>
        <td>$order_status</td>";
        ?>
        <?php
        if($order_status=='Complete'){
            echo "<td>Paid</td>";
        }else{
            echo "<td><a href='confirm_payment.php?order_id=$order_id'>confirm</a></td>
            </tr>";
        }
      
    $number++;

    }
    
    ?>
</table>
</body>
</html>
