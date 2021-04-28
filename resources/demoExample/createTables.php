<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Assignment Demo</title>
</head>

<body>
You have successfully logged in
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
/*
$sql = "drop TABLE albums";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error dropping album table: ";
}

$sql = "drop TABLE artists";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error dropping artists table: ";
}
*/
$sql = "CREATE TABLE albums (artist VARCHAR(20), name VARCHAR(50), genre VARCHAR(20), rdate INT(4))";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
}

$sql = "CREATE TABLE artists (name VARCHAR(50))";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
}

$conn->close();
?>  

	<div>
	<a href="displayTable.php"><input type="button" id="btn1"  value="OK"></a>
	<a href="login.php"><input type="button" id="btn1" onclick="addA.php" value="Logout"></a>
	</div>
</body>

</html>