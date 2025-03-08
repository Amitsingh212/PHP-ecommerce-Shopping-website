<?php
include('../admin/includes/connect.php');
session_start();
if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
    //echo $order_id;
    $select_data="select * from user_order where order_id=$order_id";
    $result=mysqli_query($con,$select_data);
    $row_fetch=mysqli_fetch_assoc($result);
    $invoice_number=$row_fetch['invoice_number'];
    $amount_due=$row_fetch['amount_due'];
}
if(isset($_POST['confirm_payment'])){
    $invoice_number=$_POST['invoice_number'];
    $amount=$_POST['amount'];
    $payment_mode=$_POST['payment_mode'];
    $insert_query="insert into user_payments (order_id,invoice_number,amount,payment_mode,date) values
    ($order_id,$invoice_number,$amount,'$payment_mode',NOW())";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<h3 style='text-align:center'>succesfully completed the payment</h3>";
        echo "<script>window.open('profile.php?my_orders','_self')</script>";
    }
    $update_orders="update user_order set order_status='Complete' where order_id=$order_id";
    $result_orders=mysqli_query($con,$update_orders);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container .center{
            text-align:center;
            
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1 style="text-align:center;">Confirm Payment</h1>
        <form action="" method="post">
            <div class="center">
                <input type="text" name="invoice_number" value="<?php echo $invoice_number?>">
            </div>
            <div class="center">
                <label for="">Amount</label>
                <br>
                <input type="text" name="amount" value="<?php echo $amount_due?>">
            </div>
            <div class="center">
                <br>
                <select name="payment_mode" >
                    <option>Select payment mode</option>
                    <option>UPI</option>
                    <option>Netbanking</option>
                    <option>Paypal</option>
                    <option>Cash on Delivery</option>
                    <option>pay offline</option>
                </select>
            </div>
            <div class="center">
                <br>
                <input type="submit" value="confirm" name="confirm_payment">
            </div>
        </form>
    </div>
</body>
</html>