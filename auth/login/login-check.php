<?php 
session_start(); 
include "../../database/connection.php";

$siteKey = '6LcDrpYbAAAAAP31-saCAGyHntGEuDjzz0oBEYyG';
$secretKey = '6LcDrpYbAAAAANElfTdcQ1MwerEatPQIlJV6NgbV';

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);
	
	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
		//Verify the  reCAPTCHA response
		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']);
		
		//Decode json data
		$responseData = json_decode($verifyResponse);
		
		if($responseData->success){
			if (empty($email)) {
				header("Location: login.php?error=Email is required");
				exit();
			}else if(empty($pass)){
				header("Location: login.php?error=Password is required");
				exit();
			}else{
		
				// hashing the password
				$pass = md5($pass);
		
				$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
		
				$result = mysqli_query($db, $sql);
				if (mysqli_num_rows($result) === 1) {
					$row = mysqli_fetch_assoc($result);
					if ($row['email'] === $email && $row['password'] === $pass) {
						$_SESSION['email'] = $row['email'];
						$_SESSION['id'] = $row['id'];
						header("Location: ../../YourAccount-PersonalInformation.php");
						exit();
					}else{
						header("Location: login.php?error=Incorrect email or password");
						exit();
					}
				}else{
					header("Location: login.php?error=Incorrect email or password");
					exit();
				}
			}
		}else{
			header("Location: login.php?error=Robot verification failed, please try again.");
			exit();
		}
		

	}else{
		header("Location: login.php?error=Please check on the reCAPTCHA box");
		exit();
	}

	
	
}else{
	header("Location: login-check.php");
	exit();
}
?>