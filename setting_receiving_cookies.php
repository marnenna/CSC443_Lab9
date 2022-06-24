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
        setcookie("myLoginName", "MyWebsite");
        setcookie("myPreferredColor", "Blue");
        echo "<br>";
        echo "2 cookies were delivered.<br>";

        if(isset($_COOKIE["myLoginName"])){
            $loginName = $_COOKIE["myLoginName"];
            echo "Received a cookie named as LoginName: ".$loginName."<br>";
        }

        else{
            echo "Did not received any cookie named as LoginName.<br>";
        }

        $count = count($_COOKIE);
        echo "$count cookies received.<br>";

        foreach($_COOKIE as $namr => $value){
            echo "$name = $value <br>";
        }

        echo "<br>";
    ?>
</body>
</html>