<?php

require_once 'config.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('Invalid employee ID');
}


$id = (int) $_GET['id'];


$db = Config::getInstance();


$db->delete_user($id);
$id=0;


header('Location: index.php');

?>