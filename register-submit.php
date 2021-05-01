<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resources/style.css">
  <title>Register!</title>
</head>

<body>

  <div id="userForm">

    <h1> Register Submission </h1>

    <?php
      if (isset($_POST["uname"]) && isset($_POST["pword"]) && isset($_POST["cpword"]) && !empty($_POST["uname"]) && !empty($_POST["pword"]) && !empty($_POST["cpword"])) {

        if ($_POST["pword"] != $_POST["cpword"]) {
          echo "<p> Error: Passwords provided do not match. </p><br>\n";
          echo '<div> <a href="register.html" class="button"> Go back </a> </div><br>';
        } else {
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
          $str = '';

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
            // it exists so, make different username bru
            echo " <p> Username already exists </p><br>";
            echo '<div> <a href="register.html" class="button"> Go back </a> </div><br>';
          } else {
            // username doesnt exist so add to database


            $sql = "INSERT INTO users 
                VALUES ('$userN','$str')";
            $result = $conn->query($sql);

            echo "<p> Successfully created account! </p><br>";

            echo '<form action="postCheckout.php" method="post">
                  <input type="hidden" name="uname" value="' . $userN . '">
                  <input type="submit" class="button" value="Complete Purchase">
                  </form>';
          }
        }
      } else {
        echo "<p> Please enter credentials! </p><br>";
        echo '<div> <a href="register.html" class="button"> Go back </a> </div><br>';
      }

    ?>

  </div>
</body>

</html>