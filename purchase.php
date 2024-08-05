<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MakePurchase</title>
    <link rel="stylesheet" href="purchase.css">
</head>
<body>
<div class="container">
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <h3 class="title">Make Purchase </h3>
                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Enter your name" name="fname" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com" name="email" required>
                </div>
                <div class="inputBox">
                    <span>Mobile number :</span>
                    <input type="text" placeholder="111 2222 333" name="mno" maxlength="10" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality" name="add" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="mumbai" name="city" required>
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="Maharashtra" name="state" required>
                    </div>
                    <div class="inputBox">
                        <span>Pin Code :</span>
                        <input type="text" placeholder="123 456" name="pin" required>
                    </div>
                    <div class="inputBox">
                        <span>Payment Option :</span>
                        <select type="text"  name="" required>
                            <option>Cash on Delivery</option>
                            <option>Paytm</option>
                            <option>UPI</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="Confirm Order" class="submit-btn" name="register">
    </form>
</div>    
</body>
</html>
</body>
</html>
<?php
session_start();

$con=mysqli_connect("localhost","root","","cart");

if(mysqli_connect_error()){
    echo "<script> 
    alert('Cannot connect to database');
    window.location.href='mycart.php';
    </script>";
    exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['register']))
    {
        $query1="INSERT INTO `order_manager`( `full_name`, `email`, `mobile_no`, `address`, `city`, `state`, `pin`) VALUES ('$_POST[fname]','$_POST[email]','$_POST[mno]','$_POST[add]','$_POST[city]','$_POST[state]','$_POST[pin]')";
        if(mysqli_query($con,$query1))
        {
            $order_id = mysqli_insert_id($con);
$query2 = "INSERT INTO `user_order`(`order_id`, `Item_name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
$stmt = mysqli_prepare($con, $query2);
if ($stmt) {
    foreach ($_SESSION['cart'] as $key => $values) {
        $Item_name = $values['Item_name'];
        $Price = $values['Price'];
        $Quantity = $values['Quantity'];
        mysqli_stmt_bind_param($stmt, "isii", $order_id, $Item_name, $Price, $Quantity); // Corrected data types
        mysqli_stmt_execute($stmt);
    }

            
                unset($_SESSION['cart']);
                echo "<script> 
                     alert('Order Placed');
                     window.location.href='home.php';
                     </script>";
            }
            else
            {
                echo "<script> 
            alert('Sql query prepared  Error');
            window.location.href='mycart.php';
            </script>";
            }
        }   
        else
        {
            echo "<script> 
            alert('Sql Error');
            window.location.href='mycart.php';
            </script>";
        }
    }
}

?>
