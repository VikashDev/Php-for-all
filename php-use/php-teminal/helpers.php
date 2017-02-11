<?php

    function login($username, $password) {
        global $conn;
		$query = "select * from user where (user = '$username' AND password = '$password')";
    	$result = mysqli_query($conn, $query);
        $count =  mysqli_num_rows($result);
        return $count;
    }

    function register($userName, $password) {
        global $conn;
        $query  = "insert into user (user, password) values ('$userName', '$password')";
        $result = mysqli_query($conn, $query);
		return 1 ;

    }

    function terminal($userName) {
        for($i;;) {
            $line = readline("$userName@mytern>");
                if($line === 'exit') {
                    echo "Good Bye\n";
                    exit;
                 } else {
                    echo "$line\n";
                }
            }
        }
?>