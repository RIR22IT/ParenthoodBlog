<?php include('./database/connection.php') ?>
<?php

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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Parenthood</title>
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
        <?php include('./inc/header_two.php'); ?>
        <!-- /.End of search full page  -->
        <!--<div class="height_40"></div>-->
        <!-- /.End of logo section -->

        <div class="container">
            <div class="newstricker_inner">
                <div class="trending"><strong>TRENDING NOW</strong></div>
                <div id="newsTicker" class="owl-carousel owl-theme">

                    <?php
                    $qry = "SELECT * FROM post";
                    $data = mysqli_query($db, $qry) or die('error');

                    if (mysqli_num_rows($data) > 0) {
                        while ($row = mysqli_fetch_assoc($data)) {
                            $id  = $row['id'];
                            $mainTitle = $row['mainTitle'];
                    ?>

                    <div class="item">
                        <a href="#"><?php echo $mainTitle ?></a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!--  /. End of newstricker -->
        <div class="news-masonry">
            <div class="container">
                <div class="row mas-m">
                    <?php
                    $qry = "SELECT * FROM singlevideo ORDER BY s_id DESC LIMIT 1";
                    $data = mysqli_query($db, $qry) or die('error');

                    if (mysqli_num_rows($data) > 0) {
                        while ($row = mysqli_fetch_assoc($data)) {
                            $id  = $row['s_id'];
                            $title = $row['title'];
                            $category = $row['categoryType'];
                            $link = $row['videoLink'];
                            $currentDate = $row['date'];
                            $date = date("d-m-Y", strtotime($currentDate));
                            $url = substr($link, strpos($link, "v=") + 2);
                    ?>

                    <div class="col-sm-6 mas-p">
                        <div class="mas-item mas-big">
                            <a href="#">
                                <figure>
                                    <iframe allowfullscreen src="https://www.youtube.com/embed/<?php echo $url ?>"
                                        width="568" height="450"></iframe>
                                </figure>
                            </a>
                            <div class="mas-text">
                                <div class="post-cat"><a href="#"><?php echo $category ?></a></div>
                                <h2 class="mas-title"><a href="#"><?php echo $title ?></a></h2><br />
                                <div class="mas-details">
                                    <a href="videos.php?<?php echo $id ?>" class="read-more">Read More &#8702;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>

                    <!-- /.End of masonry item -->

                    <div class="col-sm-6 mas-p">
                        <div class="row mas-m">

                            <div class="col-xs-6 col-sm-6 mas-p">
                                <div class="masonry-slide1 owl-carousel owl-theme">

                                    <?php
                                    $qry = "SELECT * FROM post WHERE categoryType = 'Parenthood Life' limit 2";
                                    $data = mysqli_query($db, $qry) or die('error');

                                    if (mysqli_num_rows($data) > 0) {
                                        while ($row = mysqli_fetch_assoc($data)) {
                                            $id  = $row['id'];
                                            $mainTitle = $row['mainTitle'];
                                            $categoryType = $row['categoryType'];
                                            $description = $row['description'];
                                            $img = $row['img'];
                                    ?>

                                    <div class="item mas-m-b">
                                        <div class="mas-item masonry-sm">
                                            <a href="#">
                                                <figure>
                                                    <?php echo '<img src="./admin/upload/posts/' . $img . '" alt="" />' ?>
                                                </figure>
                                            </a>
                                            <div class="mas-text">
                                                <div class="post-cat"><a href="#"><?php echo $categoryType ?></a></div>
                                                <h4 class="mas-title"><a href="#"><?php echo $mainTitle ?></a></h4>
                                                <br />
                                                <div class="mas-details">
                                                    <p><?php echo $description ?></p>
                                                    <a href="post.php" class="read-more">Read More &#8702;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End of masonry item -->
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 mas-p">
                                <div class="masonry-slide1 owl-carousel owl-theme">

                                    <?php
                                    $qry = "SELECT * FROM post WHERE categoryType = 'Expecting Parents' limit 2";
                                    $data = mysqli_query($db, $qry) or die('error');

                                    if (mysqli_num_rows($data) > 0) {
                                        while ($row = mysqli_fetch_assoc($data)) {
                                            $id  = $row['id'];
                                            $mainTitle = $row['mainTitle'];
                                            $categoryType = $row['categoryType'];
                                            $description = $row['description'];
                                            $img = $row['img'];
                                    ?>

                                    <div class="item mas-m-b">
                                        <div class="mas-item masonry-sm">
                                            <a href="#">
                                                <figure>
                                                    <?php echo '<img src="./admin/upload/posts/' . $img . '" alt="" />' ?>
                                                </figure>
                                            </a>
                                            <div class="mas-text">
                                                <div class="post-cat"><a href="#"><?php echo $categoryType ?></a></div>
                                                <h4 class="mas-title"><a href="#"><?php echo $mainTitle ?></a></h4>
                                                <br />
                                                <div class="mas-details">
                                                    <p><?php echo $description ?></p>
                                                    <a href="post.php" class="read-more">Read More &#8702;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End of masonry item -->
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>

                        </div>
                        <div class="hidden-xs row mas-m">
                            <div class="col-sm-6 mas-p">
                                <div class="masonry-slide1 owl-carousel owl-theme">

                                    <?php
                                    $qry = "SELECT * FROM post WHERE categoryType = 'New Parents with Toddlers' limit 2";
                                    $data = mysqli_query($db, $qry) or die('error');

                                    if (mysqli_num_rows($data) > 0) {
                                        while ($row = mysqli_fetch_assoc($data)) {
                                            $id  = $row['id'];
                                            $mainTitle = $row['mainTitle'];
                                            $categoryType = $row['categoryType'];
                                            $description = $row['description'];
                                            $img = $row['img'];
                                    ?>

                                    <div class="item mas-m-b">
                                        <div class="mas-item masonry-sm">
                                            <a href="#">
                                                <figure>
                                                    <?php echo '<img src="./admin/upload/posts/' . $img . '" alt="" />' ?>
                                                </figure>
                                            </a>
                                            <div class="mas-text">
                                                <div class="post-cat"><a href="#"><?php echo $categoryType ?></a></div>
                                                <h4 class="mas-title"><a href="#"><?php echo $mainTitle ?></a></h4>
                                                <br />
                                                <div class="mas-details">
                                                    <p><?php echo $description ?></p>
                                                    <a href="post.php" class="read-more">Read More &#8702;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End of masonry item -->
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="col-sm-6 mas-p">
                                <div class="masonry-slide4 owl-carousel owl-theme">
                                    <?php
                                    $qry = "SELECT * FROM post WHERE categoryType = 'Expert Advice' limit 2";
                                    $data = mysqli_query($db, $qry) or die('error');

                                    if (mysqli_num_rows($data) > 0) {
                                        while ($row = mysqli_fetch_assoc($data)) {
                                            $id  = $row['id'];
                                            $mainTitle = $row['mainTitle'];
                                            $categoryType = $row['categoryType'];
                                            $description = $row['description'];
                                            $img = $row['img'];
                                    ?>
                                    <div class="item">
                                        <div class="mas-item masonry-sm">
                                            <a href="#">
                                                <figure>
                                                    <?php echo '<img src="./admin/upload/posts/' . $img . '" alt="" />' ?>
                                                </figure>
                                            </a>
                                            <div class="mas-text">
                                                <div class="post-cat"><a href="#"><?php echo $categoryType ?></a></div>
                                                <h4 class="mas-title"><a href="#"><?php echo $mainTitle ?></a></h4>
                                                <br />
                                                <div class="mas-details">
                                                    <p><?php echo $description ?></p>
                                                    <a href="post.php" class="read-more">Read More &#8702;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End of masonry item -->
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.End of news masonry -->
        <div class="page-content">
            <!-- content goes here  -->
            <div class="container">
                <div class="row">
                    <main class="col-sm-8 col-md-9 content p_r_40">
                        <?php
                        $qry = "SELECT * FROM post";
                        $data = mysqli_query($db, $qry) or die('error');

                        if (mysqli_num_rows($data) > 0) {
                            while ($row = mysqli_fetch_assoc($data)) {
                                $id  = $row['id'];
                                $mainTitle = $row['mainTitle'];
                                $subTitle = $row['subTitle'];
                                $categoryType = $row['categoryType'];
                                $description = $row['description'];
                                $currentDate = $row['date'];
                                $date = date("d-m-Y", strtotime($currentDate));
                                $img = $row['img'];
                                // $shortDescription = myTruncate($description, 10);
                        ?>
                        <div class="media meida-md">
                            <div class="media-left">
                                <a href="#"><?php echo '<img src="./admin/upload/posts/' . $img . '" alt="" />' ?></a>
                            </div>
                            <!-- /.Post image -->
                            <div class="media-body">
                                <div class="post-header">
                                    <div class="post-cat"><span>In</span> <a href="#"><?php echo $categoryType ?></a>
                                    </div>
                                    <h3 class="media-heading"><a href="#"><?php echo $mainTitle ?></a></h3>
                                    <div class="entry-meta">
                                        <span class="entry-date"><i class="fa fa-calendar-o"
                                                aria-hidden="true"></i><time
                                                datetime="2018-01-21T19:00"><?php echo $date ?></time></span>
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o"
                                                    aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <!-- /.Post meta -->
                                </div>
                                <!-- <p><?php echo $shortDescription ?></p> -->
                                <div class="element-block">
                                    <a href="post.php" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                    <!-- /.Post button -->
                                    <div class="post_share">
                                        <a class="smedia facebook fa fa-facebook" href="#"></a>
                                        <a class="smedia twitter fa fa-twitter" href="#"></a>
                                        <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                        <a class="smedia linkedin fa fa-linkedin" href="#"></a>
                                        <a class="smedia pinterest fa fa-pinterest-p" href="#"></a>
                                    </div>
                                    <!-- /.Post social share -->
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        }
                        ?>
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
                    </main>
                    <aside class="col-sm-4 col-md-3 rightSidebar">
                        <?php
                        $qry = "SELECT * FROM homead WHERE h_Id='1'";
                        $data = mysqli_query($db, $qry) or die('error');

                        if (mysqli_num_rows($data) > 0) {
                            while ($row = mysqli_fetch_assoc($data)) {
                                $id = $row['h_Id'];
                                $img = $row['img'];
                        ?>
                        <div class="banner-content">
                            <?php echo '<img src="./admin/upload/homeAd/' . $img . '"alt="ad" class="img-responsive center-block">' ?>
                        </div>
                        <!-- /.End of about -->
                        <div class="social_share_btn">
                            <div class="title-holder">
                                <h3 class="title">Subscribe</h3>
                                <span class="title-shape title-shape-dark"></span>
                            </div>
                            <!--  /.End of title -->
                            <ul>
                                <li class="li-facebook"><a href="https://www.facebook.com/parenthoodglobal"
                                        target="_blank"><i class="fa fa-facebook"></i>
                                        Facebook</a></li>
                                <li class="li-pinterest"><a
                                        href="https://www.youtube.com/channel/UCcZeSJZ4KFFUOppROwUg_uA"
                                        target="_blank"><i class="fa fa-youtube"></i>
                                        Youtube</a></li>
                                <li class="li-twitter"><a href="https://www.linkedin.com/company/parenthood-sri-lanka"
                                        target="_blank"><i class="fa fa-linkedin"></i>
                                        Linkedin</a></li>
                                <li class="li-pinterest"><a href="https://www.pinterest.com/parenthoodglobal/_saved"
                                        target="_blank"><i class="fa fa-pinterest-p"></i>
                                        Pinterest</a></li>
                            </ul>
                        </div>
                        <!-- /.End of subscribe -->

                        <!-- /.End of latest post -->
                        <div class="category_widget">
                            <div class="title-holder">
                                <h3 class="title">Category</h3>
                                <span class="title-shape title-shape-dark"></span>
                            </div>
                            <!--  /.End of title -->
                            <a class="category" href="">
                                <figure><img src="assets/img/category-1.jpg" class="img-responsive" alt=""></figure>
                                <div class="category_name">Parenthood Life</div>
                            </a>
                            <!-- /.End of category -->
                            <a class="category" href="">
                                <figure><img src="assets/img/category-1.jpg" class="img-responsive" alt=""></figure>
                                <div class="category_name">Execting Parents</div>
                            </a>
                            <!-- /.End of category -->
                            <a class="category" href="">
                                <figure><img src="assets/img/category-2.jpg" class="img-responsive" alt=""></figure>
                                <div class="category_name">New Parents with Toddlers</div>
                            </a>
                            <!-- /.End of category -->
                        </div>
                        <!-- /.End of category widget -->

                        <div class="fb_like">
                            <div class="title-holder">
                                <h3 class="title">Facebook</h3>
                                <span class="title-shape title-shape-dark"></span>
                            </div>
                            <!--  /.End of title -->
                            <div class="fb-page" data-href="https://www.facebook.com/parenthoodglobal"
                                data-tabs="timeline" data-width="268" data-height="214" data-small-header="false"
                                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/parenthoodglobal"
                                    class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/parenthoodglobal">Parenthood Sri Lanka</a>
                                </blockquote>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
            <div class="youtube_video">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="title-holder">
                                <h3 class="title title-white">Featured Videos</h3>
                                <span class="title-shape title-shape-white"></span>
                            </div>
                            <!--  /.End of title -->
                            <h3 class="video-title">Video</h3>
                            <div class="item vide_post_item">
                                <!-- the class "videoWrapper169" means a 16:9 aspect ration video. Another option is "videoWrapper43" for 4:3. -->
                                <div class="videoWrapper videoWrapper169 js-videoWrapper">
                                    <?php
                                    $sql = "SELECT link FROM video WHERE v_id = '1'";
                                    $exe = mysqli_query($db, $sql);
                                    $rowSelect = mysqli_fetch_array($exe);
                                    if ($rowSelect['link'] != "") {
                                    ?>

                                    <?php
                                        $url = $rowSelect['link'];
                                        $link = substr($url, strpos($url, "v=") + 2);
                                        ?>

                                    <!-- YouTube iframe. -->
                                    <!-- note the iframe src is empty by default, the url is in the data-src="" argument -->
                                    <!-- also note the arguments on the url, to autoplay video, remove youtube adverts/dodgy links to other videos, and set the interface language -->
                                    <iframe class="videoIframe js-videoIframe" allowfullscreen
                                        src="https://www.youtube.com/embed/<?php echo $link; ?>"></iframe>
                                    <!-- the poster frame - in the form of a button to make it keyboard accessible -->
                                    <!-- <button class="videoPoster js-videoPoster"
                                        style="background-image:url(assets/img/youtube-video.jpg);">Play video</button> -->
                                    <?php
                                    }
                                    ?>
                                </div>
                                <!--<button onclick="videoStop()">external close button</button>-->
                            </div>
                            <!-- /.End of video post item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
                            }
                        }
?>
        <!--  /.End of youtube video -->
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <main class="col-sm-12">
                        <div id="macy-container">
                            <?php
                    $qry = "SELECT * FROM singlevideo  WHERE s_id != $id limit 4";
                    $data = mysqli_query($db, $qry) or die('error');

                    if (mysqli_num_rows($data) > 0) {
                        while ($row = mysqli_fetch_assoc($data)) {
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
                                    </a>
                                    <figcaption>
                                        <div class="post-cat"><a
                                                href="singleVideo.php?video=<?php echo $id ?>"><?php echo $category ?></a>
                                        </div>
                                        <div class="entry-meta">
                                            <span class="entry-date"><i class="fa fa-calendar-o"
                                                    aria-hidden="true"></i><time
                                                    datetime="2018-01-21T19:00"><?php echo $date ?></time></span>
                                            <span class="comment-link"><a href="#"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>9 Comments</a></span>
                                        </div>
                                        <h4 class="grid_post_title"><a
                                                href="singleVideo.php?video=<?php echo $id ?>"><?php echo $title ?></a>
                                        </h4>
                                        <div class="element-block">
                                            <a href="singleVideo.php?video=<?php echo $id ?>"
                                                class="btn link-btn btn-outline btn-rounded">Reading&#8702;</a>
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
                    </main>
                </div>
            </div>
        </div>

    </div>

    <?php include('./inc/footer_two.php'); ?>
    <!-- /.End of main content -->
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
    $(document).ready(function() {
        'use strict';
        //Grid content 
        var masonry = new Macy({
            container: '.grid-content',
            trueOrder: false,
            waitForImages: false,
            useOwnImageLoader: false,
            debug: true,
            mobileFirst: true,
            columns: 1,
            margin: 30,
            breakAt: {
                1200: 2,
                992: 2,
                768: 2,
                480: 2
            }
        });
    });
    </script>

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

        <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
        </script>

</body>

</html>