<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="resources/style.css">
    <title>Book Flight</title>
</head>
<body>

    <br><h1 id="ftitle"> Flight 994 <br> ATL-NYC </h1><br>
    <img src="resources/flight.PNG" alt="seat-map" id="fimg" >

    <div id="flights">
        <form action="addToCart.php" method="POST">
            <section class="grid">
                <?php include 'displayFlights.php'; ?>
            </section><br>
            <div id="faddTC" class="row">
                <a id="fhome" href="index.html"><input type="button" class="button" id="btn1" value="Home"></a>
                <input id="fhome" type="submit" class="button" value="Add to Cart">
            </div>
        </form><br>


    </div>
    
</body>
</html>