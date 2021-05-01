<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="resources/style.css">
  <title>Validating...</title>
</head>

<body>

  <?php

    //declare / init vars
    $cc = str_split($_POST["cardnumber"]);    // card number into array
    $len = strlen($_POST["cardnumber"]);      // length of card in digits
    $sum = 0;           // init sums
    $p = $len % 2;                            // is card even or odd?

    for ($i = $len - 1; $i >= 0; $i--) {
      $digit = $cc[$i];
      if ($i % 2 == $p) {
        $digit *= 2;
        //double digit and if a double digit split and add each digit
        if ($digit > 9) {
          $digit = str_split($digit);
          $sum += $digit[0];
          $sum += $digit[1];
        } else {
          $sum += $digit;
        }
      } else {
        $sum += $digit;
      }
    }
    if ($sum % 10 == 0) {
      echo "<h1> Payment process approved! :) </h1>";
      header("Refresh:0; url=pickRL.php", true, 303);
    } else {
      echo "<h1> Unable to process payment... Please try again. </h1>";
      header("Refresh:1; url=paynow.html", true, 303);
    }
  ?>

</body>

</html>