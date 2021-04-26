<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
<title>Assignment Demo</title>
	<style>
	table {
   border: 1px solid black;
	border-collapse: collapse;
}

th, td {
	border: 1px solid black;
    text-align: center;
    padding: 8px;
}
tr:nth-child(even){background-color: #a0a0a0}
tr:nth-child(odd){background-color: #ffffff}
tr:nth-child(1){font-weight: bold;}
	</style>
</head>

<body>

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

$sql = "SELECT artist, name, genre, rdate FROM albums";
$result = $conn->query($sql);
echo "<h3>Albums</h3>";
if ($result->num_rows > 0) {
     // output data of each row
	echo "<table><tr><th>Artist</th><th>Name</th><th>Genre</th><th>Release Date</th></tr>";
     while($row = $result->fetch_assoc()) {
		 $art=$row["artist"];
		 $name=$row["name"];
		 $genre=$row["genre"];
		 $rdate=$row["rdate"];


         echo "<tr><td>".$art."</td><td>".$name."</td><td>".$genre."</td><td>".$rdate."</td></tr>";
     }
	 echo "</table>";
} else {
     echo "0 results";
}

$sql = "SELECT name FROM artists";
$result = $conn->query($sql);
echo "<h3>Artists</h3>";
if ($result->num_rows > 0) {
     // output data of each row
	echo "<table><tr><th>Artist</th></tr>";
     while($row = $result->fetch_assoc()) {

		 $name=$row["name"];
         echo "<tr><td>".$name."</td></tr>";
     }
	 echo "</table>";
} else {
     echo "0 results";
}


$conn->close();
?>  

	<div>
	<a href="addArtist.php"><input type="button" id="btn1" value="Add new Artist"></a>
	<a href="addAlbum.php"><input type="button" id="btn1" value="Add new Album"></a>
	<a href="login.php"><input type="button" id="btn1" onclick="addA.php" value="Logout"></a>
	</div>
</body>

</html>