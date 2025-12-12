
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        .mytable {

            border: 1px solid black;
        }

        td {
            border: 1px solid black;
        }
    </style>


</head>



<body>




    <?php

    $prices = array(

        "A" => "1000$",
        "B" => "1200$",
        "C" => "1400$",

    );






    $table = "<table class=\"mytable\">";

    foreach ($prices as $key => $value) {

        $table .= "<tr>";

        $table .= "<td>Salary of Mr." . $key . " is </td>";
        $table .= "<td>" . $value . "</td>";


        $table .= "</tr>";

    }

    $table .= "</table>";

    print ("" . $table . "");

    echo "<br><br>";


    //last modified 
    $myfile = fopen("php-basfilename.php", "r") or die("Unable to open file!");

    $timestamp = filemtime($myfile);


    if ($timestamp !== false) {
        $formatted_date = date("F d Y H:i:s.", $timestamp);

        echo "Last modified: " . $formatted_date;

    } else {
        echo "Could not get modification time for the file.";
    }


    // fclose($myfile);


    echo "<br><br>";


    //number of lines
    $myfile = fopen("test.txt", "r") or die("Unable to open file!");

    $i = 0;
    while (!feof($myfile)) {
        fgets($myfile);
        $i++;

    }
    echo "Number of lines is " . $i . "<br>";


    echo "<br><br>";












    ?>






</body>

</html>