<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Added to Cart</title>
</head>

<body>
	<div>
        <?php
            header('Location: shoppingCart.php');
            // need to manually do this annoyingly
            $servername = "localhost";
            $username = "amustafa3";
            $password = "amustafa3";
            $dbname = "amustafa3";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            $seat=$_POST["seat"];
            $arr = explode("_",$seat);
            
            $item = $arr[0];
            $price = $arr[1];
            $available = $arr[2];

            // make sure item isnt empty
            if( $item != '' ){
                $sql = "INSERT INTO cart (item, price)
                VALUES ('$item','$price')";

                $result=$conn->query($sql);
            }

            if ($conn) {
                echo $item.' '.$price;
                echo "Item added to cart succesfully!";
            }

            $conn->close();
        ?>
	    <a href="shoppingCart.php"><input type="button" id="btn1" value="Cart"></a>
	</div>
</body>

</html>