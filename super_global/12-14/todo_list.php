<?php

session_start();

$task = isset($_POST["task"]) ? $_POST["task"] : 'err' ;


echo "<h1>To Do list:</h1>";

$_SESSION[$task] = $task;

$i = 0;
foreach ($_SESSION as $key) {

    $i++;
    echo $i . ") " . $key . " <br>";

}


echo "<br>";

$timestamp = $_SERVER['REQUEST_TIME'];
echo date('Y/m/d H:i:s', $timestamp) . "<br>";




?>

<a href="todo.php">add more</a>


<a href="delete_list.php">Delete list</a>