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

            $queryString = $_SERVER["QUERY_STRING"];
            echo "Querey string of the incoming URL: ".$queryString."\n";

            foreach ($_COOKIE as $name => $value){
                echo "$name = $value \n </br>";
            }

            echo "Cookies received:\n </br>";

            /*$sid = session_id();
            echo "Session ID returned by session_id(): ".$sid."\n </br>";
            $sid = SID;
            echo "Session ID returned by SID: ".$sid."\n </br>";*/

            $myLogin = $_SESSION["myLogin"];
            echo "Value of MyLogin has been retrieved: ".$myLogin."\n </br>";

            $myColor = $_SESSION["myColor"];
            echo "Value of MyColor has been retrieved: ".$myColor."\n";

            echo "</html>\n";
    ?>

    <?php
        session_start();

        $_SESSION = array();

        if(isset($_COOKIE[session_name()])){
            setcookie(session_name(), '', time()-42000, '/');
        }

        session_destroy();

        echo "<html>";
        echo "Thank you for visiting MyWebsite.com.<br>";
        echo "<a href=login.php>Login Again.</a><br>";
        echo "</html><br>";
    ?>

</body>
</html>