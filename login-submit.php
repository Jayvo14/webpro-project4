<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="resources/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="resources/style.css">
  <title>Login!</title>
</head>

<body>


  <div id="userForm">

    <h1> Login Submission </h1>

    <?php

      if (empty($_POST["uname"]) || empty($_POST["pword"])) {
        echo "<p> Please enter a username and / or password!</p><br>";
        echo '<div> <a href="login.html" class="button"> Go back </a> </div><br>';
      } 
      else if (isset($_POST["uname"]) && isset($_POST["pword"])) {

        // so u dont have to rewrite everything over and over again
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "amustafa3";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "SELECT username, purchases FROM users";
        $result = $conn->query($sql);

        // we add username to users database, BUT check if username exists already, if so, then we say yo NO
        $userN = $_POST["uname"];
        $exists = False;

        // checks if username exists already
        if ($result->num_rows > 0) {

          // output data of each row
          while ($row = $result->fetch_assoc()) {
            $username = $row["username"];
            $purchases = $row["purchases"];

            if ($username == $userN) {
              $exists = True;
            }
          }
        } else {
          echo "User does not exist";
        }

        if ($exists) {
          // it exists so, make we can move on to next page
          echo "<p> Successfully Logged in! </p><br>";
          echo '
                  <form action="postCheckout.php" method="post">
                    <input type="hidden" name="uname" value="' . $userN . '">
                    <input type="submit" class="button" value="Complete Purchase">
                  </form><br>
                  ';
        } else {
          // username doesnt exist so we gotta be like you not in here bruh
          echo "<p>Username not found</p><br>";
          echo '<div> <a href="login.html" class="button"> Go back </a> </div><br>';
        }
      } else {
        echo "<p>Error: Please try again later.</p><br>";
        echo '<div> <a href="login.html" class="button"> Go back </a> </div><br>';
      }

    ?>
  </div>


</body>

</html>