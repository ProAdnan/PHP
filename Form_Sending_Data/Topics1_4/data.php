<?php
session_start();



//Prevent direct access
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request");
}

//sanitization (Clean the data):


//htmlspecialchars() Prevents XSS (Cross-Site Scripting (XSS) attacks) :convert special characters in a string to their respective HTML entities.

$name = htmlspecialchars(trim($_POST["name"]), ENT_QUOTES, 'UTF-8');

//ent_quotes :ensures both single and double quotes are encoded.


$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$gender = $_POST['gender'];
$country = $_POST['country'];

$role = $_POST['role'];


//is set or null

/* OR

 extract($_POST);

*/




//validation:

$errors = [];

if (empty($name)) {

    $errors[] = "Username required";

}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $errors[] = "Invalid email";

}

if (!isset($gender)) {
    $errors[] = "pls choose gender";

}

if (!isset($role)) {
    $errors[] = "pls choose role";

}

if (!isset($country)) {
    $errors[] = "pls choose country";

}



if ($errors) {

    foreach ($errors as $e) {
        echo "<p>$e</p>";

    }

} else {


    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

    $_SESSION['gender'] = $gender;
    $_SESSION['country'] = $country;

    $_SESSION['role'] = $role;

    setcookie("name", $name, time() + (86400 * 30), "./cookies/", ".ex.com", true, true); // 86400 = 1 day
    setcookie("email", $email, time() + (86400 * 30), "./cookies/", ".ex.com", true, true); // 86400 = 1 day
    setcookie("gender", $gender, time() + (86400 * 30), "./cookies/", ".ex.com", true, true); // 86400 = 1 day
    setcookie("country", $country, time() + (86400 * 30), "./cookies/", ".ex.com", true, true); // 86400 = 1 day
    setcookie("role", $role, time() + (86400 * 30), "./cookies/", ".ex.com", true, true); // 86400 = 1 day



    echo "<h3>Success</h3>";
    //echo 'My name is ' .$_ENV["name"] . '! ($_ENV)';
    // echo "<a href='profile.php'>Go to profile (settion data)</a><br>";
    // echo "<a href='dash.php'>Go to DashBoard(cookie data)</a><br";
    // echo "<br><a href='dom_example.php'>Go to Dom Ex</a>";
    // echo "<br><a href='form.php'>Go to form</a>";

    if ($_SESSION['role'] == "user") {
        header("Location: profile.php");

    } else {
        header("Location: dash.php");
    }



}


?>