<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/style.css">
    <title>User Info</title>
</head>
<body>

    <div id="userForm">

        
        <?php   
            
            $flights=array("A1", "A2", "A3", "A4", "B1", "B2", "B3", "B4", "C1", "C2", "C3", "C4","D1", "D2", "D3", "D4");
            $parking=array("VIP", "Premium", "Super", "General");

            // so u dont have to rewrite everything over and over again
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "amustafa3";
        
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
        
            $uName=$_POST["username"];
           
            
                        
            $sql = "SELECT username, purchases FROM users"; 

            $found=False;
            
            
            $result=$conn->query($sql);
            
            
        
            if ($result->num_rows > 0) {
        
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $username=$row["username"];
                    $purchases=$row["purchases"];

                    if($username==$uName){
        
                        $array=explode(",",$purchases);
                        $found=True;
                        echo "<h1> " .$uName."'s Past Purchases </h1> <br> ";
                    
            
                        foreach($array as $key => $value){
                            if(in_array($value,$parking)){
                            echo "<p>  ".$value." Parking  </p>" ;
                            }
                            else if(in_array($value,$flights)){
                                echo "<p>  ".$value." Flight Ticket  </p>" ;
                            }
                            echo '<hr>';
                        }
                    }
                        
                }
            
            } 
            else {
                echo "User does not exist";
            }
            if(!$found){
                echo "<h2> User does not exist </h2>";
                echo "<br>";
            }
        
            $conn->close();
        ?>    
        
        <br><br> <a href="index.html"><input type="button" class="button" id="btn1" value="Home"></a>
    </div>
    
</body>
</html>