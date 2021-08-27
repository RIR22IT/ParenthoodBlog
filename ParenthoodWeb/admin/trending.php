<?php include('../database/connection.php'); ?>
<?php include('../admin/php_code.php'); ?>

<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}

?>
<?php
    $qry = "SELECT * FROM trending";
    $data = mysqli_query($db, $qry) or die('error');

    if(mysqli_num_rows($data) > 0){
        while($row = mysqli_fetch_assoc($data)){
            $title = $row['mainTitle'];
            $cat   = $row['category'];
            $des   = $row['description'];
            $img   = $row['mainImage'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>ADMIN PANEL - TRENDING</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <link rel="icon" href="../favamecro.ico">

    <style>
    form {
        width: 45%;
        margin: 50px auto;
        text-align: left;
        padding: 20px;
        border: 1px solid #bbbbbb;
        border-radius: 5px;
    }

    .msg {
        margin: 30px auto;
        padding: 10px;
        border-radius: 5px;
        color: #3c763d;
        background: #dff0d8;
        border: 1px solid #3c763d;
        width: 50%;
        text-align: center;
    }
    </style>

    <title>ADMIN PANEL</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../admin//styles//sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('./pageWrapper.php') ?>

        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="../images/adminNew.jpg">
                            </a>
                        </li>
                        <!--logout btn-->
                        <li class="nav-item dropdown no-arrow" style="padding-top:15px; ">
                            <a href="logout.php?logout" class="btn btn-outline-secondary" role="button"
                                aria-pressed="true"><i
                                    class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style="width: 1300px;"><br />
                    <!-- Page Heading -->
                    <center>
                        <h1 class="h3 mb-1 text-gray-800">TRENDING</h1>
                        <hr />
                    </center>

                    <?php
                        if(isset($_GET['success'])){
                    ?>
                    <div class="alert alert-success" role="alert">
                        Trending Page Successfully Updated!
                    </div>
                    <?php
                            }else if(isset($_GET['fail'])){
                    ?>
                    <div class="alert alert-danger" role="alert">
                        OOPS! Something Wrong!
                    </div>
                    <?php
                            }
                    ?>

                    <center>
                        <h5>Trending Main Current Image</h5>
                        <br />
                        <?php echo '<img width="865" height="486" src="./upload/trending/' .$img. '" alt="current-img">' ?>
                    </center>
                    

                    <form method="POST" action="php_code.php" enctype="multipart/form-data" style="width: 70%">
                        <div class="row">

                            <div class="col-15">
                                <label>Main Title*</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $title ?>"
                                    required><br>
                            </div>

                            <div class="col-15">
                                <label for="img">Main Image* (please upload 865 x 486 dimension)</label>
                                <input type="file" class="form-control" id="img" name="img"
                                    onchange="getImagePreview(event)">
                                <div id="preview"></div>
                            </div><br /><br /><br /><br />


                            <div class="col-15">
                                <label>Category Types*</label>
                                <select class="form-control" id="type" name="categoryType" style="height: 40px;"
                                    required>
                                    <option selected disabled="disabled">Select category Type</option>
                                    <option value="Parenthood Life" <?php
                                                    if ($cat == 'Parenthood Life') {
                                                      echo "selected";
                                                    }
                                                    ?>>Parenthood Life</option>
                                    <option value="Expecting Parents" <?php
                                                    if ($cat == 'Expecting Parents') {
                                                      echo "selected";
                                                    }
                                                    ?>>Expecting Parents</option>
                                    <option value="New Parents with Toddlers" <?php
                                                    if ($cat == 'New Parents with Toddlers') {
                                                      echo "selected";
                                                    }
                                                    ?>>New Parents with Toddlers</option>
                                    <option value="Expert Advice" <?php
                                                    if ($cat == 'Expert Advice') {
                                                      echo "selected";
                                                    }
                                                    ?>>Expert Advice</option>
                                </select>
                            </div><br><br><br><br>

                            <div class="col-15">
                                <label>Blog Description*</label>
                                <textarea id="" class="form-control" name="description"><?php echo $des ?></textarea>
                            </div>
                        </div>
                        <br />
                        <div class="col-md-20">
                            <button type="submit" name="trending" class="btn btn-primary">Add</button>
                        </div>

                    </form>

                    <!-- Content Row -->
                    <div class="row">

                    </div>
                    <!-- End of Main Content -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->
        </div>
    </div>
    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript">
    function getImagePreview(event) {
        var image = URL.createObjectURL(event.target.files[0]);
        var imagediv = document.getElementById('preview');
        var newimg = document.createElement('img');
        imagediv.innerHTML = '';
        newimg.src = image;
        newimg.width = "300";
        imagediv.appendChild(newimg);
    }
    </script>

</body>

</html>