<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/styles.css">
    <title>Book Flight</title>
</head>
<body>

    <div>

        <h3>Flights</h3>
        <form action="addToCart.php" method="POST">
            <?php include 'displayFlights.php'; ?>
            <input type="submit" value="Add to Cart">
        </form>

    </div>
    
</body>
</html>