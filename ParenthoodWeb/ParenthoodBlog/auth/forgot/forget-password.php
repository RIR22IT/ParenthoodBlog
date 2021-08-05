<?php
session_start();
include "../../database/connection.php";
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $query = "SELECT * FROM users WHERE email = '$email'";
    $run = mysqli_query($db, $query);
    if (mysqli_num_rows($run) > 0) {
        $row = mysqli_fetch_array($run);
        $db_email = $row['email'];
        $db_id = $row['id'];
        $token = uniqid(md5(time()));
        $query = "INSERT INTO password_reset (id, email, token) VALUES ($db_id, '$email', '$token')";

        if (mysqli_query($db, $query)) {
            $to = $db_email;
            $subject = "Password reset link";
            $message = "Click <a href='https://YOUR_WEBSITE.com/reset.php?token=$token'>here</a> to reset your password.";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers = "Content-type: text/html;charset=UTF-8" . "\r\n";
            $headers = 'From: <demo@demo.com>' . "\r\n";
            mail($to, $subject, $message, $headers);

            $msg = "<div class = 'success'> Password reset link has been sent to the email.</div>";
        }
    } else {
        $msg = "<div class = 'error'> User not found </div>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Forgot Password</title>
    <!-- <link rel="stylesheet" type="text/css" href="../../assets/css/loginstyle.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../../assets/css/signup.css"> -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
</head>

<body>
    <img class="wave" src="../../assets/images/wave.png">
    <div class="container">
        <div class="img">
            <img src="../../assets/images/playtime.svg">
        </div>
        <div class="login-content">
            <form action="" method="post">
                <h2 class="title">Forgot Password</h2>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Email Address</h5>
                        <input type="email" name="email" class="input"><br>
                    </div>
                </div>

                <?php if (isset($msg)) {
                    echo $msg;
                } ?>

                <input type="submit" name="submit" class="btn" value="Submit">

                <a class="txt-brand" href="../login/home.php">Back to Home</a>

            </form>
            <script type="text/javascript" src="../../assets/js/main.js"></script>
</body>

</html>