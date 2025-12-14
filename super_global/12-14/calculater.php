<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">

        enter num1:<input type="number" name="num1">
        enter num2:<input type="number" name="num2">

        <input type="radio" name="ope" value="+">+
        <input type="radio" name="ope" value="-">-

        <input type="radio" name="ope" value="*">*

        <input type="radio" name="ope" value="/">/


        <input type="submit" value="calculate">

    </form>



    <?php
    $name = isset($_POST["name"]) ? $_POST["name"] : "";


    $num1 = isset($_POST["num1"]) ? $_POST["num1"] : "";

    $num2 = isset($_POST["num2"]) ? $_POST["num2"] : "";

    $operation = isset($_POST["ope"]) ? $_POST["ope"] : "";



    $result = 0;
    switch ($operation) {

        case "+":
            $result = $num1 + $num2;
            break;

        case "-":
            $result = $num1 - $num2;
            break;

        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = $num1 / $num2;
            break;


    }


    if ($result != 0) {
        echo "Result: " . $num1 . " " . $operation . " " . $num2 . "= " . $result;

    }


    ?>



</body>

</html>