<?php
    $siteKey = '6LcDrpYbAAAAAP31-saCAGyHntGEuDjzz0oBEYyG';
    $secretKey = '6LcDrpYbAAAAANElfTdcQ1MwerEatPQIlJV6NgbV';
?>
<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <!-- <link rel="stylesheet" type="text/css" href="../../assets/css/loginstyle.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../../assets/css/signup.css"> -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
</head>

<body>
    <img class="wave" src="../../assets/images/wave.png">
    <div class="container">
        <div class="img">
            <img src="../../assets/images/fatherhood.svg">
        </div>
        <div class="login-content">
            <form action="login.php" method="post">
                <img src="../../assets/images/user.svg">
                <h2 class="title">LOGIN</h2>
                <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Email Address</h5>
                        <input type="text" name="email" class="input"><br>
                    </div>
                </div>

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" class="input"><br>
                    </div>
                </div>
                <div class="g-recaptcha" data-sitekey = "<?php echo $siteKey ?>"></div>
                <input type="submit" class="btn" value="Login">

                <a class="txt-brand" href="../signup/signup.php">Need an account?</a>
                <a class="txt-brand" href="../forgot/forget-password.php">Forgot Password</a>

            </form>

            <script type="text/javascript" src="../../assets/js/main.js"></script>

</body>

</html>