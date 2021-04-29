<?php 
    
    // will show everything in your cart from the 'cart' DB           
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "amustafa3";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT id, item, price FROM cart";
    $result=$conn->query($sql);

    // constant values 
    $flights=array("A1", "A2", "A3", "A4", "B1", "B2", "B3", "B4", "C1", "C2", "C3", "C4","D1", "D2", "D3", "D4");
    $parking=array("VIP", "Premium", "Super", "General");

    if ( $result->num_rows > 0) {

        // output data of each row
        while($row = $result->fetch_assoc()) {

            $item=$row["item"];
            $price=$row["price"];
            $id=$row["id"];
              
            if( in_array($item,$parking) ){
                echo "<tr class="."cart-item"."><td>".$item." Parking </td><td>$".$price."</td><td><input name="."itemNum[]"." value=".$id." type="."checkbox"."></td></tr>";
            }
            else{
                echo "<tr class="."cart-item"."><td>".$item." Flight Ticket</td><td>$".$price."</td><td><input name="."itemNum[]"." value=".$id." type="."checkbox"."></td></tr>";
            }
        }
    }
    else {
        echo "Cart Empty";
    }
?>