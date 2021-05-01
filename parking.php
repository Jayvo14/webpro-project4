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

    <div id="parking">

        <h1>Parking</h1>
        <form action="processParking.php" method="POST">

            <div id="pimgs" class="row">
                <!-- This is where the parking zone image and parking period table image will go
                <img class="col" src="" alt="parking-zone" id="pimg" >
                <img class="col" src="" alt="time-table" id="pimg" >
                -->
            </div>

            <?php  include 'displayParking.php'; ?>
            
            <br>
            <div id="paddTC" class="row">
                <a id="phome" href="index.html"><input type="button" class="button" id="btn1" value="Home"></a>
                <input id="phome" type="submit" class="button" value="Add to Cart">
            </div>
        </form><br>

    </div>

    <div id="map">
        <img src="resources/parkingmap.png" alt="map">
    </div>

    <div id="pricing">
        <span id="identP">Pricing</span>
        <dl id="parkingprices">
            <dt>Early Bird Special</dt>
            <dd> 4am to 8am: $0</dd>
            <dt>Rush Hour Pricing</dt>
            <dd>8am to 6pm: $20</dd>
            <dt>Late Night Pricing</dt>
            <dd>6pm to 4am: $10</dd>
        </dl>
    </div>
    
</body>
</html>