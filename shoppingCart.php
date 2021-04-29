<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/style.css">
    <title>Shopping Cart</title>
</head>
<body>

    <div>

        <h1>Shopping Cart</h1>
        
        <!-- removes any items you want from the cart -->
        <div id="cart">
            <form action="removeFromCart.php" method="post">
                <?php include 'displayCart.php' ?>
            </form>
        </div><br>

        <div id="cart-bottom">

            <div class="col">
                <a href="index.html"><input type="button" class="button" id="btn1" value="Home"></a>
            </div><br>

            <div class="col">
                <form action="processCheckout.php" method="post">
                    <input type="submit" class="button" value="Check Out">
                </form>
            </div>
        </div>

    </div>
    
</body>
</html>