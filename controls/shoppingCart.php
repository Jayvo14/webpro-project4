<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>

    <div>

        <h3>Shopping Cart</h3>
        <p> Select any items you wish to remove from your cart </p>
        
        <!-- removes any items you want from the cart -->
        <form action="removeFromCart.php" method="post">    
            <?php include 'displayCart.php' ?>
            <input type="submit" value="Update Cart">
        </form><br>

        <!-- 
            will take you to the checkout, but also should redirect you 
            and update the availablity of the seat in your cart.
        -->
        <form action="processCheckout.php" method="post">
            <input type="submit" value="Check Out">
        </form><br>

        <a href="../index.html"><input type="button" id="btn1" value="Home"></a>

    </div>
    
</body>
</html>