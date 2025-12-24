<?php
require_once 'config.php';

$db = Config::getInstance();


$stmt = $db->selectAll();


$num = $stmt->rowCount(); 



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        .table {
            border: 1px black solid;
        }

        th {
            font-weight: bold;
            border: 1px black solid;
            padding: 5px;
        }

        td {
            border: 1px black solid;
            padding: 5px;
        }
    </style>


</head>

<body>


    <h1>manage the employees</h1>

    <h3 style="display:inline;">All Users</h3> <a href="create.php">Add User</a>


    <?php
    if ($num > 0) {

        echo "<table class=\"table\">";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID </th>";
        echo "<th>name </th>";
        echo "<th colspan=\"3'\">Actions</th>";
        echo "</tr>";

        echo "</thead>";

        echo "<tbody>";

        while ($row = $stmt->fetch()) {
            echo "<tr>";

            echo "<td>{$row['emp_id']}</td>";

            echo "<td>{$row['emp_name']}</td>";


            echo "<td><a href='view.php?id={$row['emp_id']}'>View</a></td>";
            echo "<td><a href='edit.php?id={$row['emp_id']}'>Edit</a></td>";
            echo "<td><a href='delete.php?id={$row['emp_id']}'>Delete</a></td>";

            echo "</tr>";



        }

    } else {

        echo " <br>No users found.";

        

    }

    ?>


    </tbody>





    </table>



</body>

</html>