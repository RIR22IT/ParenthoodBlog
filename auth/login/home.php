<?php 
session_start();
include "../../database/connection.php";
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
     $id = $_SESSION['id'];
     $query = "SELECT * FROM users WHERE id = '$id'";
     $run = mysqli_query($db, $query);
     if (mysqli_num_rows($run) > 0) {
         $row = mysqli_fetch_array($run);
         $firstName = $row['firstName'];
         $lastName = $row['lastName'];
         
     }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/loginstyle.css">
</head>
<body>
     <h1>Hello, <?php echo $firstName. ' '.  $lastName; ?>!</h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>
