<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login!</title>
    <link rel="shortcut icon" href="favi/lock.png" type="image/x-icon" />
    <link rel="stylesheet" href="register.css" />
  </head>
  <body class="body">
    <div class="navbar">
      <div style="margin-left: 1%; float: left">
        <a class="buttons" href="home.html">Home</a>
      </div>
      <div style="width: 90%; text-align: center">
        <h1>Submission</h1>
      </div>
      <div style="margin-right: 1%; float: right">
        <a class="buttons" href="login.html">Login</a>
      </div>
    </div>
    <div class="centerpre">

      <?php
        echo "<pre>";
            
        if(empty($_POST["uname"]) || empty($_POST["pword"])){
          echo "Please enter a username and / or password!<br>";
        }
        else if(isset($_POST["uname"]) && isset($_POST["pword"])){

          // so u dont have to rewrite everything over and over again
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "amustafa3";

          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);

          $sql = "SELECT username, purchases FROM users";
          $result=$conn->query($sql);
          
          // we add username to users database, BUT check if username exists already, if so, then we say yo NO
          $userN = $_POST["uname"];
          $exists = False;

          // checks if username exists already
          if ($result->num_rows > 0) {
        
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $username=$row["username"];
              $purchases=$row["purchases"];

              if($username==$userN){
                $exists = True;
              }
            }
          } 
          else {
            echo "User does not exist";
          }

          if( $exists ){
            // it exists so, make we can move on to next page
            echo '
                <form action="checkOut.php" method="post">
                  <input type="hidden" name="uname" value="'.$userN.'">
                  <input type="submit" class="button" value="Continue to Checkout">
                </form>
                ';
          }
          else{
            // username doesnt exist so we gotta be like you not in here bruh
            echo "Username not found";
          }

        }
        else{
          echo "Error: Please try again later.<br>";
        }

        echo "</pre>";
      ?>
    </div>


  </body>
</html>
