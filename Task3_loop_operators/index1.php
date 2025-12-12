<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php


    echo "1)<br>";

    for ($i = 1; $i <= 10; $i++) {

        if ($i < 10) {
            echo $i . "-";
        } else {
            echo $i;
        }
    }

    echo "<br><br>";



    echo "2)<br>";

    $total = 0;

    for ($i = 0; $i <= 30; $i++) {
        $total += $i;
    }

    echo $total;


    echo "<br><br>";



    echo "3)<br>";

    $letters = ["A", "B", "C", "D", "E"];

    for ($i = 0; $i < 5; $i++) {

        for ($j = 0; $j < 5; $j++) {

            if ($j < 4 - $i) {
                echo "A "; 

            } else {
                echo $letters[$i] . " "; 

            }

        }

        echo "<br>";



    }

    echo "<br><br>";



    echo "4)<br>";
    //same idea 
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {

            if ($j < 6 - $i) {
                echo "1 ";
            } else {
                echo $i . " ";
            }

        }
        echo "<br>";
    }

    echo "<br><br>";



    echo "5)<br>";

    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {

            if ($i == $j) {
                echo $i . " ";
            } else {

                echo "0 ";

            }
        }
        echo "<br>";
    }
    echo "<br><br>";



    echo "6)<br>";

    $num = 5;
    $factt = 1;

    for ($i = 1; $i <= $num; $i++) {
        $factt *= $i;
    }

    echo $factt;

    echo "<br><br>";



    echo "7)<br>";

    $first = 0;
    $second = 1;

    echo $first . ", " . $second;

    for ($i = 2; $i < 10; $i++) {

        $next = $first + $second;
        echo ", " . $next;
        $first = $second;
        $second = $next;

    }

    echo "<br><br>";



    echo "8)<br>";


    echo "<br><br>";

    $text = "Orange Coding Academy";
    $count = 0;

    for ($i = 0; $i < strlen($text); $i++) {

        if ($text[$i] == "c" || $text[$i] == "C") {

            $count++;
        }

    }

    echo $count;

    echo "9)<br>";

    echo "<table cellpadding='3px' cellspacing='0px' border='1'>";

    for ($i = 1; $i <= 6; $i++) {

        echo "<tr>";

        for ($j = 1; $j <= 5; $j++) {
            echo "<td>$i * $j = " . ($i * $j) . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";

    echo "<br><br>";



    echo "10)<br>";

    for ($i = 1; $i <= 50; $i++) {

        if ($i % 15 == 0) {
            echo "FizzBuzz ";

        } elseif ($i % 3 == 0) {
            echo "Fizz ";

        } elseif ($i % 5 == 0) {
            echo "Buzz ";

        } else {
            echo $i . " ";
        }

    }

    echo "<br><br>";



    echo "11)<br>";

    $n = 5;
    $num = 1;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {

            echo $num . " ";
            $num++;

        }

        echo "<br>";
    }

    echo "<br><br>";



    echo "12)<br>";


    $letters = ["A", "B", "C", "D", "E"];

    // upper part
    for ($i = 0; $i < 5; $i++) {
        for ($s = 0; $s < 4 - $i; $s++) {
            echo "&nbsp;&nbsp;";//non breaking space
        }

        for ($j = 0; $j <= $i; $j++) {
            echo $letters[$j] . " ";
        }

        echo "<br>";
    }

    // lower part
    for ($i = 3; $i >= 0; $i--) {
        for ($s = 0; $s < 4 - $i; $s++) {
            echo "&nbsp;&nbsp;"; //non breaking space
        }

        for ($j = 0; $j <= $i; $j++) {
            echo $letters[$j] . " ";
        }

        echo "<br>";
    }

    echo "<br><br>";






    ?>



</body>

</html>