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
            $qry = "SELECT * FROM footerimage";
            $data = mysqli_query($db, $qry) or die('error');

            if (mysqli_num_rows($data) > 0) {
                while ($row = mysqli_fetch_assoc($data)) {
                    $id = $row['id'];
                    $img = $row['img'];
            ?>
                    <li><a href=""><?php echo '<img src="./admin/upload/footerImage/' . $img . '" alt="" />' ?></a></li>
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

<footer class="">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-4">
                    <div class="footer-box">
                        <div class="footer-logo">
                            <img src="assets/img/logo.png" class="img-responsive" alt="">
                        </div>
                        <p>Parenthood is a social networking and knowledge sharing platform for Parents, to make their Parenthood more positive and memorable. A community where likeminded parents are there to support their fellow members</p>
                        <p>Contact us on <a href="mailto:info@example.com"><strong>parenthoodglobal@gmail.com</strong></a></p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="footer-box">
                        <h3 class="widget-title">Twitter</h3>
                        <ul class="twitter-widget">
                            <li>
                                <div class="icon"><i class="ti-twitter"></i></div>
                                <div class="tweet-text">
                                    So proud to have become an <a target="_blank" href="#">@envato</a> Power Elite author. Drop our #ThemeForest: <a target="_blank" href="#">https://t.co/jGyLLggygN</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><i class="ti-twitter"></i></div>
                                <div class="tweet-text">
                                    So proud to have become an <a target="_blank" href="#">@envato</a> Power Elite author. Drop out our #ThemeForest: <a target="_blank" href="#">https://t.co/jGyLLggygN</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2">
                    <div class="footer-box">
                        <h3 class="widget-title">Need help</h3>
                        <ul class="footer-cat">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Parents</a></li>
                            <li><a href="#">Trending</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="footer-box">
                        <h3 class="widget-title">Contact us</h3>
                        <div class="textwidget">
                            <p>457 BIgBlue Street, Suite 4A<br>
                                New York, NY 10013<br>
                                <span>(315) 5512-2579</span><br>
                                <a href="mailto:stylo@edge-themes.com">info@example.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        Copyright © 2017 by Bdtask. All Rights Reserved.
    </div>
</footer>
<!-- /.End of footer -->