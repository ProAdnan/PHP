<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>





    <?php

    echo "1)";

    $name = "adnan basem abu othman";
    $name = strtoupper($name);
    echo $name . "<br>";
    $name = strtolower($name);
    echo $name . "<br>";



    $name = strtoupper(substr($name, 0, 1)) . substr($name, 1);
    echo $name . "<br>";
    //or ucfirst("hello world!");
    

    // $new=explode(" ", $name);
    
    // foreach ($new as $key) {
    
    //    strtoupper(substr($key, 0, 1)) . substr($key, 1);
    
    // }
    
    // foreach ($new as $key) {
    //     echo $key ." ";
    
    // }
    

    echo ucwords($name);



    echo "<br><br>";


    echo "2)";



    $numaric_str = '085119';

    echo chunk_split($numaric_str, 2, ":");


    echo "<br><br>";


    echo "3)";


    $normal_str = "I am a full stack developer at orange coding academy";

    if (str_contains($normal_str, "orange")) {

        echo "Word Found!";


    } else {
        echo "not  Found!";

    }


    echo "<br><br>";


    echo "4)";


    $url = "www.orange.com/index.php";

    echo strchr($url, "/");


    echo "<br><br>";


    echo "5)";

    $url2 = "info@orange.com";

    echo substr($url2, 0, strpos($url2, "@"));


    echo "<br><br>";


    echo "6)";

    echo substr($url2, strlen($url2) - 3, strlen($url2));




    echo "<br><br>";


    echo "7)";

    $chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
    $chars = str_shuffle($chars);//randomly shuffles all the characters of a string
    

    $pass = substr($chars, 0, 8);

    echo "Password:" . $pass;



    echo "<br><br>";


    echo "8)";


    $sentence = "Ahmad is Fantastic";

    echo str_ireplace(substr($sentence, 0, strpos($sentence, " ")), "Adnan", $sentence);




    echo "<br><br>";


    echo "9)";


    $first = "dragonball";
    $second = "dragonboll";

    for ($i = 0; $i < strlen($first); $i++) {

        for ($j = $i; $j < strlen($second); $j++) {

            if ($first[$i] != $second[$j]) {
                echo "First difference between two strings at position " . $i . ": \"" . $first[$i] . "\" vs \"" . $second[$j] . "\"";
                break;

            } else {

                break;
            }
        }
    }




    echo "<br><br>";


    echo "10)";


    $string99 = "Twinkle, twinkle, little star.";

    $new22 = explode(",", $string99);

    var_dump($new22);



    echo "<br><br>";


    echo "11)";




    $letter = "a";
    $code = ord($letter);
    $code = $code + 1;
    $next_letter = chr($code);

    echo "after " . $letter . " is : " . $next_letter;

    echo "<br><br>";


    echo "12)";

    $name = "Adnan Abu Othman";
    $word = " Basem";

    $index = 5;

    $new = substr($name, 0, $index);
    $new = $new . $word;

    echo $new . substr($name, $index);



    echo "<br><br>";


    echo "13)";

    $numm = "0000657022.24";

    for ($i = 0; $i < strlen($numm); $i++) {

        if ($numm[$i] == "0") {

            $numm[$i] = " ";
        }
    }

    echo trim($numm);



    echo "<br><br>";


    echo "14)";


    $part = "The quick brown fox jumps over the lazy dog";
    echo str_replace("fox", " ", $part);



    echo "<br><br>";


    echo "15)";


    $part = "The quick brown fox jumps over the lazy dog---";
    echo str_replace("-", " ", $part);


    echo "<br><br>";


    echo "16)";


    $speCha = '\"\1+2/3*2:2-3/4*3';

    for ($i = 0; $i < strlen($speCha); $i++) {
        if ((int) $speCha[$i]) {

            continue;
        } else {

            $speCha[$i] = ' ';
        }
    }

    echo $speCha;


    echo "<br><br>";


    echo "17)";

    $normalStrr = 'The quick brown fox jumps over the lazy dog';


    $newArrr = explode(' ', $normalStrr);

    for ($i = 0; $i < 5; $i++) {

        echo $newArrr[$i] . ' ';

    }



    echo "<br><br>";


    echo "18)";

    $nnn = '2,543.12';

    echo str_replace(",", "", $nnn);


    echo "<br><br>";


    echo "19) ";

    for ($i = 97; $i < 122; $i++){

        echo chr($i) . " ";


    }




    ?>








</body>

</html>