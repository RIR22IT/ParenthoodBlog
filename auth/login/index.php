<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/loginstyle.css">
</head>

<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Email Address</label>
        <input type="text" name="email" placeholder="Email Address"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

      
        <div class="login-links">
            <p class="text-center">Need an account? <a class="txt-brand" href="../signup/signup.php">Sign Up</a></p>
        </div>
    


		<div class="link forget-pass text-left"><a href="../forgot/forgotPassword.php">Forgot password?</a></div>

     	<button type="submit">Login</button>
     </form>


</body>

</html>