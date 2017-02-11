<?php include 'db.php'; ?>
<?php include 'helpers.php'; ?>

<?php
	echo "Welcome to my terminal\n";
	echo "Please type 1 to Login Or 2 for register\n";
	$key = readline("Type here : " );

	if($key === "1") {
		$userName = readline("Username : ");
		$password = readline("Password : ");
		$checkLogin = login($userName, $password);
			if($checkLogin) {
				echo "Success \n";	
			} else {
				echo "User Not found\n";
				exit;
			}

	} elseif($key === "2") {
		$userName = readline("Please select user name : ");
		$query = "select * from user where user = '$userName'";
		$result = mysqli_query($conn, $query);
		$count = mysqli_num_rows($result);
		if($count == 1) {
			echo "UserName already exit";
			exit;
		} else {
			$password = readline("Type Password : ");
			$register = register($userName, $password);
			$name = readline("Username : ");
			$pass = readline("Password : ");
			$query = "select * from user where (name = '$name' AND password = '$pass')";
			$result = mysqli_query($conn, $query);
		}
	} else {
		echo "Invalid Number";
	}

	terminal($userName);
?>