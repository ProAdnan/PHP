<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <form action="" method="post">


        Name: <input type="text" name="name">

        <input type="submit" value="submit">

    </form>




    <?php

    $name = isset($_POST["name"]) ? $_POST["name"] : "";

    echo "<br>" . $name . "";


   



    ?>


</body>

</html>