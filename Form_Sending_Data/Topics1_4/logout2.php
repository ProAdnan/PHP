<?php

setcookie("name", "", time() - 3600, "./cookies/", ".ex.com", true, true);
setcookie("email", "", time() - 3600, "./cookies/", ".ex.com", true, true);

setcookie("gender", "", time() - 3600, "./cookies/", ".ex.com", true, true);

setcookie("country", "", time() - 3600, "./cookies/", ".ex.com", true, true);
setcookie("role", "", time() - 3600, "./cookies/", ".ex.com", true, true);


header("Location: index.php");

?>