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

            $sid = session_id();
            echo "Session ID returned by session_id(): ".$sid."\n </br>";
            $sid = SID;
            echo "Session ID returned by SID: ".$sid."\n";

            $myLogin = $_SESSION["myLogin"];
            echo "Value of MyLogin has been retrieved: " .$myLogin."\n </br>";

            $myColor = $_SESSION["myColor"];
            echo "Value of MyColor has been retrieved: ".$myColor."\n";

            echo "</html>\n";
    ?>
</body>
</html>