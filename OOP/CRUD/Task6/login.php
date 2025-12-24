<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">


    <h2>Login</h2>

    <form method="post" action="login_process.php">

        <input class="form-control mb-2" name="email" placeholder="Email" required>
        <input class="form-control mb-2" type="password" name="password" placeholder="Password" required>

        <button class="btn btn-success">Login</button>
        
    </form>




</body>

</html>