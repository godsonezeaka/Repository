<?php
	if(isset($_POST['submit'])) {
		$db_location = "localhost";
		$db_username = "g794323e";
		$db_password = "100194";
		$db_database = "g794323e";

		$db_Connection = mysqli_connect("$db_location", "$db_username", "$db_password", "$db_database") or die("Error Connecting to the MySQL Server");
		
		$first = mysqli_real_escape_string($conn, $_POST['firstname']);
		$last = mysqli_real_escape_string($conn, $_POST['lastname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		
		//Error handlers
		//Check for empty fields
		if(empty($first) || empty($last) || empty($email) || empty($password)) {
			header("Location: ../signUp.php?signUp=empty");
			exit();
		}else{
			$sql ="SELECT * FROM Customer WHERE email ='$email'";
			$result = mysql_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			
			if($resultCheck > 0){
				header("Location: ../signUp.php?signup=usertaken");
				exit();
			}else{	
				//Hash password
				$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
				//Insert the user into the database
				$sql = "INSERT INTO Customer(firstName, lastName, email, password) VALUES ('$first', '$last', '$email', '$hashedPwd');";
				mysqli_query($conn, $sql);
				header("Location: ../signUp.php?signUp=success");
				exit();
			}
			
		}
		
	}else{
		fioenfieoqw'fnqwio4fn4ioea;f4
		
	}
		
	
?>

?>