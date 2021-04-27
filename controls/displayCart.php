<?php 
                // will show everything in your cart from the 'cart' DB
               
                $servername = "localhost";
                $username = "amustafa3";
                $password = "amustafa3";
                $dbname = "amustafa3";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                $sql = "SELECT id, item, price FROM cart";
                $result=$conn->query($sql);

                if ( $result->num_rows > 0) {

                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $item=$row["item"];
                        $price=$row["price"];
                        $id=$row["id"];
                        

                        echo '<p> '.$item.' - $'.$price.' <input name="itemNum[]" value="'.$id.'" type="checkbox"> </p>';
                            
                    }
                } else {
                    echo "Cart Empty";
                }
