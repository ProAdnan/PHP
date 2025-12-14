<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <form action="" method="post">
        name:
        <input type="text" name="name">




        <input type="submit" value="submit">
    </form>



    <?php

    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        echo "The Deta are sent using " . $_SERVER["REQUEST_METHOD"];

    }
     else if ($_SERVER["REQUEST_METHOD"] == "POST") {

        echo "The Deta are sent using " . $_SERVER["REQUEST_METHOD"];


    }



    ?>



</body>

</html>