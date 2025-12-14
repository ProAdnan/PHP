<?php





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

 <?php echo "profile for users"; ?>

    <h2>Welcome <?php echo $_COOKIE['name'] . " you are " . $_COOKIE['role'] ?></h2>



    <p>Email: <?php echo $_COOKIE['email']; ?></p> <br>

    <p>Gender: <?php echo $_COOKIE['gender']; ?></p><br>

    <p>Country: <?php echo $_COOKIE['country']; ?></p><br>



    <a href="logout2.php">Logout</a>


</body>

</html>