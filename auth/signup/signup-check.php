<?php 
session_start(); 
include "../../database/connection.php";

if (isset($_POST['firstName']) && isset($_POST['lastName'])
    && isset($_POST['email']) && isset($_POST['password'])
	&& isset($_POST['repassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$fname   = validate($_POST['firstName']);
    $lname   = validate($_POST['lastName']);
	$email   = validate($_POST['email']);
    $pass    = validate($_POST['password']);
	$re_pass = validate($_POST['repassword']);
    

	$user_data = 'firstName='. $fname. '&lastName='. $lname;

	$uppercase   = preg_match('@[A-Z]@', $pass);
	$lowercase   = preg_match('@[a-z]@', $pass);
	$number      = preg_match('@[0-9]@', $pass);
	$specialChar = preg_match('@[^\w]@', $pass);

	if(!$uppercase || !$lowercase || !$number || !$specialChar || strlen($pass) < 8){
		header("Location: signup.php?error=Password should be at least 8 characters, one upper case letter, one number, and one special character.&$user_data");
		exit();
	}


	if (empty($fname)) {
		header("Location: signup.php?error=First name is required&$user_data");
	    exit();
	}else if(empty($lname)){
        header("Location: signup.php?error=Last name is required&$user_data");
	    exit();
    }else if(empty($email)){
        header("Location: signup.php?error=Email is required&$user_data");
	    exit();
    }else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The email is already exists&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(firstName, lastName, email, password) VALUES('$fname', '$lname', '$email', '$pass')";
           $result2 = mysqli_query($db, $sql2);
           if ($result2) {
           	 header("Location: ../login/index.php?success=Your account has been created successfully!");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}

?>