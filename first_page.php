<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            session_start();
            echo "<html>";

            $_SESSION["myLogin"] = "myWebsite";
            echo "A value saved in the session named as myLogin.<br>";

            $_SESSION["myColor"] = "Blue";
            echo "A value saved in the session named as myColor.<br>";

            echo "Click <a href=next_page.php>Next Page</a>"." to retrieve the values.<br>";

            echo "</html><br>";
    ?>
</body>
</html>