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
    $i = 0;

    echo '<div class="col" class="row">';
    echo '<p id="identP">Your parking zone</p>';

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

            // if there are no more spots left
            if( !$spots ){
                echo '<p> '.$section.' - SOLD OUT </p>';
            }
            else{

                // preselect general parking
                if( $i == 3 ){
                    echo '<p> '.$section.' - $'.$price.' <input name="seat" value="'.$section.'_'.$price.'_'.$spots.'" type="radio" checked="checked"> </p>';
                }
                else{
                    echo '<p> '.$section.' - $'.$price.' <input name="seat" value="'.$section.'_'.$price.'_'.$spots.'" type="radio"> </p>';
                }
            }
            $i++; 
        }
    } else {
        echo "ayy lmao";
    }
    echo '</div>';

    $conn->close();
?>  
<div class="col">
    <p id="identP">Your parking Time Period</p>
    <select name="time" id="time">
        <option value="12am-2am">12am-2am</option>
        <option value="2am-4am">2am-4am</option>
        <option value="4am-6am">4am-6am</option>
        <option value="6am-8am">6am-8am</option>
        <option value="8am-10am">8am-10am</option>
        <option value="10am-12pm">10am-12pm</option>
        <option value="12pm-2pm">12pm-2pm</option>
        <option value="2pm-4pm">2pm-4pm</option>
        <option value="4pm-6pm">4pm-6pm</option>
        <option value="6pm-8pm">6pm-8pm</option>
        <option value="8pm-10pm">8pm-10pm</option>
        <option value="10pm-12am">10pm-12am</option>
    </select>
</div>