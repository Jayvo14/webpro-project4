<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Adding Album to DB</title>
</head>

<body>
	<div>
<?php
$servername = "localhost";
$username = "amustafa3";
$password = "amustafa3";
$dbname = "amustafa3";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$artist=$_POST["artist"];
$name=$_POST["name"];
$genre=$_POST["genre"];
$rdate=$_POST["rdate"];


$sql = "INSERT INTO albums
VALUES ('$artist','$name','$genre','$rdate')";

if ($conn->query($sql) === TRUE) {
    echo "New Album successfully saved";
} else {
    echo "Error: New Album failed to be saved";
}

$conn->close();
?>
	<a href="displayTable.php"><input type="button" id="btn1" value="OK"></a>
	</div>
</body>

</html>