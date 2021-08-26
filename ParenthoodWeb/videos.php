<?php include('./database/connection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Parenthood - videos </title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animsition.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/themify-icons/themify-icons.css" rel="stylesheet">
    <link href="assets/css/bootsnav.css" rel="stylesheet">
    <link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="assets/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/fluidbox.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="main-content animsition">
        <?php include('./inc/header_one.php'); ?>
        <div class="page-outer-wrap">
            <div class="clearfix"></div>
            <!-- /.End of navigation -->
            <div class="parallax page_header" data-parallax-bg-image="assets/img/header-bg.jpg"
                data-parallax-direction="left">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Post Masonry No Sidebar</h3>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Post Formats</a></li>
                                <li class="active">Masonry</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.End of page header -->
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <main class="col-sm-12">
                            <div id="macy-container">
                                <?php
                                    $qry = "SELECT * FROM singlevideo";
                                    $data = mysqli_query($db, $qry) or die('error');

                                    if(mysqli_num_rows($data) > 0){
                                        while ($row = mysqli_fetch_assoc($data)){
                                            $id  = $row['s_id'];
                                            $title = $row['title'];
                                            $category = $row['categoryType'];
                                            $link = $row['videoLink'];
                                            $currentDate = $row['date'];
                                            $date = date("d-m-Y", strtotime($currentDate));
                                            $url = substr($link, strpos($link, "v=") + 2);
                                ?>
                                <article class="grid_post video_grid">
                                    <figure>
                                        <a href="singleVideo.php?video=<?php echo $id ?>" class="grid_image">
                                            <iframe class="img-responsive" allowfullscreen
                                                src="https://www.youtube.com/embed/<?php echo $url ?>"></iframe>
                                            <!-- <img src="assets/img/grid-3.jpg" class="img-responsive" alt=""> -->
                                            <!-- <span class="post__icon post__icon--video"></span> -->
                                        </a>
                                        <figcaption>
                                            <div class="post-cat"><a href="singleVideo.php?video=<?php echo $id ?>"><?php echo $category ?></a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o"
                                                        aria-hidden="true"></i><time datetime="2018-01-21T19:00"><?php echo $date ?></time></span>
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o"
                                                            aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="singleVideo.php?video=<?php echo $id ?>"><?php echo $title ?></a></h4>
                                            <div class="element-block">
                                                <a href="singleVideo.php?video=<?php echo $id ?>" class="btn link-btn btn-outline btn-rounded">Reading
                                                    &#8702;</a>
                                                <!-- /.Post button -->
                                                <div class="post_share">
                                                    <a class="smedia facebook fa fa-facebook" href="#"></a>
                                                    <a class="smedia twitter fa fa-twitter" href="#"></a>
                                                    <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                                </div>
                                                <!-- /.Post social share -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                            <div class="text-center">
                                <ul class="pagination">
                                    <li class="disabled"><a href="#">&#8701;</a></li>
                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="page-numbers"><span>...</span></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&#8702;</a></li>
                                </ul>
                                <!-- /.End of pagination -->
                            </div>
                        </main>
                    </div>
                </div>
            </div>
            <?php include('./inc/footer_one.php'); ?>
            <!-- /.End of footer -->
        </div>
        <div class="modal fade user-modal" id="user-modal">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#login" data-toggle="tab">Log in</a></li>
                            <li><a href="#register" data-toggle="tab">Register</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="login">
                                <div class="form-content text-center">
                                    <h2>Sign In</h2>
                                    <p>Chose One of the Following Methods.</p>
                                    <div class="social-btn">
                                        <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i>With Facebook</a>
                                        <a href="#" class="btn btn-plush"><i class="fa fa-google-plus"></i>With Google
                                            +</a>
                                    </div>
                                    <div class="ui horizontal divider">Or </div>
                                    <p>Sign in Using Your Email Address</p>
                                    <div class="form-group">
                                        <input class="form-control" name="f_name" id="f_name"
                                            placeholder="Username or email" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="pass" id="pass" placeholder="Password"
                                            type="text">
                                    </div>
                                    <div class="block-content">

                                        <div class="checkbox checkbox-danger">
                                            <input id="checkbox8" type="checkbox">
                                            <label for="checkbox8">
                                                Remember me
                                            </label>
                                        </div>
                                        <a href="#" class="forgot">Forgot Password?</a>
                                    </div>
                                    <a href="#" class="btn link-btn btn-block btn-rounded">Login &#8702;</a>
                                    <div class="">Don't have an account? <a href="#">Sign up Now</a></div>
                                </div>
                                <!-- /.End of Login -->
                            </div>
                            <div class="tab-pane fade" id="register">
                                <div class="form-content">
                                    <h2 class="text-center">Sign Up For Free</h2>
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" placeholder="Your Name"
                                            type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email"
                                            placeholder="Your Email Address" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="c_name" id="c_name"
                                            placeholder="Your Company Name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="pass2" id="pass2"
                                            placeholder="Enter Your Password" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="r_pass" id="r_pass"
                                            placeholder="Retype Your Password" type="text">
                                    </div>
                                    <div class="block-content">
                                        <div><i class="fa fa-shield"></i><span>Your Password at Global Crypto are
                                                encrypted and Secured</span></div>
                                    </div>
                                    <a href="#" class="btn link-btn btn-block btn-rounded">Sign Up &#8702;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.End of Sign up  Sing in -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/animsition.min.js"></script>
        <script src="assets/js/bootsnav.js"></script>
        <script src="assets/js/macy.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/ResizeSensor.min.js"></script>
        <script src="assets/js/theia-sticky-sidebar.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/modernizr.custom.js"></script>
        <script src="assets/js/jquery.gridrotator.min.js"></script>
        <script src="assets/js/parallax-background.min.js"></script>
        <script src="assets/js/jquery.simpleSocialShare.min.js"></script>
        <script src="assets/js/jquery.fluidbox.min.js"></script>
        <script src="assets/js/retina.min.js"></script>
        <script src="assets/js/jquery.shuffle.min.js"></script>
        <script src="assets/js/readingTime.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script>
        var masonry = new Macy({
            container: '#macy-container',
            trueOrder: false,
            waitForImages: false,
            useOwnImageLoader: false,
            debug: true,
            mobileFirst: true,
            columns: 1,
            margin: 30,
            breakAt: {
                1200: 4,
                992: 3,
                768: 2,
                480: 2
            }
        });
        </script>
</body>

</html>