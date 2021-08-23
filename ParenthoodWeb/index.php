<?php include('./auth.php')?>
<?php include('./database/connection.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Parenthood</title>
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
        <?php include('./inc/header_two.php'); ?>
        <!-- /.End of search full page  -->
        <!--<div class="height_40"></div>-->
        <!-- /.End of logo section -->
        <div class="container">
            <div class="newstricker_inner">
                <div class="trending"><strong>TRENDING NOW</strong></div>
                <div id="newsTicker" class="owl-carousel owl-theme">
                    <!-- <div class="item">
                            <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                        </div> -->
                    <div class="item">
                        <a href="#">It is a long established fact that a reader will be distracted by the readable.</a>
                    </div>
                    <div class="item">
                        <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text.</a>
                    </div>
                </div>
            </div>
        </div>
        <!--  /. End of newstricker -->
        <div class="news-masonry">
            <div class="container">
                <div class="row mas-m">
                    <div class="col-sm-6 mas-p">
                        <div class="mas-item mas-big">
                            <a href="#">
                                <figure><img src="assets/img/masonry/568x450-01.jpg" class="img-responsive" alt="">
                                </figure>
                            </a>
                            <div class="mas-text">
                                <div class="post-cat"><a href="#">Fashion</a></div>
                                <h2 class="mas-title"><a href="#">It is a long <em>established</em> fact that a reader
                                        will be distracted by the readable content</a></h2>
                                <div class="mas-details">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour</p>
                                    <a href="#" class="read-more">Read More &#8702;</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.End of masonry item -->
                    </div>

                    <div class="col-sm-6 mas-p">
                        <div class="row mas-m">
                            <div class="col-xs-6 col-sm-6 mas-p">
                                <div class="masonry-slide1 owl-carousel owl-theme">
                                    <div class="item mas-m-b">
                                        <div class="mas-item masonry-sm">
                                            <a href="#">
                                                <figure><img src="assets/img/masonry/282x223-01.jpg"
                                                        class="img-responsive" alt=""></figure>
                                            </a>
                                            <div class="mas-text">
                                                <div class="post-cat"><a href="#">Fashion</a></div>
                                                <h4 class="mas-title"><a href="#">It is a long <em>established</em> fact
                                                        that a reader</a></h4>
                                                <div class="mas-details">
                                                    <p>There are many variations of passages of Lorem Ipsum available
                                                    </p>
                                                    <a href="#" class="read-more">Read More &#8702;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End of masonry item -->
                                    </div>
                                    <div class="item mas-m-b">
                                        <div class="mas-item masonry-sm">
                                            <a href="#">
                                                <figure><img src="assets/img/masonry/282x223-02.jpg"
                                                        class="img-responsive" alt=""></figure>
                                            </a>
                                            <div class="mas-text">
                                                <div class="post-cat"><a href="#">Fashion</a></div>
                                                <h4 class="mas-title"><a href="#">It is a long <em>established</em> fact
                                                        that a reader</a></h4>
                                                <div class="mas-details">
                                                    <p>There are many variations of passages of Lorem Ipsum available
                                                    </p>
                                                    <a href="#" class="read-more">Read More &#8702;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End of masonry item -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 mas-p">
                                <div class="masonry-slide2 owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="mas-item masonry-sm">
                                            <a href="#">
                                                <figure><img src="assets/img/masonry/282x223-03.jpg"
                                                        class="img-responsive" alt=""></figure>
                                            </a>
                                            <div class="mas-text">
                                                <div class="post-cat"><a href="#">Fashion</a></div>
                                                <h4 class="mas-title"><a href="#">It is a long <em>established</em> fact
                                                        that a reader</a></h4>
                                                <div class="mas-details">
                                                    <p>There are many variations of passages of Lorem Ipsum available
                                                    </p>
                                                    <a href="#" class="read-more">Read More &#8702;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End of masonry item -->
                                    </div>
                                    <div class="item">
                                        <div class="mas-item masonry-sm">
                                            <a href="#">
                                                <figure><img src="assets/img/masonry/282x223-04.jpg"
                                                        class="img-responsive" alt=""></figure>
                                            </a>
                                            <div class="mas-text">
                                                <div class="post-cat"><a href="#">Fashion</a></div>
                                                <h4 class="mas-title"><a href="#">It is a long <em>established</em> fact
                                                        that a reader</a></h4>
                                                <div class="mas-details">
                                                    <p>There are many variations of passages of Lorem Ipsum available
                                                    </p>
                                                    <a href="#" class="read-more">Read More &#8702;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End of masonry item -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs row mas-m">
                            <div class="col-sm-6 mas-p">
                                <div class="masonry-slide3 owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="mas-item masonry-sm">
                                            <a href="#">
                                                <figure><img src="assets/img/masonry/282x223-05.jpg"
                                                        class="img-responsive" alt=""></figure>
                                            </a>
                                            <div class="mas-text">
                                                <div class="post-cat"><a href="#">Fashion</a></div>
                                                <h4 class="mas-title"><a href="#">It is a long <em>established</em> fact
                                                        that a reader</a></h4>
                                                <div class="mas-details">
                                                    <p>There are many variations of passages of Lorem Ipsum available
                                                    </p>
                                                    <a href="#" class="read-more">Read More &#8702;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End of masonry item -->
                                    </div>
                                    <div class="item">
                                        <div class="mas-item masonry-sm">
                                            <a href="#">
                                                <figure><img src="assets/img/masonry/282x223-06.jpg"
                                                        class="img-responsive" alt=""></figure>
                                            </a>
                                            <div class="mas-text">
                                                <div class="post-cat"><a href="#">Fashion</a></div>
                                                <h4 class="mas-title"><a href="#">It is a long <em>established</em> fact
                                                        that a reader</a></h4>
                                                <div class="mas-details">
                                                    <p>There are many variations of passages of Lorem Ipsum available
                                                    </p>
                                                    <a href="#" class="read-more">Read More &#8702;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End of masonry item -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mas-p">
                                <div class="masonry-slide4 owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="mas-item masonry-sm">
                                            <a href="#">
                                                <figure><img src="assets/img/masonry/282x223-07.jpg"
                                                        class="img-responsive" alt=""></figure>
                                            </a>
                                            <div class="mas-text">
                                                <div class="post-cat"><a href="#">Fashion</a></div>
                                                <h4 class="mas-title"><a href="#">It is a long <em>established</em> fact
                                                        that a reader</a></h4>
                                                <div class="mas-details">
                                                    <p>There are many variations of passages of Lorem Ipsum available
                                                    </p>
                                                    <a href="#" class="read-more">Read More &#8702;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End of masonry item -->
                                    </div>
                                    <div class="item">
                                        <div class="mas-item masonry-sm">
                                            <a href="#">
                                                <figure><img src="assets/img/masonry/282x223-08.jpg"
                                                        class="img-responsive" alt=""></figure>
                                            </a>
                                            <div class="mas-text">
                                                <div class="post-cat"><a href="#">Fashion</a></div>
                                                <h4 class="mas-title"><a href="#">It is a long <em>established</em> fact
                                                        that a reader</a></h4>
                                                <div class="mas-details">
                                                    <p>There are many variations of passages of Lorem Ipsum available
                                                    </p>
                                                    <a href="#" class="read-more">Read More &#8702;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End of masonry item -->
                                    </div>
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
                        <div class="media meida-md">
                            <div class="media-left">
                                <a href="#"><img src="assets/img/370x300-1.jpg" class="media-object" alt=""></a>
                            </div>
                            <!-- /.Post image -->
                            <div class="media-body">
                                <div class="post-header">
                                    <div class="post-cat"><span>In</span> <a href="#">Lifestyle</a></div>
                                    <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a
                                            reader will be distracted by the readable.</a></h3>
                                    <div class="entry-meta">
                                        <span class="entry-date"><i class="fa fa-calendar-o"
                                                aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21,
                                                2018</time></span>
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o"
                                                    aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <!-- /.Post meta -->
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some.</p>
                                <div class="element-block">
                                    <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
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

                        <div class="media meida-md">
                            <div class="media-left">
                                <a href="#"><img src="assets/img/370x300-1.jpg" class="media-object" alt=""></a>
                            </div>
                            <!-- /.Post image -->
                            <div class="media-body">
                                <div class="post-header">
                                    <div class="post-cat"><span>In</span> <a href="#">Lifestyle</a></div>
                                    <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a
                                            reader will be distracted by the readable.</a></h3>
                                    <div class="entry-meta">
                                        <span class="entry-date"><i class="fa fa-calendar-o"
                                                aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21,
                                                2018</time></span>
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o"
                                                    aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <!-- /.Post meta -->
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some.</p>
                                <div class="element-block">
                                    <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
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

                        <div class="media meida-md">
                            <div class="media-left">
                                <a href="#"><img src="assets/img/370x300-1.jpg" class="media-object" alt=""></a>
                            </div>
                            <!-- /.Post image -->
                            <div class="media-body">
                                <div class="post-header">
                                    <div class="post-cat"><span>In</span> <a href="#">Lifestyle</a></div>
                                    <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a
                                            reader will be distracted by the readable.</a></h3>
                                    <div class="entry-meta">
                                        <span class="entry-date"><i class="fa fa-calendar-o"
                                                aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21,
                                                2018</time></span>
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o"
                                                    aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <!-- /.Post meta -->
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some.</p>
                                <div class="element-block">
                                    <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
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

                        <div class="media meida-md">
                            <div class="media-left">
                                <a href="#"><img src="assets/img/370x300-1.jpg" class="media-object" alt=""></a>
                            </div>
                            <!-- /.Post image -->
                            <div class="media-body">
                                <div class="post-header">
                                    <div class="post-cat"><span>In</span> <a href="#">Lifestyle</a></div>
                                    <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a
                                            reader will be distracted by the readable.</a></h3>
                                    <div class="entry-meta">
                                        <span class="entry-date"><i class="fa fa-calendar-o"
                                                aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21,
                                                2018</time></span>
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o"
                                                    aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <!-- /.Post meta -->
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some.</p>
                                <div class="element-block">
                                    <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
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

                        <div class="media meida-md">
                            <div class="media-left">
                                <a href="#"><img src="assets/img/370x300-7.jpg" class="media-object" alt=""></a>
                            </div>
                            <!-- /.Post image -->
                            <div class="media-body">
                                <div class="post-header">
                                    <div class="post-cat"><span>In</span> <a href="#">Lifestyle</a></div>
                                    <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a
                                            reader will be distracted by the readable.</a></h3>
                                    <div class="entry-meta">
                                        <span class="entry-date"><i class="fa fa-calendar-o"
                                                aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21,
                                                2018</time></span>
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o"
                                                    aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <!-- /.Post meta -->
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some.</p>
                                <div class="element-block">
                                    <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
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
                        <!-- /.End of media left post -->
                        <!-- /.End of Load more -->
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
                    <div class="banner-content">
                                <img src="assets/img/ad-300x250-1.png" class="img-responsive center-block" alt="">
                    </div>
                        <!-- /.End of about -->
                        <div class="social_share_btn">
                            <div class="title-holder">
                                <h3 class="title">Subscribe</h3>
                                <span class="title-shape title-shape-dark"></span>
                            </div>
                            <!--  /.End of title -->
                            <ul>
                                <li class="li-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i>
                                        Facebook</a></li>
                                <li class="li-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i>
                                        Twitter</a></li>
                                <li class="li-google-plus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i>
                                        Google +</a></li>
                                <li class="li-pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i>
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
                                <div class="category_name">Execting Parents</div>
                            </a>
                            <!-- /.End of category -->
                            <a class="category" href="">
                                <figure><img src="assets/img/category-2.jpg" class="img-responsive" alt=""></figure>
                                <div class="category_name">New Parents with Toddlers</div>
                            </a>
                            <!-- /.End of category -->
                            <a class="category" href="">
                                <figure><img src="assets/img/category-3.jpg" class="img-responsive" alt=""></figure>
                                <div class="category_name">Parents of Schoolers</div>
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
                                    <!-- YouTube iframe. -->
                                    <!-- note the iframe src is empty by default, the url is in the data-src="" argument -->
                                    <!-- also note the arguments on the url, to autoplay video, remove youtube adverts/dodgy links to other videos, and set the interface language -->
                                    <iframe class="videoIframe js-videoIframe" allowfullscreen
                                        data-src="https://www.youtube.com/embed/hgzzLIa-93c?autoplay=1& modestbranding=1&rel=0&hl=sv"></iframe>
                                    <!-- the poster frame - in the form of a button to make it keyboard accessible -->
                                    <button class="videoPoster js-videoPoster"
                                        style="background-image:url(assets/img/youtube-video.jpg);">Play video</button>
                                </div>
                                <!--<button onclick="videoStop()">external close button</button>-->
                            </div>
                            <!-- /.End of video post item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!--  /.End of youtube video -->
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <main class="col-sm-12">
                            <div id="macy-container">

                                <article class="grid_post video_grid">
                                    <figure>
                                        <a href="#" class="grid_image">
                                            <img src="assets/img/grid-3.jpg" class="img-responsive" alt="">
                                            <span class="post__icon post__icon--video"></span>
                                        </a>
                                        <figcaption>
                                            <div class="post-cat"><a href="#">Fashion</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o"
                                                        aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21,
                                                        2018</time></span>
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o"
                                                            aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="#">There are <em>many variations</em>
                                                    of passages of Lorem Ipsum available</a></h4>
                                            <div class="element-block">
                                                <a href="#" class="btn link-btn btn-outline btn-rounded">Reading
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

                                <article class="grid_post video_grid">
                                    <figure>
                                        <a href="#" class="grid_image">
                                            <img src="assets/img/grid-3.jpg" class="img-responsive" alt="">
                                            <span class="post__icon post__icon--video"></span>
                                        </a>
                                        <figcaption>
                                            <div class="post-cat"><a href="#">Fashion</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o"
                                                        aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21,
                                                        2018</time></span>
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o"
                                                            aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="#">There are <em>many variations</em>
                                                    of passages of Lorem Ipsum available</a></h4>
                                            <div class="element-block">
                                                <a href="#" class="btn link-btn btn-outline btn-rounded">Reading
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

                                <article class="grid_post video_grid">
                                    <figure>
                                        <a href="#" class="grid_image">
                                            <img src="assets/img/grid-3.jpg" class="img-responsive" alt="">
                                            <span class="post__icon post__icon--video"></span>
                                        </a>
                                        <figcaption>
                                            <div class="post-cat"><a href="#">Fashion</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o"
                                                        aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21,
                                                        2018</time></span>
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o"
                                                            aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="#">There are <em>many variations</em>
                                                    of passages of Lorem Ipsum available</a></h4>
                                            <div class="element-block">
                                                <a href="#" class="btn link-btn btn-outline btn-rounded">Reading
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

                                <article class="grid_post video_grid">
                                    <figure>
                                        <a href="#" class="grid_image">
                                            <img src="assets/img/grid-3.jpg" class="img-responsive" alt="">
                                            <span class="post__icon post__icon--video"></span>
                                        </a>
                                        <figcaption>
                                            <div class="post-cat"><a href="#">Fashion</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o"
                                                        aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21,
                                                        2018</time></span>
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o"
                                                            aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="#">There are <em>many variations</em>
                                                    of passages of Lorem Ipsum available</a></h4>
                                            <div class="element-block">
                                                <a href="#" class="btn link-btn btn-outline btn-rounded">Reading
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
                            </div>
                        </main>
                    </div>
                </div>
            </div>

        </div>

        <?php include('./inc/footer_two.php'); ?>
        <!-- /.End of main content -->
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
                                        <input class="form-control" name="f_name" id="f_name2"
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
                                    <form method="POST" action="auth.php">
                                        <div class="form-group">
                                            <input class="form-control" name="firstname" id="firstname"
                                                placeholder="First Name" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="lastname" id="lastname"
                                                placeholder="Last Name" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email"
                                                placeholder="Enter Your Email" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="mobile" id="mobile"
                                                placeholder="Enter Your Mobile" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="password" id="password"
                                                placeholder="Enter Your Password" type="password">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="r_pass" id="r_pass"
                                                placeholder="Retype Your Password" type="password">
                                        </div>
                                        <div class="block-content">
                                            <div><i class="fa fa-shield"></i><span>Your Password at Global Crypto are
                                                    encrypted and Secured</span></div>
                                        </div>
                                        <button name="reg">Sign up</button>
                                        <!-- <a href="#" class="btn link-btn btn-block btn-rounded" name="reg">Sign Up &#8702;</a> -->
                                    </form>
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
</body>

</html>