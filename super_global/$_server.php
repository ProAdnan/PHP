
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>











<?php


$ipaddress = $_SERVER["REMOTE_ADDR"];

echo '<br> IP Address: ' . $ipaddress . '<br>';

$_ip_for_host = $_SERVER['SERVER_ADDR'];

echo '<br>Host  IP Address: ' . $ipaddress . '<br>';






echo "The current file name : " . $_SERVER['PHP_SELF'] . "<br>";


echo " components of the URL " . $_SERVER['HTTP_REFERER'] . "<br>";
echo "(not reliable because not all user-agents support it)<br><br>";





$str="PHP Tutorial";

$new_arr=explode(" ", $str);

foreach($new_arr as $k){

    $first_char=substr($k,0,1);

    echo "<p style=\"color:red;display:inline;\">". $first_char . "</p><p style=\"display:inline;\">" . substr($k,1) . "</p> ";


}


echo " <br>  <br> ";









?>


<a href="redirect.php">redirect</a>







    
</body>
</html>







