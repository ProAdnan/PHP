<?php


session_start();



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

    <h2>Welcome <?php echo $_SESSION['name'] . " you are " . $_SESSION["role"]; ?></h2>



    <p>Email: <?php echo $_SESSION['email']; ?></p> <br>

    <p>Gender: <?php echo $_SESSION['gender']; ?></p><br>

    <p>Country: <?php echo $_SESSION['country']; ?></p><br>



    <a href="logout.php">Logout</a>


</body>

</html>