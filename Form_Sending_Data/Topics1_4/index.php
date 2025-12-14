<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="data.php" method="post">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <?php if (!empty($name_err)) {

            echo '' . $name_err . '';

        }
        ;


        ?>

        <br><br>


        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <?php if (!empty($email_err)) {

            echo '' . $email_err . '';

        }
        ; ?>
        <br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="gender" value="male">Male
        <input type="radio" name="gender" id="gender" value="female">Female
        <?php if (!empty($gender_err)) {

            echo '' . $gender_err . '';

        }
        ; ?>
        <br><br>

        <label for="country">Your Country:</label>
        <select name="country" id="country" required>


            <option value="jordan" selected>Jordan</option>
            <option value="lebanon">Lebanon</option>
            <option value="iraq">Iraq</option>

        </select>

        <br><br>

        <input type="radio" name="role" id="role" value="user">user
        <input type="radio" name="role" id="role" value="admin">admin


        <input type="submit" value="submit">



    </form>


    <a href="upload.php">Upload Image</a>





</body>

</html>