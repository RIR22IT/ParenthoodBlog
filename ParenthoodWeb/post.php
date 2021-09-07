<?php include('./auth.php') ?>
<?php include('./database/connection.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>OSRU - News, Blog & Magazine HTML Template</title>
    <link href="assets/img/favicon.jpg" rel="icon">
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
            <div class="profile-header">
                <div id="author-header">
                    <img src="assets/img/author-header.jpg" alt="">
                </div>
                <div class="container text-center">
                    <div class="author-avatar">
                        <img src="../ParenthoodWeb/images/admin.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <!-- <h2 class="author-name">Parenthood Life</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking
                                        at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                        as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing 
                                        packages and web page editors now use Lorem Ipsum as their default model text, and a search</p> -->

                                <div class="author-social-link">
                                    <a class="social-link facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="social-link twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="social-link google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="social-link linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<div class="clearfix"></div>-->
                </div>
            </div>
            <!-- /.End of profile header -->

            <div class="page-content">
                <div class="container">
                    <div class="author-post-content">

                        <?php
                        $qry = "SELECT * FROM post";
                        $data = mysqli_query($db, $qry) or die('error');

                        function myTruncate($string, $limit, $break = ".", $pad = "...")
                        {
                            // return with no change if string is shorter than $limit
                            if (strlen($string) <= $limit) return $string;

                            // is $break present between $limit and the end of the string?
                            if (false !== ($breakpoint = strpos($string, $break, $limit))) {
                                if ($breakpoint < strlen($string) - 1) {
                                    $string = substr($string, 0, $breakpoint) . $pad;
                                }
                            }

                            return $string;
                        }

                        if (mysqli_num_rows($data) > 0) {
                            while ($row = mysqli_fetch_assoc($data)) {
                                $id  = $row['id'];
                                $mainTitle = $row['mainTitle'];
                                $categoryType = $row['categoryType'];
                                $description = $row['description'];
                                $currentDate = $row['date'];
                                $date = date("d-m-Y", strtotime($currentDate));
                                $img = $row['img'];
                                $shortDescription = myTruncate($description, 10);
                        ?>

                                <article class="grid_post text-center">
                                    <figure>
                                        <a href="singlePost.php?post=<?php echo $id ?>" class="grid_image"><?php echo '<img class="img-responsive" src="./admin/upload/posts/' . $img . '" alt="" />' ?></a>
                                        <figcaption>
                                            <div class="post-cat"><span>In</span> <a href="#"><?php echo $categoryType ?></a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00"><?php echo $date ?></time></span>
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="singlePost.php?post=<?php echo $id ?>"><?php echo $mainTitle ?></a></h4>
                                            <p><?php echo $shortDescription ?></p>
                                            <a href="singlePost.php?post=<?php echo $id ?>" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                            <!-- /.Post button -->
                                        </figcaption>
                                    </figure>

                                </article>
                                <!-- /.End of grid post -->

                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php include('./inc/footer_one.php'); ?>

        </div>
        <?php include('./inc/auth/auth.php'); ?>


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
                container: '.author-post-content',
                trueOrder: false,
                waitForImages: false,
                useOwnImageLoader: false,
                debug: true,
                mobileFirst: true,
                columns: 1,
                margin: 30,
                breakAt: {
                    1200: 3,
                    992: 2,
                    768: 2,
                    480: 2
                }
            });
        </script>
</body>

</html>