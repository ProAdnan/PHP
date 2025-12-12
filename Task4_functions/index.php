<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>




    <?php

    echo "1) <br>";


    function is_prime($number)
    {

        if ($number <= 1)
            return " is not a prime";

        for ($i = 2; $i < $number; $i++) {
            if ($number % $i == 0)
                return " is not a prime";
        }

        return " is a prime";

    }
    $num = 7;

    echo $num . is_prime($num);




    echo "<br><br>";


    echo "2) <br>";


    function reverse_str($name)
    {
        $result = " ";

        for ($i = strlen($name) - 1; $i >= 0; $i--) {

            $result .= $name[$i];


        }

        return $result;

    }
    $name = "Adnan";

    echo reverse_str($name);



    echo "<br><br>";

    echo "3) <br>";


    function check_all_lower($name)
    {

        for ($i = 0; $i <= strlen($name) - 1; $i++) {

            if ($name[$i] != strtolower($name[$i])) {
                return "Your String is not ok";
                break;
            } else {

                continue;
            }


        }

        return "Your String is ok";

    }

    $name2 = "Ahmad";

    echo check_all_lower($name2);




    echo "<br><br>";

    echo "4) <br>";


    function swap($num1, $num2)
    {

        $hold = $num1;

        $num1 = $num2;

        $num2 = $hold;

        return "After: <br> Num1: " . $num1 . ", Num2: " . $num2 . "<br>";

    }

    $num1 = 10;
    $num2 = 5;

    echo "Before:<br> Num1: " . $num1 . ", Num2: " . $num2 . "<br>";

    echo swap($num1, $num2);




    echo "<br><br>";

    echo "6) <br>";


    function check_Armstrong($num)
    {

        $sum = 0;

        for ($i = 0; $i < strlen($num); $i++) {

            $sum += (int) $num[$i] ** 3;

        }

        if ($sum != $num) {
            return $num . " is not Armstrong";
        } else {
            return $num . " is  Armstrong";
        }


    }

    $numm = "407";

    echo check_Armstrong($numm);






    echo "<br><br>";

    echo "7) <br>";


    function check_palindrome($sentence)
    {


        $j = strlen($sentence) - 1;

        for ($i = 0; $i <= strlen($sentence) - 1; $i++) {

            if ($sentence[$i] != $sentence[$j]) {

                return "no it is not a palindrome ";

            }


            $j--;


        }

        return "Yes it is a palindrome ";






    }

    $sentence = "abba";
    echo check_palindrome($sentence);




    echo "<br><br>";

    echo "8) <br>";


    function remove_duplicates($arr)
    {

        $new_arr = array();

        foreach ($arr as $key) {

            if (!in_array($key, $new_arr)) {

                array_push($new_arr, $key);

            } else {
                continue;
                
            }

        }

        return $new_arr;


    }




    $array100 = array(2, 4, 7, 4, 8, 4);

    echo "<pre>";
    print_r(remove_duplicates($array100));
    echo "</pre>";


    echo "<br><br>";




    ?>


</body>

</html>