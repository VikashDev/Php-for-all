<?php

$host = 'localhost';
$user = 'root';
$dbName = 'joke';
$password = '1@champ185';

    $conn = mysqli_connect($host,$user,$password,$dbName);
   if (!$conn) {
            die("Connection error: " . mysqli_connect_errno());
            }


$id = 11;
/*
    i integer
    d double
    b boolean
    s string
*/


$query = "DELETE FROM user WHERE user_id=? ";

$stmt = mysqli_prepare($conn, $query);
if($stmt) {
    mysqli_stmt_bind_param($stmt, "i",$id);
    mysqli_stmt_execute($stmt);
   
    mysqli_stmt_close();

} else {
    echo "Error created Startment";
}



?>