<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="resources/style.css">
    <title>User Search</title>
</head>
<body>

    <div id="userForm">
        <h2>User Search</h2>
        <p> Type your username to look at past purchases </p><br>
        <form action="users.php" method="POST">
            <input type="text" name="username"><br><br>
            <input type="submit" class="button" value="Search for User">
        </form><br>
        <a href="index.html"><input type="button" class="button" id="btn1" value="Home"></a><br>
    
    </div>
</body>
</html>