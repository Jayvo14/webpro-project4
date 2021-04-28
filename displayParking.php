<?php

    // so u dont have to rewrite everything over and over again
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "amustafa3";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT section, price, spots FROM parking";
    $result=$conn->query($sql);

    if ($result->num_rows > 0) {

        // output data of each row
        while($row = $result->fetch_assoc()) {
            $section=$row["section"]; //sectiom parking
            $price=$row["price"];
            $spots=$row["spots"];

            if( $row["spots"] > 0 ){
                $spots = TRUE;
            }
            else{
                $spots = FALSE;
            }

            // if its not spots
            if( !$spots ){
                echo '<p> '.$section.' - $'.$price.' : SOLD OUT </p>';
            }
            else{
                echo '<p> '.$section.' - $'.$price.' <input name="seat" value="'.$section.'_'.$price.'_'.$spots.'" type="radio"> </p>';
            }
                
        }
    } else {
        echo "ayy lmao";
    }

    $conn->close();
?>  