<?php

    $servername = "localhost";
    $user = "root";
    $pass = "1@champ185";
    $db = "php_terminal";

    $conn = mysqli_connect($servername, $user, $pass, $db);
    if(!$conn) {
        die("Connection not establised " .mysqli_connect_error());
    }


?>