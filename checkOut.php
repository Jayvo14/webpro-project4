<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/style.css">
    <title>Check Out</title>
</head>
<body>
    <h2>Check Out</h2>
    
    <p> Order is ready to be processed! </p>

    <?php 

    $uName = $_POST["uname"];

    echo '<form action="postCheckout.php" method="post">
        <input type="hidden" name="uname" value="'.$uName.'">';
    ?>
        <input type="submit" class="button" value="Complete Purchase">
    </form>
</body>
</html>