<?php
session_start();
include('./database/connection.php');

if(isset($_POST['reg'])){

    if(isset($_POST['firstName']) && isset($_POST['lastname']) 
    && isset($_POST['email']) && isset($_POST['mobile']) 
    && isset($_POST['password']) && isset($_POST['r_pass'])){
        
        // function validate($data){
        //     $data = trim($data);
        //     $data = stripslashes($data);
        //     $data = htmlspecialchars($data);
        //     return $data;
        // }
    
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $pass  = $_POST['password'];
        $re_pass = $_POST['r_pass'];
    
        // $user_data = 'firstName=' . $fname . '&lastName' . $lname;
    
    
        //hashing the password
        $pass = md5($pass);
    
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($db,$sql);
        
        if (mysqli_num_rows($result) > 0) {
            echo"<script>alert('The Email is already exists');
            window.location.href = 'index.php';
            </script>";
    
            exit();
        }else {
           $sql2 = "INSERT INTO user(firstName, lastName, mobile, email, password) VALUES('$fname', '$lname', '$mobile','$email', '$pass')";
           $result2 = mysqli_query($db, $sql2);
           if ($result2) {
            echo"<script>alert('Your account created successfully');
            window.location.href = 'index.php';
            </script>";
             exit();
           }else {
            echo"<script>alert('Unknown error occured');
            window.location.href = 'index.php';
            </script>";
            exit();
           }
        }
    
    
    
    }else{
        header("Location: index.php");
        exit();
    }

}


?>