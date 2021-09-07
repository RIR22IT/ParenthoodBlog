<?php include('./authAction.php') ?>
<?php include('../../database/connection.php'); ?>

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
                            <div class="ui horizontal divider">Or</div>
                            <p>Sign in Using Your Email Address</p>
                            <form action="inc/auth/authAction.php" method="GET">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email"
                                        placeholder="Email" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" id="password" placeholder="Password"
                                        type="text">
                                </div>
                                <div class="block-content">
                                    <!-- <div class="checkbox checkbox-danger">
                                        <input id="checkbox8" type="checkbox">
                                        <label for="checkbox8">
                                            Remember me
                                        </label>
                                    </div> -->
                                    <a href="#" class="forgot">Forgot Password?</a>
                                </div>
                                <!-- <a href="#" class="btn link-btn btn-block btn-rounded" type="submit">Login &#8702;</a> -->
                                <button name="login" type="submit">Login  &#8702;</button>
                                <div class="">Don't have an account? <a href="#">Sign up Now</a></div>
                            </form>

                        </div>
                        <!-- /.End of Login -->
                    </div>
                    <div class="tab-pane fade" id="register">
                        <div class="form-content">
                            <h2 class="text-center">Sign Up For Free</h2>
                            <form method="GET" action="inc/auth/authAction.php">
                                <div class="form-group">
                                    <?php if (isset($_GET['firstname'])) { ?>
                                    <input class="form-control" name="firstname" id="firstname" placeholder="First Name"
                                        type="text" value="<?php echo $_GET['firstname']; ?>">
                                    <?php }else{ ?>
                                    <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <?php if (isset($_GET['lastname'])) { ?>
                                    <input class="form-control" name="lastname" id="lastname" placeholder="Last Name"
                                        type="text" value="<?php echo $_GET['lastname']; ?>">
                                    <?php }else{ ?>
                                    <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <?php if (isset($_GET['email'])) { ?>
                                    <input class="form-control" name="email" id="email" placeholder="Enter Your Email"
                                        type="text" value="<?php echo $_GET['email']; ?>">
                                    <?php }else{ ?>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Enter Your Email">
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <?php if (isset($_GET['mobile'])) { ?>
                                    <input class="form-control" name="mobile" id="mobile"
                                        placeholder="Enter Your Mobile" type="text"
                                        value="<?php echo $_GET['mobile']; ?>">
                                    <?php }else{ ?>
                                    <input type="text" class="form-control" name="mobile"
                                        placeholder="Enter Your Mobile">
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <?php if (isset($_GET['password'])) { ?>
                                    <input class="form-control" name="password" id="password"
                                        placeholder="Enter Your Password" type="password"
                                        value="<?php echo $_GET['password']; ?>">
                                    <?php }else{ ?>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Enter Your Password">
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <?php if (isset($_GET['r_pass'])) { ?>
                                    <input class="form-control" name="r_pass" id="r_pass"
                                        placeholder="Retype Your Password" type="password"
                                        value="<?php echo $_GET['r_pass']; ?>">
                                    <?php }else{ ?>
                                    <input type="password" class="form-control" name="r_pass"
                                        placeholder="Retype Your Password">
                                    <?php } ?>
                                </div>
                                <div class="block-content">
                                    <div><i class="fa fa-shield"></i><span>Your Password at Global Crypto are
                                            encrypted and Secured</span></div>
                                </div>
                                <button name="register">Sign up</button>
                                <!-- <a href="#" class="btn link-btn btn-block btn-rounded" name="reg">Sign Up &#8702;</a> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>