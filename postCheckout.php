<?php 
    // this is where we will update the users info and then reset the cart after the purchase is complete
    //header('Location: index.html');

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "amustafa3";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $cart = array();
    // get everything in the cart and add to array
    $sql = "SELECT id, item, price FROM cart";
    $result=$conn->query($sql);
    if ( $result->num_rows > 0) {

        // output data of each row
        while($row = $result->fetch_assoc()) {

            $item=$row["item"];
            $price=$row["price"];
            $id=$row["id"];

            // add to array cart
            array_push($cart, $item);
        }
    }

    $word = '';
    for( $i = 0; $i< count($cart); $i++ ){
        $thing = $cart[$i];
        $word .= $thing.',';
    }

    // update users info
    $userN = $_POST["uname"];
    echo $userN.'bruhhh '.$word;
    $sql = "UPDATE users 
        SET purchases = CONCAT(purchases, '$word')
        WHERE username = '$userN';";
    $result=$conn->query($sql);

    // reset data, we empty the cart
    // this should def come after cc check is complete 
    $sql = "DELETE FROM cart";
    $result=$conn->query($sql);
?>