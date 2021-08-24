<?php 
    include('./database/connection.php');
?>

<div class="newslatter">
    <div class="container">
        <h3>Sign Up for Our <em>Newsletter</em></h3>
        <p>Subscribe now to get notified about exclusive offers<br> from The .... every week!</p>
        <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Your email address" name="q">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="insta-content">
        <!-- <div class="insta-link"><a href="#" rel="me" target="_blank" class="">Follow Me!</a></div> -->
        <div id="ri-grid" class="ri-grid ri-grid-size-2">
            <img class="ri-loading-image" src="assets/img/loading.gif" alt="" />
            <ul>
                <?php
                    $qry = "SELECT * FROM footerImage";
                    $data = mysqli_query($db, $qry) or die('error');

                    if(mysqli_num_rows($data) > 0){
                        while($row = mysqli_fetch_assoc($data)){
                            $id = $row['id'];
                            $img = $row['img'];
                ?>
                    <li><a href=""><?php echo'<img src="./admin/upload/footerImage/'.$img.'" alt="" />' ?></a></li>
                <?php
                    }
                }
                ?>
                <!-- <li><a href="#"><img src="assets/img/instagram/01.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/02.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/03.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/04.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/05.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/06.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/07.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/08.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/09.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/10.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/11.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/12.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/13.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/14.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/15.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/16.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/17.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/18.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/19.jpg" alt="" /></a></li>
                <li><a href="#"><img src="assets/img/instagram/20.jpg" alt="" /></a></li> -->
            </ul>
        </div>
    </div>

<footer class="footer-black">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="footer-box">
                        <div class="footer-logo">
                            <img src="assets/img/logo-white.png" class="img-responsive" alt="">
                        </div>
                        <p>Parenthood is a social networking and knowledge sharing platform for Parents, to make their Parenthood more positive and memorable. A community where likeminded parents are there to support their fellow members</p>
                        <p>Contact us on <a href="mailto:info@example.com"><strong>parenthoodglobal@gmail.com</strong></a></p>
                    </div>
                </div>
                <div class="hidden-sm col-md-3">
                    <div class="footer-box">
                        <h3 class="widget-title title-white">Twitter</h3>
                        <ul class="twitter-widget">
                            <li>
                            <div class="icon"><i class="fa fa-facebook"></i></div>
                            <div class="tweet-text">
                                Facebook Social Link - 
                                    <a target="_blank" href="https://www.facebook.com/
                                        parenthoodglobal">https://www.facebook.com/
                                        parenthoodglobal</a>
                            </div>
                            
                                
                            </li>
                            <li>
                            <div class="icon"><i class="fa fa-instagram"></i></div>
                                <div class="tweet-text">
                                Instagram Social Link - 
                                    <a target="_blank" href="https://www.instagram.com/parenthoodsrilanka/">https://www.instagram.com/
                                        parenthoodsrilanka</a>
                                </div>
                            </li>
                            <li>
                            <div class="icon"><i class="fa fa-linkedin"></i></div>
                                <div class="tweet-text">
                                Linkedin Social Link - 
                                    <a target="_blank" href="https://www.linkedin.com/company/parenthood-sri-lanka">https://www.linkedin.com/company/
                                        parenthood-sri-lanka</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-pinterest-square"></i></div>
                                <div class="tweet-text">
                                Pinterest Social Link -
                                   <a target="_blank" href="https://www.pinterest.com/parenthoodglobal/_saved">https://www.pinterest.com/
                                       parenthoodglobal/_saved</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-youtube-play"></i></div>
                                <div class="tweet-text">
                                Youtube Social Link -
                                   <a target="_blank" href="https://www.youtube.com/channel/UCcZeSJZ4KFFUOppROwUg_uA">https://www.youtube.com/
                                       channel/UCcZeSJZ4KFFUOppROwUg_uA</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-2">
                    <div class="footer-box">
                        <h3 class="widget-title title-white">Need help</h3>
                        <ul class="footer-cat">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Parents</a></li>
                            <li><a href="#">Trending</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5 col-md-3">
                    <div class="footer-box">
                        <h3 class="widget-title title-white">Latest Post</h3>
                        <div class="media latest_post">
                            <a class="media-left" href="">
                                <img src="assets/img/100x70-1.jpg" class="media-object" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics
                                        Copenhagen</a></h6>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21,
                                            2018</time></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.latest post -->
                        <div class="media latest_post">
                            <a class="media-left" href="">
                                <img src="assets/img/100x70-2.jpg" class="media-object" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics
                                        Copenhagen</a></h6>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21,
                                            2018</time></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.latest post -->
                        <div class="media latest_post">
                            <a class="media-left" href="">
                                <img src="assets/img/100x70-3.jpg" class="media-object" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics
                                        Copenhagen</a></h6>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21,
                                            2018</time></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.latest post -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        Copyright © 2021 by Parenthood. All Rights Reserved.
    </div>
</footer>