<div class="top-header dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-7">
                <div class="header-nav">
                    <ul>
                        <li><span class="headre-weather"><i class="fa fa-calendar-check-o"></i>&nbsp;
                                <?php echo date('d - F - Y'); ?></span></li>
                        <!-- <li><a href="contact.html">Contact</a></li>
                        <li><a href="about-me.html">about</a></li>
                        <li><a href="#">Buy now!</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-5">
                <ul class="top-socia-share">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#user-modal">Login / Register</a>
                    </li>
                    <!-- <li>
                        <div class="weather-top">
                            <i class="fa fa-cloud"></i>
                            <div class="weather-now">
                                <span class="degrees">- 5.9</span>
                                <span class="unit">C</span>
                            </div>
                            <div class="weather-city">New York</div>
                        </div>
                    </li> -->
            </div>
        </div>
    </div>
</div>
<!-- /.End of top header -->
<nav class="navbar navbar-inverse navbar-sticky navbar-mobile bootsnav">
    <div class="container">
        <div class="attr-nav">
            <ul>
                <li><a href="javascript:void(0)" data-toggle="modal" data-target="#user-modal"><i
                            class="fa fa-user"></i></a></li>
                <li class="side-menu"><a href="javascript:void(0)"><i class="fa fa-bars"></i></a></li>
                <li id="btn-search1"><a href="javascript:void(0)" id="btn-search2"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>
        <!-- End Atribute Navigation -->
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.html"><img src="assets/img/logo-white.png" class="logo" alt=""></a>
        </div>
        <!-- End Header Navigation -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-center" data-in="navFadeInDown" data-out="navFadeOutUp">
                <li class="">
                    <a href="index.php" class="dropdown-toggle">Home</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Community</a>
                    <ul class="dropdown-menu">
                        <li><a href="whyUs.php">Why Us</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Parents</a>
                    <ul class="dropdown-menu">
                        <li><a href="post.php">Parenthood Life</a></li>
                        <li><a href="#">Expecting Parents</a></li>
                        <li><a href="#">New Parents with Toddlers</a></li>
                        <li><a href="#">Expert Advice</a></li>
                    </ul>
                </li>
                
                <li class="">
                    <a href="trending.php" class="dropdown-toggle">Trending</a>
                </li>
                <!-- /.End of category menu -->
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<!-- <div class="clearfix"></div> -->
<!-- /.End of navigation -->
<div class="search">
    <button id="btn-search-close" class="btn btn--search-close" aria-label="Close search form"> <i
            class="ti-close"></i></button>
    <!-- <form class="search__form" action="javascript:void(0)" method="post">
        <input class="search__input" name="search" type="search" placeholder="Search and hit enter..." />
        <span class="search__info">Hit enter to search or ESC to close</span>
    </form> -->
    <!-- <div class="search__related">
        <div class="search__suggestion">
            <h3>May We Suggest?</h3>
            <p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes #yesyes #aliens #green
            </p>
        </div>
        <div class="search__suggestion">
            <h3>Is It This?</h3>
            <p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny #catgif #broken #lost
            </p>
        </div>
        <div class="search__suggestion">
            <h3>Needle, Where Art Thou?</h3>
            <p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes #aliens #green #drone
            </p>
        </div>
    </div> -->
</div>