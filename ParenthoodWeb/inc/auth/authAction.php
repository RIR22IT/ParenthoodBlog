<?php
session_start(); 
include "../../database/connection.php";

if(isset($_GET['register'])){

if(isset($_GET['firstname']) && isset($_GET['lastname']) 
&& isset($_GET['email']) && isset($_GET['mobile']) 
&& isset($_GET['password']) && isset($_GET['r_pass'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }

    $fname   = validate($_GET['firstname']);
    $lname   = validate($_GET['lastname']);
	$email   = validate($_GET['email']);
    $mobile  = validate($_GET['mobile']);
    $pass    = validate($_GET['password']);
	$re_pass = validate($_GET['r_pass']);

    $user_data = 'firstname='. $fname. '&lastname='. $lname;

	$uppercase   = preg_match('@[A-Z]@', $pass);
	$lowercase   = preg_match('@[a-z]@', $pass);
	$number      = preg_match('@[0-9]@', $pass);
	$specialChar = preg_match('@[^\w]@', $pass);

	echo $_GET['firstname'];
	echo $_GET['lastname'];
	echo $_GET['email'];

	// if(!$uppercase || !$lowercase || !$number || !$specialChar || strlen($pass) < 8){
	// 	header("Location: auth.php?error=Password should be at least 8 characters, one upper case letter, one number, and one special character.&$user_data");
	// 	exit();
	// }

    if (empty($fname)) {
		header("Location: ../../index.php?error=First name is required&$user_data");
	    exit();
	}else if(empty($lname)){
        header("Location: ../../index.php?error=Last name is required&$user_data");
	    exit();
    }else if(empty($email)){
        header("Location: ../../index.php?error=Email is required&$user_data");
	    exit();
    }else if(empty($mobile)){
        header("Location: ../../index.php?error=Mobile is required&$user_data");
	    exit();
    }else if(empty($pass)){
        header("Location: ../../index.php?error=Password is required&$user_data");
	    exit();
	}else if(empty($re_pass)){
        header("Location: ../../index.php?error=Re Password is required&$user_data");
	    exit();
	}else if($pass !== $re_pass){
        header("Location: ../../index.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

    else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM user WHERE email='$email' ";
		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../../index.php?error=The email is already exists&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO user(firstname, lastname, email, mobile, password) VALUES('$fname', '$lname', '$email', ' $mobile', '$pass')";
           $result2 = mysqli_query($db, $sql2);
           if ($result2) {
			 $row = mysqli_fetch_assoc($result2);
			 $_SESSION['id'] = $row['id'];

           	 header("Location: ../../index.php?success=Your account has been created successfully!");
	         exit();
           }else {
	           	header("Location: ../../index.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
    
}else{
	header("Location: auth.php");
	exit();
}

}

//login auth creation
if(isset($_GET['login'])){
	if (isset($_GET['email']) && isset($_GET['password'])) {
		function validate($data){
		   $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
		   return $data;
		}
	
		$email = validate($_GET['email']);
		$pass = validate($_GET['password']);
			
				if (empty($email)) {
					header("Location: ../../index.php?error=Email is required");
					exit();
				}else if(empty($pass)){
					header("Location: ../../index.php?error=Password is required");
					exit();
				}else{
			
					// hashing the password
					$pass = md5($pass);
			
					$sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
			
					$result = mysqli_query($db, $sql);
					if (mysqli_num_rows($result) === 1) {
						$row = mysqli_fetch_assoc($result);
						if ($row['email'] === $email && $row['password'] === $pass) {
							$_SESSION['id'] = $row['id'];
							$_SESSION['email'] = $row['email'];
							header("Location: ../../index.php?success");
							exit();
						}else{
							header("Location: ../../index.php?error=Incorrect email or password");
							exit();
						}
					}else{
						header("Location: ../../index.php?error=Incorrect email or password");
						exit();
					}
				}
		
		
	}else{
		header("Location: ../../index.php");
		exit();
	}
}



?>