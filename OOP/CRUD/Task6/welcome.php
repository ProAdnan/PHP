<?php
require 'config.php';

if (!isset($_SESSION['user'])) {

    header("Location: login.php");

}

?>



<h2>Welcome 
    
<?= $_SESSION['user']['email']; ?>


</h2>