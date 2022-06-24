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
        setcookie("myLoginName","myWebsite", "<br>");
        setcookie("myPreferredColor","Blue" , "<br>");
        setcookie("CouponNumber","07470433",time() +60*60*24*7, "</br>");
        setcookie("CouponValue","100.00",time()+60*60*24*7, "</br>");

        print("\n");
        print("2 temporary cookies were delivered.\n <br>");
        print("2 consistent cookies were delivered.\n <br>");

        if(isset($_COOKIE["myLoginName"])){
            $loginName = $_COOKIE["myLoginName"];
            print("Received a cookie named as myLoginName:".$loginName."\n <br>");
        }
        else{
            print("Did not received any cookie named as myLoginName.\n <br>");
        }

        $count = count($_COOKIE);
        print("$count cookies received.\n <br>");
        foreach ($_COOKIE as $naem => $value){
            print "$naem = $value\n <br>";
        }
        print("\n");
    ?> 
</body>
</html>