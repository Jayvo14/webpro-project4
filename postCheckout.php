<?php 
    // this is where we will update the users info and then reset the cart after the purchase is complete
    header('Location: index.html');

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "amustafa3";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);


    // update users info



    // reset data, we empty the cart
    // this should def come after cc check is complete 
    $sql = "DELETE FROM cart";
    $result=$conn->query($sql);
?>