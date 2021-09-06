<?php include('./database/connection.php'); ?>
<?php 
    if(isset($_GET['post'])){
        $id  = $_GET['post'];
        $qry = "SELECT * FROM post WHERE id = $id";
        $run = $db -> query($qry);
        if($run->num_rows > 0){
            while($row = $run->fetch_assoc()){
                $id    = $row['id'];
                $mainTitle = $row['mainTitle'];
                $subTitle = $row['subTitle'];
                $img   =    $row['img'];
                $category = $row['categoryType'];
                $description = $row['description'];
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
                <div class="parallax page_header"  data-parallax-bg-image="assets/img/header-bg-3.jpg" data-parallax-direction="left">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>Post Details Single</h3>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Post Formats</a></li>
                                    <li class="active">Post</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.End of page header -->
                <div class=" page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="details-body">
                                    <div class="post_details stickydetails">
                                        <header class="details-header">
                                            <div class="post-cat"><a href="#"><?php echo $category ?></a></div>
                                            <h2><?php echo $mainTitle ?></h2>
                                            <div class="element-block">
                                                <div class="entry-meta">
                                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                                    <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                                </div>
                                                <div class="reading-time"><span class="eta"></span> (<span class="words"></span> words)</div>
                                            </div>
                                        </header>
                                        <figure>
                                        <?php echo '<img class="aligncenter img-responsive" src="./admin/upload/posts/' .$img. '" alt="singlepost-img">' ?>
                                            <!-- <img src="assets/img/details-4.jpg" alt="" class="aligncenter img-responsive"> -->
                                        </figure>
                                        <h3><?php echo $subTitle ?></h3>
                                        <p><?php echo $description ?></p>
                                        <!-- <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                            desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                                            humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need 
                                            to be sure there isn't anything embarrassing hidden in the middle.</p>
                                        <a href="assets/img/details-2.jpg" class="fluidbox_img">
                                            <img src="assets/img/details-2.jpg" alt="Image" class="alignright img-responsive">
                                        </a> -->
                                        <!-- <p> Oh, you're gonna be in a coma, all right. I care deeply for nature. I care deeply for nature.
                                            I'm a monster. I don't criticize you! And if you're worried about criticism, sometimes a diet is 
                                            the best defense.</p>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                                            making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                                            obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered 
                                            the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
                                            by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                                            "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                        <blockquote>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                            by injected humour, or randomised words which don't look even slightly believable.
                                        </blockquote> -->
                                        <!-- <h3>There are many variations of passages of Lorem Ipsum available.</h3>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                                            making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                                            obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered 
                                            the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
                                            by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                                            "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                        <p> -->
                                            <!-- <a href="assets/img/details-5.jpg" class="fluidbox_img"><img src="assets/img/details-5.jpg" alt="Image" class="alignleft img-responsive"></a>
                                            Oh, you're gonna be in a coma, all right. I care deeply for nature. I care deeply for nature.
                                            I'm a monster. I don't criticize you! And if you're worried about criticism, sometimes a diet is 
                                            the best defense.
                                        </p> -->
                                        <!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                            The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                            here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use 
                                            Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. 
                                            Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                        <h4>It is a long established fact that a reader will be distracted</h4>
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Quisque mollis quam vitae arcu cursus lacinia.</li>
                                            <li>Praesent condimentum nunc eget ligula rutrum pretium.</li>
                                            <li>Fusce rhoncus eros et auctor tincidunt.</li>
                                            <li>Donec eu neque at turpis tempus pretium rhoncus sed neque.</li>
                                            <li>In nec metus commodo, semper dolor vitae, volutpat lacus.</li>
                                            <li>Donec maximus dolor in felis ornare, et euismod enim lobortis.</li>
                                        </ul> -->
                                        <!-- <p>Source:&nbsp;https://unsplash.com/</p> -->
                                    </div>
                                    <!-- /.End of post details -->
                                    <div class="stickyshare">
                                        <aside class="share_article">
                                            <a href="#" class="boxed_icon facebook" data-share-url="http://mightymedia.nl" data-share-network="facebook" data-share-text="Share this awesome link on Facebook" data-share-title="Facebook Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-facebook"></i><span>28</span></a>
                                            <a href="#" class="boxed_icon twitter" data-share-url="http://mightymedia.nl" data-share-network="twitter" data-share-text="Share this awesome link on Twitter" data-share-title="Twitter Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="boxed_icon google-plus" data-share-url="http://mightymedia.nl" data-share-network="googleplus" data-share-text="Share this awesome link on Google+" data-share-title="Google+ Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="boxed_icon pinterest" data-share-url="http://mightymedia.nl" data-share-network="pinterest" data-share-text="Share this awesome link on Pinterest" data-share-title="Pinterest Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-pinterest-p"></i></a>
                                            <a href="#" class="boxed_icon comment"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="14" height="14" viewBox="0 0 14 14" enable-background="new 0 0 14 14" xml:space="preserve"><path d="M3.6 14c0 0-0.1 0-0.1 0 -0.1-0.1-0.2-0.2-0.2-0.3v-2.7h-2.9C0.2 11 0 10.8 0 10.6V0.4C0 0.2 0.2 0 0.4 0h13.3C13.8 0 14 0.2 14 0.4v10.2c0 0.2-0.2 0.4-0.4 0.4H6.9L3.9 13.9C3.8 14 3.7 14 3.6 14zM0.7 10.2h2.9c0.2 0 0.4 0.2 0.4 0.4v2.2l2.5-2.4c0.1-0.1 0.2-0.1 0.2-0.1h6.6v-9.5H0.7V10.2z"></path></svg><span>3</span></a>
                                        </aside>
                                    </div>
                                    <!-- /End of share icon -->
                                </div>
                                <!-- /.End if details body -->
                                <aside class="about-author">
                                    <h3>About The Author</h3>
                                    <div class="author-bio">
                                        <div class="author-img">
                                            <a href="#"><img alt="Johnny Doe" src="assets/img/about-avatar.jpg" class="avatar img-responsive"></a>												
                                        </div>
                                        <!-- /. Author-img -->
                                        <div class="author-info">
                                            <h4 class="author-name">Johnny Doe</h4>
                                            <p>Johnny Doe was born in Ulm, in the Kingdom of Württemberg in the German Empire on 14 March 1879. His father was Hermann Einstein, a salesman and engineer. He was a really good man for sure.</p>
                                            <p>
                                                <a class="social-link facebook" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="social-link twitter" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="social-link vine" href="#"><i class="fa fa-vine"></i></a>
                                                <a class="social-link dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                                <a class="social-link instagram" href="#"><i class="fa fa-instagram"></i></a>
                                            </p>
                                        </div>
                                        <!-- /. Author-info -->
                                    </div>
                                    <!-- /.End of author bio -->
                                </aside>
                                <!-- /.End of about author -->
                                <div class="post_related">
                                    <h3 class="related_post_title">You Might Also Like...</h3>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <article class="post_article item_related">
                                                <a class="post_img" href="#">
                                                    <figure>
                                                        <img class="img-responsive" src="assets/img/400x280-7.jpg" alt="">
                                                    </figure>
                                                </a>
                                                <h4><a href="#">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                            </article>
                                            <!-- /.End of related post -->
                                        </div>
                                        <div class="col-sm-3">
                                            <article class="post_article item_related">
                                                <a class="post_img" href="#">
                                                    <figure>
                                                        <img class="img-responsive" src="assets/img/400x280-8.jpg" alt="">
                                                    </figure>
                                                </a>
                                                <h4><a href="#">Aliquam <em><strong>gravida urna</strong></em> ut ipsum hendrerit cursus.</a></h4>
                                            </article>
                                            <!-- /.End of related post -->
                                        </div>
                                        <div class="col-sm-3">
                                            <article class="post_article item_related">
                                                <a class="post_img" href="#">
                                                    <figure>
                                                        <img class="img-responsive" src="assets/img/400x280-9.jpg" alt="">
                                                    </figure>
                                                </a>
                                                <h4><a href="#">Aliquam eu nunc at nulla efficitur <em><strong>pellentesque a quis.</strong></em></a></h4>
                                            </article>
                                            <!-- /.End of related post -->
                                        </div>
                                        <div class="col-sm-3">
                                            <article class="post_article item_related">
                                                <a class="post_img" href="#">
                                                    <figure>
                                                        <img class="img-responsive" src="assets/img/400x280-10.jpg" alt="">
                                                    </figure>
                                                </a>
                                                <h4><a href="#">Aliquam eu nunc at nulla efficitur <em><strong>pellentesque a quis.</strong></em></a></h4>
                                            </article>
                                            <!-- /.End of related post -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.End of  related post -->
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
                                <div class="comment_form">
                                    <h3 class="replay_title">Leave a Reply </h3>
                                    <div class="form-group">
                                        <textarea class="form-control" id="textarea" rows="5"></textarea>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Name *</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" id="name2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email *</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" id="email2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="website" class="col-sm-2 col-form-label">Website</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" id="website" type="text">
                                        </div>
                                    </div>
                                    <a href="#" class="btn link-btn">Post Comment ⇾</a>
                                </div>
                                <!-- /.End of comment content -->
                            </div>
                        </div>
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
    </body>
</html>