<?php 
session_start(); 
include "../../database/connection.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: index.php?error=Email/Mobile number is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	
	    exit();
	}else{

		// hashing the password
        $pass = md5($pass);

		$sql = "SELECT * FROM users WHERE email='$email' OR mobile='$email' AND password='$pass'";

		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass || $row['mobile'] === $email && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorrect email/mobile number or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorrect email/mobile or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
?>