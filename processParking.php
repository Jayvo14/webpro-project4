<?php
    //header('Location: addToCart.php');

    // need to update the availability of the seat in the flights database from 1 - 0
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "amustafa3";

    $parking = array("VIP", "Premium", "Super", "General");

    $seat = $_POST["seat"];
    $time = $_POST["time"];

    $arr = explode("_",$seat);
            
    $item = $arr[0];
    $price = $arr[1];
    $available = $arr[2];

    

    $times = array(
        "12am-2am" => 10,
        "2am-4am" => 10, //night end
        "4am-6am" => 0, //early
        "6am-8am" => 0, //early end
        "8am-10am" => 20, //normal
        "10am-12pm" => 20, 
        "12pm-2pm" => 20,
        "2pm-4pm" => 20,
        "4pm-6pm" => 20, //normal end
        "6pm-8pm" => 10, //night
        "8pm-10pm" => 10,
        "10pm-12am" => 10
    );

    $newPrice = $price + $times[$time];

   
?>