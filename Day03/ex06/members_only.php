<?php

    $valid_login = "zaz";
    $valid_pass = "Ilovemylittleponey";

    if ($_SERVER['PHP_AUTH_USER'] === $valid_login && $_SERVER['PHP_AUTH_PW'] === $valid_pass)
    {
        echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,";
    	echo base64_encode(file_get_contents("img/42.png"));
    	echo "'>\n</body></html>\n";
        die();
    }

    else
    {
        header('WWW-Authenticate: Basic realm="Member area"');
        header("HTTP/1.0 401 Unauthorized");
        echo "<html><body>That area is accessible for members only</body></html>"."\n";
        die();
    }
?>
