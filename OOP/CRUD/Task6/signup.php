<?php


require 'config.php';


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <script src="validation.js"></script>
</head>

<body class="container mt-4">

    <h1>Signup</h1>
    <br>
    <form method="post" action="signup_process.php" onsubmit="return validateSignup()">

        <input class="form-control mb-2" name="name" id="name" placeholder="Full Name" required>


        <input class="form-control mb-2" name="email" id="email" placeholder="Email" required>


        <input class="form-control mb-2" name="mobile" id="mobile" placeholder="Mobile" required>

        <input class="form-control mb-2" type="date" name="dob" id="dob" required>



        <input class="form-control mb-2" type="password" name="password" id="password" placeholder="Password" required>

        <input class="form-control mb-2" type="password" id="confirm" placeholder="Confirm Password" required>



        <!-- <button class="btn btn-primary">Sign upp</button> -->
        <input type="submit" name="submit" value="submit">

    </form>




</body>

</html>