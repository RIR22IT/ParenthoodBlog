<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/css/signup.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Parenthood | SIGN UP</title>
</head>

<body class="login-page">
    <main>

        <div class="login-block">
            <img src="http://scanfcode.com/wp-content/uploads/2017/09/cropped-Untitled-1.png" alt="Scanfcode">
            <h1>SIGN UP</h1>

            <form action="signup-check.php" method="POST">
                <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
                        <?php if (isset($_GET['firstName'])) { ?>
                        <input type="text" class="form-control" name="firstName" placeholder="Your first name"
                            value="<?php echo $_GET['firstName']; ?>">
                        <?php }else{ ?>
                        <input type="text" class="form-control" name="firstName" placeholder="Your first name">
                        <?php } ?>
                    </div>
                </div>

                <hr class="hr-xs">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
                        <?php if (isset($_GET['lastName'])) { ?>
                        <input type="text" class="form-control" name="lastName" placeholder="Your last name"
                            value="<?php echo $_GET['lastName']; ?>">
                        <?php }else{ ?>
                        <input type="text" class="form-control" name="lastName" placeholder="Your last name">
                        <?php } ?>
                    </div>
                </div>

                <hr class="hr-xs">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <?php if (isset($_GET['email'])) { ?>
                        <input type="text" class="form-control" name="email" placeholder="Your email"
                            value="<?php echo $_GET['email']; ?>">
                        <?php }else{ ?>
                        <input type="text" class="form-control" name="email" placeholder="Your email">
                        <?php } ?>
                    </div>
                </div>

                <hr class="hr-xs">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-mobile-phone" style="font-size:35px;"></i></span>
                        <?php if (isset($_GET['mobile'])) { ?>
                        <input type="number" class="form-control" name="mobile" placeholder="Your mobile"
                            value="<?php echo $_GET['mobile']; ?>">
                        <?php }else{ ?>
                        <input type="number" class="form-control" name="mobile" placeholder="Your mobile">
                        <?php } ?>
                    </div>
                </div>

                <hr class="hr-xs">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock ti-unlock"></i></span>
                        <?php if (isset($_GET['password'])) { ?>
                        <input type="password" class="form-control" name="password" placeholder="Your password"
                            value="<?php echo $_GET['password']; ?>">
                        <?php }else{ ?>
                        <input type="password" class="form-control" name="password" placeholder="Your password">
                        <?php } ?>
                    </div>
                </div>

                
                <hr class="hr-xs">
                
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock ti-unlock"></i></span>
                        <?php if (isset($_GET['repassword'])) { ?>
                        <input type="password" class="form-control" name="repassword" placeholder="Your re-password"
                            value="<?php echo $_GET['repassword']; ?>">
                        <?php }else{ ?>
                        <input type="password" class="form-control" name="repassword" placeholder="Your re-password">
                        <?php } ?>
                    </div>
                </div>
                
                <button class="btn btn-primary btn-block" type="submit">Sign up</button>
                <div class="login-links">
                    <p class="text-center">Already have an account? <a class="txt-brand"
                            href="user-login.html">Login</a></p>
                </div>
            </form>
        </div>
    </main>
</body>

</html>