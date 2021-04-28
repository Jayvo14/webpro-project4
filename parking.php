<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/style.css">
    <title>Book Parking</title>
</head>
<body>

    <div>

        <h2>Parking</h2>
        <form action="addToCart.php" method="POST">
            <?php  include 'displayParking.php'; ?>
            <input type="submit" class="button" value="Add to Cart">
        </form><br>

        <a href="index.html"><input type="button" class="button" id="btn1" value="Home"></a>

    </div>
    
</body>
</html>