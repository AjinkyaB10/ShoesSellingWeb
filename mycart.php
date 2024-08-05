<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCart</title>
    <link rel="stylesheet" href="mycart.css">
</head>
<body>
<div class="home">
    <a href="home.php">Home</a>
    <a href="index.php">Log Out</a>
</div>
<br>
    <div class="container">
        <div class="row">
            <div class="col1 ">
                <h1>MY CART</h1>
            </div>

            <div class="col2">
                <table class="table">
                    <thead >
                        <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Item name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <!-- <th scope="col">Total</th> -->
                        </tr>
                    </thead>
                    <tbody >
                        <?php

                        $total=0;
                            if(isset($_SESSION['cart']))
                            {
                                foreach($_SESSION['cart']as $key => $value)
                                {
                                    $sr=$key+1;
                                    $total=$total+$value['Price'];
                                    echo "
                                        <tr>
                                            <td>$sr</td>
                                            <td>$value[Item_name]</td>
                                            <td>$value[Price] <input type='hidden' class='iprice' value='$value[Price]'></td>
                                            <td><input class='iquantity' type='number'onchange='subTotal' value='$value[Quantity]' min='1' max='10'></td>
                                            
                                            <td>
                                                <form action='manage_cart.php' method='POST'>
                                                    <button class='btn-r' name='Remove_Item'>Remove</button></td>
                                                    <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                                </form>
                                            </td>
                                        </tr>";
                                }
                            }
                        ?>
                    </tbody>   
                </table>
                <h4> Grand Total: ₹<?php  echo $total;?></h4>
                <form action="purchase.php" >
                    <button class="btn">Make Purchase</button>
                </form>
            </div>
        </div>
    </div>
    <script>

        // var iprice=parseInt(document.getElementById("Price").value);
        // var iquantity=parseInt(document.getElementById("Quantity").value);
        // var itotal=parseInt(document.getElementById("itotal").value);
        
        // function subTotal(){
        //     for(i=0;i<iprice.length;i++)
        //     {
        //         itotal[i].innertext=(iprice[i].value)*(iquamtity[i].value);
        //     }
        // }
        // subTotal();
    </script>
</body>
</html>

