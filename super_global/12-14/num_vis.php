<?php
session_start();

$counterFile = 'visitors.txt';

if (!file_exists($counterFile)) {

    file_put_contents($counterFile, 0);

}


if (!isset($_SESSION['visited'])) {

    $_SESSION['visited'] = true;

    $count = (int) file_get_contents($counterFile);

    $count++;

    file_put_contents($counterFile, $count);
} 


else {

    $count = (int) file_get_contents($counterFile);
    
}


?>








<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>

    <h2>num of visitors: <?php echo $count; ?></h2>

</body>

</html>