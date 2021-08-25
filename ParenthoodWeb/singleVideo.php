<?php include('./database/connection.php'); ?>
<?php 
    if(isset($_GET['video'])){
        $id  = $_GET['video'];
        $qry = "SELECT * FROM singleVideo WHERE s_id = $id";
        $run = $db -> query($qry);
        if($run->num_rows > 0){
            while($row = $run->fetch_assoc()){
                $id    = $row['s_id'];
                $title = $row['title'];
                $category = $row['categoryType'];
                $link = $row['videoLink'];
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>OSRU - News, Blog & Magazine HTML Template</title>
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
            <div class="video-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <header class="details-header">
                                <div class="post-cat"><a href="#"><?php echo $category ?></a></div>
                                <h2><?php echo $title ?></h2>
                                <div class="element-block">
                                    <div class="entry-meta">
                                        <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span>
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <!-- <div class="reading-time"><span class="eta"></span> (<span class="words"></span> words)</div> -->
                                </div>
                            </header>
                            <div class="item vide_post_item">
                                <!-- the class "videoWrapper169" means a 16:9 aspect ration video. Another option is "videoWrapper43" for 4:3. -->
                                <div class="videoWrapper videoWrapper169 js-videoWrapper">
                                    <?php
                                        $url = substr($link, strpos($link, "v=") + 2) 
                                    ?>
                                    <!-- YouTube iframe. -->
                                    <!-- note the iframe src is empty by default, the url is in the data-src="" argument -->
                                    <!-- also note the arguments on the url, to autoplay video, remove youtube adverts/dodgy links to other videos, and set the interface language -->
                                    <iframe class="videoIframe js-videoIframe" allowfullscreen src="https://www.youtube.com/embed/<?php echo $url ?>"></iframe>
                                    <!-- the poster frame - in the form of a button to make it keyboard accessible -->
                                    <!-- <button class="videoPoster js-videoPoster" style="background-image:url(assets/img/youtube-video.jpg);">Play video</button> -->
                                </div>
                                <!--<button onclick="videoStop()">external close button</button>-->
                            </div>
                            <!-- /.End of video post item -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.End of video post -->
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <main class="col-sm-8 col-md-9 content p_r_40">

                            <div class="comments">
                                <h3 class="comment_title">2 Comments</h3>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/img/img_avatar1.png" alt="" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jahangir Alom <small>Posted on February 19, 2016</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a href="#" class="btn link-btn btn-rounded">Reply ⇾</a>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="assets/img/img_avatar2.png" alt="Demo Avatar Jane Doe" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Jane Doe <small>Posted on February 20, 2016</small></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <a href="#" class="btn link-btn btn-rounded">Reply ⇾</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/img/img_avatar1.png" alt="" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a href="#" class="btn link-btn btn-rounded">Reply ⇾</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.End of comment -->
                        </main>
                        <aside class="col-sm-4 col-md-3 rightSidebar">

                            <div class="social_share_btn">
                                <div class="title-holder">
                                    <h3 class="title">Subscribe</h3>
                                    <span class="title-shape title-shape-dark"></span>
                                </div>
                                <!--  /.End of title -->
                                <ul>
                                    <li class="li-facebook"><a href="https://www.facebook.com/parenthoodglobal" target="_blank"><i class="fa fa-facebook"></i>
                                            Facebook</a></li>
                                    <li class="li-pinterest"><a href="https://www.youtube.com/channel/UCcZeSJZ4KFFUOppROwUg_uA" target="_blank"><i class="fa fa-youtube"></i>
                                            Youtube</a></li>
                                    <li class="li-twitter"><a href="https://www.linkedin.com/company/parenthood-sri-lanka" target="_blank"><i class="fa fa-linkedin"></i>
                                            Linkedin</a></li>
                                    <li class="li-pinterest"><a href="https://www.pinterest.com/parenthoodglobal/_saved" target="_blank"><i class="fa fa-pinterest-p"></i>
                                            Pinterest</a></li>
                                </ul>
                            </div>
                            <!-- /.End of subscribe -->

                            <div class="fb_like">
                                <div class="title-holder">
                                    <h3 class="title">Facebook</h3>
                                    <span class="title-shape title-shape-dark"></span>
                                </div>
                                <!--  /.End of title -->
                                <div class="fb-page" data-href="https://www.facebook.com/parenthoodglobal" data-tabs="timeline" data-width="268" data-height="214" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/parenthoodglobal" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/parenthoodglobal">Parenthood Sri Lanka</a>
                                    </blockquote>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <?php include('./inc/footer_one.php'); ?>

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
                                    <a href="#" class="btn btn-plush"><i class="fa fa-google-plus"></i>With Google +</a>
                                </div>
                                <div class="ui horizontal divider">Or </div>
                                <p>Sign in Using Your Email Address</p>
                                <div class="form-group">
                                    <input class="form-control" name="f_name" id="f_name2" placeholder="Username or email" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="pass" id="pass" placeholder="Password" type="text">
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
                                    <input class="form-control" name="name" id="name" placeholder="Your Name" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" placeholder="Your Email Address" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="c_name" id="c_name" placeholder="Your Company Name" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="pass2" id="pass2" placeholder="Enter Your Password" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="r_pass" id="r_pass" placeholder="Retype Your Password" type="text">
                                </div>
                                <div class="block-content">
                                    <div><i class="fa fa-shield"></i><span>Your Password at Global Crypto are encrypted and Secured</span></div>
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
</body>

</html>