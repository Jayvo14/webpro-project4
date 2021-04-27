<?php

    // so u dont have to rewrite everything over and over again
    $servername = "localhost";
    $username = "amustafa3";
    $password = "amustafa3";
    $dbname = "amustafa3";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT seatNum, price, available FROM flights";
    $result=$conn->query($sql);

    if ($result->num_rows > 0) {

        // output data of each row
        while($row = $result->fetch_assoc()) {
            $seatNum=$row["seatNum"];
            $price=$row["price"];
            $available=$row["available"];

            if( $row["available"] == 1 ){
                $available = TRUE;
            }
            else{
                $available = FALSE;
            }

            echo '<p> '.$seatNum.' - $'.$price.' <input name="seat" value="'.$seatNum.'_'.$price.'_'.$available.'" type="radio"> </p>';
                
        }
    } else {
        echo "0 results";
    }

    $conn->close();
?>  