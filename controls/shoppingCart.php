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

        <h3>Cart</h3>
        <form action="controls/checkOut.php" method="post">
            
            <?php 
                // will show everything in your cart from the 'cart' DB
               
                $servername = "localhost";
                $username = "amustafa3";
                $password = "amustafa3";
                $dbname = "amustafa3";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                $sql = "SELECT seatNum, price FROM cart";
                $result=$conn->query($sql);

                if ( $result->num_rows > 0) {

                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $seatNum=$row["seatNum"];
                        $price=$row["price"];
                        $available=$row["available"];

                        if( $row["available"] == 1 ){
                            $available = "Yes";
                        }
                        else{
                            $available = "No";
                        }

                        echo '<p> '.$seatNum.' - $'.$price.' <input name="seat" value="'.$seatNum.'_'.$price.'" type="radio"> </p>';
                            
                    }
                } else {
                    echo "Cart Empty";
                }
            ?>


            <input type="submit" value="Check Out">
        </form>

    </div>
    
</body>
</html>