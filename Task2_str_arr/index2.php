<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>





    <?php


    $colors = ["red", "green", "white"];

    echo "1)";

    $p = "The memory of that scene for me is like a frame
     of film forever frozen at that moment: the " . $colors[0] . " carpet,
      the " . $colors[1] . " lawn, the " . $colors[2] . " house, the leaden sky.
       The new president and his first lady. - Richard M. Nixon";

    echo $p;


    echo "<br><br>";

    echo "2)";

    $list = "<ul>";
    foreach ($colors as $key) {

        $list .= "<li>" . $key . "</li>";

    }

    $list .= "</ul>";

    echo $list;



    echo "<br><br>";



    echo "3) <br>";
    $cities = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid");

    ksort($cities);

    foreach ($cities as $key => $value) {

        echo "The capital of " . $key . " is " . $value . "<br>";


    }



    echo "<br><br>";



    echo "4) <br>";


    $color2 = array(4 => 'white', 6 => 'green', 11 => 'red');

    foreach ($color2 as $key => $value) {

        if ($key == 4) {
            echo $value;
        }

    }



    echo "<br><br>";



    echo "5) <br>";

    $numbers = [1, 2, 3, 4];

    $new_item = "$";

    array_splice($numbers, 2, 0, $new_item);

    echo "<pre>";

    var_dump($numbers);

    echo "</pre>";



    echo "<br><br>";



    echo "6) <br>";

    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

    asort($fruits);

    foreach ($fruits as $key => $value) {

        echo $key . "=" . $value . "<br>";
    }


    echo "<br><br>";



    echo "7) <br>";

    $temps = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

    $ave = 0;

    $lenth = 0;

    foreach ($temps as $key) {

        $ave += $key;
        $lenth++;
    }

    $result = $ave / $lenth;

    echo "Average Temperature is: " . $result;

    echo "<br>";

    sort($temps); //lowest
    
    echo "The 5 lowest values is :";
    for ($i = 0; $i < 5; $i++) {
        echo $temps[$i] . ",";
    }

    echo "<br>";
    rsort($temps);//highest
    
    echo "The 5 Highest values is :";
    for ($i = 0; $i < 5; $i++) {
        echo $temps[$i] . ",";
    }




    echo "<br><br>";



    echo "8) <br>";



    // $array1 = array("color" => "red", 2, 4);
    // $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    

    // foreach($array1 as $key => $value) {
    




    // }
    


    echo "<br><br>";



    echo "9) <br>";



    $colors3 = array("red", "blue", "white", "yellow");

    for ($i = 0; $i < count($colors3); $i++) {
        $colors3[$i] = strtoupper($colors3[$i]);


    }

    print_r($colors3);




    echo "<br><br>";



    echo "10) <br>";



    $colors3 = array("RED", "BLUE", "WHITE", "YELLOW");

    for ($i = 0; $i < count($colors3); $i++) {
        $colors3[$i] = strtolower($colors3[$i]);


    }

    print_r($colors3);



    echo "<br><br>";



    echo "11) <br>";


    for ($i = 200; $i < 250; $i++) {

        if ($i % 4 == 0) {

            echo $i . " ,";
        }


    }




    echo "<br><br>";



    echo "12) <br>";


    $words = array("abcd", "abc", "de", "hjjj", "g", "wer");


    for ($i = 0; $i < count($words); $i++) {

        $min = strlen($words[0]);

        if ($min > strlen($words[$i + 1])) {

            $min = strlen($words[$i + 1]);


        }



    }

    echo $min;




    echo "<br><br>";



    echo "13) <br>";


    for ($i = 0; $i < 10; $i++) {
        echo rand(11, 20) . ", ";
    }


    echo "<br><br>";



    echo "14) <br>";

    $array_of_nums = array(2, 0, 10, 12, 6);


    sort($array_of_nums);

    foreach ($array_of_nums as $key) {

        if ($key == 0) {

            continue;

        }else{
            echo $key;
            break;
        }

    }






    ?>

</body>

</html>