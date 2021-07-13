<?php
session_start();
include "../../database/connection.php";
if (isset($_GET['token'])) {
    $token = mysqli_real_escape_string($db, $_GET['token']);
    $query = "SELECT * FROM password_reset WHERE token = '$token'";
    $run = mysqli_query($db, $query);
    if (mysqli_num_rows($run) > 0) {
        $row = mysqli_fetch_array($run);
        $token = $row['token'];
        $email = $row['email'];
    } else {
        header("location:../login/login.php");
    }
}

if (isset($_POST['submit'])) {
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);
    // $options = ['cost' => 11];
    // $hashed = password_hash($password, PASSWORD_BCRYPT, $options);
    $hashed = md5($password);
    if ($password != $confirmpassword) {
        $msg = "<div class = 'alert alert-danger'>Sorry, passwords didn't matched!</div>";
    } elseif (strlen($password) < 8) {
        $msg = "<div class = 'alert alert-danger'>Passwords must be 6 characters long.</div>";
    } else {
        $query = "UPDATE users SET password = '$hashed' WHERE email = '$email'";
        mysqli_query($db, $query);
        $query = "DELETE FROM password_reset where email = '$email'";
        mysqli_query($db, $query);
        $msg = "<div class = 'alert alert-success'Passwords Updated.</div>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/loginstyle.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/signup.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <form action="" method="post">
        <h2>Reset Password</h2>

        <label>Email</label>
        <input type="text" name="" value=""><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <label>Confirm Password</label>
        <input type="password" name="confirmpassword" placeholder="Email Address"><br>

        <?php if (isset($msg)) {
            echo $msg;
        } ?>
        <button class="btn btn-primary btn-block" name="submit">Reset Password</button>

        <div class="login-links">
            <p class="text-center">Back to Home>> <a class="txt-brand" href="../login/home.php">Home</a></p>
        </div>
    </form>

</body>

</html>