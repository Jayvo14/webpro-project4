<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="resources/style.css">
    <title>Book Parking</title>
</head>

<body>

    <div id="parking">

        <h1>Parking</h1>
        <form action="processParking.php" method="POST">

            <div id="pimgs" class="row">

                <div class="col">
                    <img src="resources/parkingmap.png" alt="parking-zone" id="pimg1">
                </div>

                <div class="col">
                    <img src="resources/pricing.png" alt="parking-prices" id="pimg2">
                </div>

            </div>

            <div class="row">
                <?php include 'displayParking.php'; ?>
            </div>

            <br><br>
            <div id="paddTC" class="row">
                <a id="phome" href="index.html"><input type="button" class="button" id="btn1" value="Home"></a>
                <input id="phome" type="submit" class="button" value="Add to Cart">
            </div>
        </form><br>

    </div>

</body>

</html>