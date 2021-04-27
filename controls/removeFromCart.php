<?php
header('Location: shoppingCart.php');

    // need to manually do this annoyingly
    $servername = "localhost";
    $username = "amustafa3";
    $password = "amustafa3";
    $dbname = "amustafa3";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //$sql = "SELECT id, item, price FROM cart";

    $removeArr = $_POST['itemNum'];
    if( empty($removeArr) ){
        // you didnt want to remove any of them so load next page
    }
    else{

        // delete all the items in cart that you didnt want
        for( $i=0; $i< count($removeArr); $i++ ){

            $arr = explode("_",$removeArr[$i]);
        
            print_r( $arr );

            $item=$arr[0];
        
            $sql = "DELETE FROM cart
            WHERE id = $item";

            $result=$conn->query($sql);
        }
    }
    


    $conn->close();
?>