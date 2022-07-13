<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
    <a href="index1.html">Домашняя страница</a> <br />
       
    <form>
            <input type="submit" value="Click me" />
        </form>
        <?php

           // if (isset($_SESSION["count"]))
            //{
            //    $i = $_SESSION["count"];
            //}
            //else
            //{
            //    $i = -1;
            //}
            if (isset($_COOKIE["count"]))
            {
                $i = $_COOKIE["count"];
            }
            else
            {
                $i = -1;
            }    
                
            //$i = $i + 1
            $i += 1;
            echo "Щелчков: $i";
           //$_SESSION["count"] = $i;
           setcookie("count", $i);

        ?>
    </body>
</html>