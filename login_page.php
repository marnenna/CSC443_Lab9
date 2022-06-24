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