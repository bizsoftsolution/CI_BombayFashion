            <!--start-single-heading-banner-->
            <div class="single-banner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center">
                            <div class="single-ban-top-content">
                                <p>Login</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-single-heading-banner-->
            <!--start-single-heading-->
            <div class="signle-heading login-m">
                <div class="container">
                    <div class="row">
                        <!--start-shop-head -->
                        <div class="col-lg-12">
                            <div class="shop-head-menu">
                                <ul>
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="index-2.html"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">Login</li>
                                </ul>
                            </div>
                        </div>
                        <!--end-shop-head-->
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
            <!-- login-area start -->
            <div class="login-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="login-content banner-r-b">
                                <h2 class="login-title">Login</h2>
                                <p>Hello,Welcome to your account</p>
                                <!--div class="social-sign">
                                    <a class="banner-r-b" href="#"><i class="fa fa-facebook"></i> Sign in with facebook</a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i> Sign in with twitter</a>
                                </div-->
                                <form action="<?php echo base_url();?>Customer/varifyUser" method="POST">
									<?php
										if($this->session->flashdata('login_msg') != "")
										{
										?>
											<div class="alert alert-danger alert-bordered alert-rounded">
												<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
												<span class="text-semibold">Oh snap!</span> <?php echo  $this->session->flashdata('login_msg');?>
											</div>
											
										<?php 
										}
										elseif($this->session->flashdata('signup') != "")
										{
											?>
											<div class="alert alert-success alert-bordered alert-rounded">
												<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
												<span class="text-semibold">Oh snap!</span> <?php echo  $this->session->flashdata('signup');?>
											</div>
										<?php
										}
										?>
                                    <label>Email Address</label>
                                    <input type="text" name="email" placeholder="Email"/>
                                    <label>Password</label>
                                    <input type="password" placeholder="Password" name="password" />
                                    <!--div class="login-lost">
                                        <span class="log-rem">
                                            <input type="checkbox" />
                                            <label>Remember me!</label>
                                        </span>
                                        <span class="forgot-login">
                                            <a href="#">Forgot your password?</a>
                                        </span>
                                    </div-->
                                    <input class="login-sub" type="submit" value="Login" name="Submit"/>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="login-content login-margin">
                                <h2 class="login-title">create a new account</h2>
                                <!--p>Create your own Unicase account.</p-->
                                <!--form action="#"-->
                                    <!--label>Email Address</label>
                                    <input type="text" /-->
									<style>
									
									.login-sub:hover
									{
										background: #ffbb00;
									}
									</style>
                                    <a href="<?php echo base_url(); ?>Customer/Signup" class="login-sub btn btn-default" style="background: #444 none repeat scroll 0 0;
    border: 0 none;
    color: #fff;
    font-weight: 700;
    margin-bottom: 0;
    margin-top: 5px;
    padding: 0 40px;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    width: inherit;    height: 40px;
    line-height: 40px;">Sign up</a>
                                <!--/form-->
                                <div class="sign-up-today">
                                    <h2 class="login-title">sign up today and you'll be able to:</h2>
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-check-square-o"></i>
                                                <span>speed your way through the checkout</span>
                                            </span>									
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa fa-check-square-o"></i>
                                                <span>track your order easily</span>
                                            </span>									
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa fa-check-square-o"></i>
                                                <span>keep a record of your all purchase</span>
                                            </span>									
                                        </li>
                                    </ul>
                                </div>							
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login-area end -->	