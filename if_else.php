<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>




    <?php

    $number = 1;

    if ($number > 0) {
        echo $number . " is Positive";
    } elseif ($number < 0) {

        echo $number . " is Negative";

    } elseif ($number == 0) {

        echo $number . "is zero";
    }

    echo "<br>";


    $num = 2;

    switch ($number) {
        case 1:
            echo "apple";
            break;


        case 2:
            echo "Banana";
            break;


        case 3:
            echo "mango";
            break;

        case 4:
            echo "dragon fruit";
            break;
    }

    echo "<br>";

    for ($i = 0; $i < 20; $i++) {

        if ($i % 2 == 0) {
            echo $i . "<br>";

        }

    }


    echo "<br><br>";

    $fav_mov = ["maze runner", "fast and fours", "hang over", "boyka", "Harry poter"];

    foreach ($fav_mov as $key) {

        echo "" . $key . ",";


    }

    echo "<br>";



    for ($i = 1; $i <= 10; $i++) {



        if ($i == 5) {
            continue;
        }

       else if ($i == 8) {
            break;

        }
        
        echo $i . ",";

    }










    ?>


</body>

</html>