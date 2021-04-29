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
                <input id="phome" type="submit" class="button" value="Add to Cart">
                <a id="phome" href="index.html"><input type="button" class="button" id="btn1" value="Home"></a>
            </div>
        </form><br>

    </div>
    
</body>
</html>