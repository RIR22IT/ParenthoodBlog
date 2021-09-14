<?php include './database/connection.php'; ?>
<?php
if (isset($_GET['post'])) {
    $id  = $_GET['post'];
    $qry = "SELECT * FROM post WHERE id = $id";
    $run = $db->query($qry);
    if ($run->num_rows > 0) {
        while ($row = $run->fetch_assoc()) {
            $id          = $row['id'];
            $mainTitle   = $row['mainTitle'];
            $subTitle    = $row['subTitle'];
            $img         = $row['img'];
            $category    = $row['categoryType'];
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
    <title>Parenthood - Post</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
        <?php include './inc/header_one.php'; ?>
        <div class="page-outer-wrap">

            <div class="clearfix"></div>
            <!-- /.End of navigation -->
            <div class="parallax page_header" data-parallax-bg-image="assets/img/header-bg-3.jpg"
                data-parallax-direction="left">
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
                                                <span class="entry-date"><i class="fa fa-calendar-o"
                                                        aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21,
                                                        2018</time></span>
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o"
                                                            aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <div class="reading-time"><span class="eta"></span> (<span
                                                    class="words"></span> words)</div>
                                        </div>
                                    </header>
                                    <figure>
                                        <?php echo '<img class="aligncenter img-responsive" src="./admin/upload/posts/' . $img . '" alt="singlepost-img">' ?>
                                        <!-- <img src="assets/img/details-4.jpg" alt="" class="aligncenter img-responsive"> -->
                                    </figure>
                                    <h3><?php echo $subTitle ?></h3>
                                    <p><?php echo $description ?></p>
                                </div>
                                <!-- /.End of post details -->
                                <div class="stickyshare">
                                    <aside class="share_article">
                                        <a href="#" class="boxed_icon facebook" data-share-url="http://mightymedia.nl"
                                            data-share-network="facebook"
                                            data-share-text="Share this awesome link on Facebook"
                                            data-share-title="Facebook Share" data-share-via="" data-share-tags=""
                                            data-share-media=""><i class="fa fa-facebook"></i><span>28</span></a>
                                        <a href="#" class="boxed_icon twitter" data-share-url="http://mightymedia.nl"
                                            data-share-network="twitter"
                                            data-share-text="Share this awesome link on Twitter"
                                            data-share-title="Twitter Share" data-share-via="" data-share-tags=""
                                            data-share-media=""><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="boxed_icon google-plus"
                                            data-share-url="http://mightymedia.nl" data-share-network="googleplus"
                                            data-share-text="Share this awesome link on Google+"
                                            data-share-title="Google+ Share" data-share-via="" data-share-tags=""
                                            data-share-media=""><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="boxed_icon pinterest" data-share-url="http://mightymedia.nl"
                                            data-share-network="pinterest"
                                            data-share-text="Share this awesome link on Pinterest"
                                            data-share-title="Pinterest Share" data-share-via="" data-share-tags=""
                                            data-share-media=""><i class="fa fa-pinterest-p"></i></a>
                                        <a href="#" class="boxed_icon comment"><svg xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" x="0" y="0" width="14" height="14" viewBox="0 0 14 14"
                                                enable-background="new 0 0 14 14" xml:space="preserve">
                                                <path
                                                    d="M3.6 14c0 0-0.1 0-0.1 0 -0.1-0.1-0.2-0.2-0.2-0.3v-2.7h-2.9C0.2 11 0 10.8 0 10.6V0.4C0 0.2 0.2 0 0.4 0h13.3C13.8 0 14 0.2 14 0.4v10.2c0 0.2-0.2 0.4-0.4 0.4H6.9L3.9 13.9C3.8 14 3.7 14 3.6 14zM0.7 10.2h2.9c0.2 0 0.4 0.2 0.4 0.4v2.2l2.5-2.4c0.1-0.1 0.2-0.1 0.2-0.1h6.6v-9.5H0.7V10.2z">
                                                </path>
                                            </svg><span>3</span></a>
                                    </aside>
                                </div>
                                <!-- /End of share icon -->
                            </div>
                            <!-- /.End if details body -->
                            <!-- <aside class="about-author">
                                    <h3>About The Author</h3>
                                    <div class="author-bio">
                                        <div class="author-img">
                                            <a href="#"><img alt="Johnny Doe" src="assets/img/about-avatar.jpg" class="avatar img-responsive"></a>
                                        </div> -->
                            <!-- /. Author-img -->
                            <!-- <div class="author-info">
                                            <h4 class="author-name">Johnny Doe</h4>
                                            <p>Johnny Doe was born in Ulm, in the Kingdom of Württemberg in the German Empire on 14 March 1879. His father was Hermann Einstein, a salesman and engineer. He was a really good man for sure.</p>
                                            <p>
                                                <a class="social-link facebook" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="social-link twitter" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="social-link vine" href="#"><i class="fa fa-vine"></i></a>
                                                <a class="social-link dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                                <a class="social-link instagram" href="#"><i class="fa fa-instagram"></i></a>
                                            </p>
                                        </div> -->
                            <!-- /. Author-info -->
                            <!-- </div> -->
                            <!-- /.End of author bio -->
                            <!-- </aside> -->
                            <!-- /.End of about author -->
                            <div class="post_related">
                                <h3 class="related_post_title">You Might Also Like...</h3>
                                <div class="row">
                                    <?php
$qry  = "SELECT * FROM post WHERE id != '$id' ";
$data = mysqli_query($db, $qry) or die('error');

if (mysqli_num_rows($data) > 0) {
    while ($row = mysqli_fetch_assoc($data)) {
        $title = $row['mainTitle'];
        $img   = $row['img'];
        ?>
                                    <div class="col-sm-3">
                                        <article class="post_article item_related">
                                            <a class="post_img" href="#">
                                                <figure>
                                                    <?php echo '<img src="./admin/upload/posts/' . $img . '" alt="" class="img-responsive" />' ?>
                                                    <!-- <img class="img-responsive" src="assets/img/400x280-7.jpg" alt=""> -->
                                                </figure>
                                            </a>
                                            <h4><a href="#"><?php echo $mainTitle ?></a></h4>
                                        </article>
                                        <!-- /.End of related post -->
                                    </div>
                                    <?php
}
}
?>

                                </div>
                            </div>
                            <!-- /.End of  related post -->
                            <div class="comments">
                                <h3 class="comment_title">Comments</h3>
                                <span id="comment_message"></span>
                                <br />
                                <div id="display_comment"></div>

                            </div>
                            <!-- /.End of comment -->
                            <h3 class="replay_title">Leave a Reply </h3>
                            <form method="POST" id="comment_form" class="comment_form">
                                <div class="form-group">
                                    <textarea class="form-control" id="comment_content" name="comment_content"
                                        rows="5"></textarea>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name *</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" name="comment_name" id="comment_name" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email *</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" name="comment_email" id="comment_email" type="text">
                                    </div>
                                </div>
                                <input type="hidden" name="comment_id" id="comment_id" value="0" />
                                <input type="hidden" name="post_id" id="post_id" value="<?php echo $id ?>" />
                                <input type="submit" name="submit" id="submit" class="btn link-btn" value="Submit" />
                            </form>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        <?php include './inc/footer_one.php'; ?>

    </div>
    <?php include './inc/auth/auth.php'; ?>
    <!-- /.End of Sign up  Sing in -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script>
    $(document).ready(function() {

        $('#comment_form').on('submit', function(event) {
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url: "add_comment.php",
                method: "POST",
                data: form_data,
                dataType: "JSON",
                success: function(data) {
                    if (data.error != '') {
                        $('#comment_form')[0].reset();
                        $('#comment_message').html(data.error);
                        $('#comment_id').val('0');
                        load_comment();
                    }
                }
            })
        });

        load_comment();

        function load_comment() {
            var post_id = $('#post_id').val();
            $.ajax({
                url: "fetch_comment.php",
                method: "POST",
                data: {post_id:post_id},
                datatype: "json",
                success: function(data) {
                    $('#display_comment').html(data);
                }
            })
        }

        $(document).on('click', '.reply', function() {
            var comment_id = $(this).attr("id");
            $('#comment_id').val(comment_id);
            $('#comment_name').focus();
        });

    });
    </script>
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
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