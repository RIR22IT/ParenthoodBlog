<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - LOGIN</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@700&family=Merienda:wght@700&display=swap"
        rel="stylesheet">

</head>

<body>
    <?php
if (@$_GET['Empty'] == true) {
    ?>
    <div class="alert-sucess">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Success!</strong><?php echo $_GET['Empty'] ?>
    </div>
    <?php
}
?>
    <?php
if (@$_GET['Invalid'] == true) {
    ?>
    <div class="alert-danger">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Attention!</strong><?php echo $_GET['Invalid'] ?>
    </div>
    <?php
}
?>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="process.php" method="post">
                <h1 style="padding-bottom: 15px">Admin Login</h1>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button style="margin-top: 10px" name="btnlogin"> LOGIN </button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <img src="../images/admin.png" alt="movie-2" height="480" width="500" />
                </div>
            </div>
        </div>
    </div>
</body>

</html>