<?php
    header('Location: checkOut.php');

    // need to update the availability of the seat in the flights database from 1 - 0
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "amustafa3";

    $parking = array("VIP", "Premium", "Super", "General");

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT id, item, price FROM cart";
    $result=$conn->query($sql);

    // first we get the id of everything in the cart, and add it to array
    $items = array();// array where we push all the ids 
    if ( $result->num_rows > 0) {

        // output data of each row
        while($row = $result->fetch_assoc()) {

            $item=$row["item"];
            $price=$row["price"];
            $id=$row["id"];
                        
            array_push($items, $item);
        }
    }

    // now we go change the availibility in the flights db with same SeatNum(flights) && item(cart)
    foreach( $items as $key => $value ){
        echo $value;

        if( in_array($value, $parking) ){
            $sql = "UPDATE parking 
            SET spots = (spots - 1) 
            WHERE section = '$value'";
            $result=$conn->query($sql);
        }else{
            $sql = "UPDATE flights 
            SET available = 0 
            WHERE seatNum = '$value'";
            $result=$conn->query($sql);
        }
    }

?>