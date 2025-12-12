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

    $year = 2013;

    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {

        echo "This year is a leap year";
    } else {
        echo "This year is not a leap year";
    }



    echo "<br><br>";



    echo "2)<br>";

    $temp = 27;

    if ($temp < 20) {
        echo "winter";
    } else {
        echo "summer";
    }



    echo "<br><br>";



    echo "3)<br>";

    $a = 2;
    $b = 2;

    if ($a == $b) {
        $result = ($a + $b) * 3;
    } else {
        $result = $a + $b;
    }

    echo $result;



    echo "<br><br>";



    echo "4)<br>";

    $a = 10;
    $b = 10;

    if ($a + $b == 30) {
        echo $a + $b;
    } else {
        echo "false";
    }



    echo "<br><br>";



    echo "5)<br>";

    $num = 20;

    if ($num % 3 == 0) {
        echo "true";
    } else {
        echo "false";
    }



    echo "<br><br>";



    echo "6)<br>";

    $num = 50;

    if ($num >= 20 && $num <= 50) {
        echo "true";
    } else {
        echo "false";
    }



    echo "<br><br>";



    echo "7)<br>";

    $a = 1;
    $b = 5;
    $c = 9;

    $max = $a;

    if ($b > $max) {
        $max = $b;
    }
    if ($c > $max) {
        $max = $c;
    }

    echo $max;

    //or array way (for loop)
    



    echo "<br><br>";



    echo "8)<br>";


    $units = 275;
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 2.5;
    } else if ($units <= 150) {
        $bill = (50 * 2.5) + (($units - 50) * 5);
    } else if ($units <= 250) {
        $bill = (50 * 2.5) + (100 * 5) + (($units - 150) * 6.2);
    } else {
        $bill = (50 * 2.5) + (100 * 5) + (100 * 6.2) + (($units - 250) * 7.5);
    }

    echo $bill;


    echo "<br><br>";



    echo "9)<br>";

    $a = 10;
    $b = 5;
    $op = "*"; // + - * /
    


    switch ($op) {

        case "+":
            echo $a + $b;
            break;
        case "-":
            echo $a - $b;
            break;
        case "*":
            echo $a * $b;
            break;
        case "/":
            echo $a / $b;
            break;

            default:
            echo "incorrect op";

    }

   

    echo "<br><br>";



    echo "10)<br>";

    $age = 15;

    if ($age >= 18) {
        echo "is eligible to vote";
    }
    
    else {
        echo "is no eligible to vote";
    }



    echo "<br><br>";



    echo "11)<br>";

    $num = -60;

    if ($num > 0) {
        echo "Positive";
    } else if ($num < 0) {
        echo "Negative";
    } else {
        echo "Zero";
    }



    echo "<br><br>";



    echo "12)<br>";


    $scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
    $sum = 0;

    for ($i = 0; $i < count($scores); $i++) {
        $sum += $scores[$i];
    }

    $avg = $sum / count($scores);

    if ($avg < 60) {
        echo "F";
    } else if ($avg < 70) {
        echo "D";
    } else if ($avg < 80) {
        echo "C";
    } else if ($avg < 90) {
        echo "B";
    } else {
        echo "A";
    }


    echo "<br><br>";








    ?>





</body>

</html>