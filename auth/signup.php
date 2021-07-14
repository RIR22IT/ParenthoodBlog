<!DOCTYPE html>
<html>

<head>
    <title>Animated Login Form</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="../images/wave.png">
    <div class="container">
        <div class="img">
            <img src="../images/bg.svg">
        </div>
        <div class="login-content">
            <form action="signup-check.php" method="POST">
                <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                <h2 class="title">JOIN WITH US</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>First Name</h5>
                        <?php if (isset($_GET['firstName'])) { ?>
                        <input type="text" class="input" name="firstName" value="<?php echo $_GET['firstName']; ?>">
                        <?php }else{ ?>
                        <input type="text" class="input" name="firstName">
                        <?php } ?>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Last Name</h5>
                        <?php if (isset($_GET['lastName'])) { ?>
                        <input type="text" class="input" name="lastName" value="<?php echo $_GET['lastName']; ?>">
                        <?php }else{ ?>
                        <input type="text" class="input" name="lastName">
                        <?php } ?>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <?php if (isset($_GET['email'])) { ?>
                        <input type="email" class="input" name="email" value="<?php echo $_GET['email']; ?>">
                        <?php }else{ ?>
                        <input type="email" class="input" name="email">
                        <?php } ?>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <?php if (isset($_GET['password'])) { ?>
                        <input type="password" class="input" name="password" value="<?php echo $_GET['password']; ?>">
                        <?php }else{ ?>
                        <input type="password" class="input" name="password">
                        <?php } ?>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Confirm password</h5>
                        <?php if (isset($_GET['repassword'])) { ?>
                        <input type="password" class="input" name="repassword"
                            value="<?php echo $_GET['repassword']; ?>">
                        <?php }else{ ?>
                        <input type="password" class="input" name="repassword">
                        <?php } ?>
                    </div>
                </div>
                <a href="#">Forgot Password?</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../assets/js/main.js"></script>
</body>

</html>