<?php

$host = 'localhost';
$user = 'root';
$dbName = 'joke';
$password = '1@champ185';

    $conn = mysqli_connect($host,$user,$password,$dbName);
   if (!$conn) {
            die("Connection error: " . mysqli_connect_errno());
            }

$name = "vikash";
$pass = '123';
/*
    i integer
    d double
    b boolean
    s string
*/

$query = "SELECT name, password FROM user where name = ? AND password = ? ";

$stmt = mysqli_prepare($conn, $query);
if($stmt) {
    mysqli_stmt_bind_param($stmt, "ss", $name , $pass);
    mysqli_stmt_bind_result($stmt, $dbUsername, $dbPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_fetch($stmt);

    if(!empty($dbUsername) AND !empty($dbPassword)) {
        echo "Username : ".$dbUsername."<br>Password: ".$dbPassword."<br>";
    } else {
        echo "Invalid User / Password";
    }
    mysqli_stmt_close();

} else {
    echo "Error created Startment";
}














?>