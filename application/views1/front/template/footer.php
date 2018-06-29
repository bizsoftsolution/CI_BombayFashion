<!--Start-newsletter-wrap-->
            <div class="news-letter-wrap">
                <div class="container">
                    <div class="row">
                        <div class="news-subscribe">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="letter-text">
                                    <h3><span class="h-color">Don't</span> Miss Out <br> <span><img src="images/newsletter/1.png" alt=""></span></h3>
                                    <p>Subscribe for the latest styles and sales, plus get <span class="h-color">30%</span> offer <br> your first order.</p>
                                </div>
                            </div>    
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="email-area">
                                    <form class="input-group" action="" method="post">
                                        <span class="input-group-addon icon-envlop">
                                        <i class="fa fa-envelope-o"></i>
                                        </span>
                                        <input type="email" class="form-control form_text" placeholder="Enter your email address">
                                        <input type="submit" class="submit" value="Sign up" style="    padding: 16px 18px;">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-newsletter-wrap-->
            <!--Start-footer-wrap-->
            <footer class="footer-area">
                <div class="footer-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="footer-logo">
                                    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/Rev_2.png" alt="Logo Demo"></a>
                                </div>
                                <!--footer-text-start-->
                                <div class="footer-top-content">
                                    <p class="des">We offer first class tailoring with pro tailors from overseas. Not only that our boutique brings in Bombay's true colours. Come and visit you will know</p>
                                    <div class="footer-read-more">
                                        <a href="#">read more</a>
                                         <span><i class="fa fa-long-arrow-right"></i></span>
                                    </div>
                                </div>
                                <!--footer-text-end-->
                                <!--footer-link-area-start-->
                                <div class="social-icon">
                                    <h4>FOLLOW US ON</h4>
                                    <a class="faceb" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                                     <a class="twitt" href="#" title="Twitter" ><i class="fa fa-twitter"></i></a>
                                    <a class="tumb" href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a>
                                    <a class="google" href="#" title="Google-plus"><i class="fa fa-google-plus"></i></a>
                                    <a class="dribb" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                                </div>
                                <!--footer-link-area-end-->
                            </div>
                            <!--footer-tag-area-start-->
                            <!--div class="tag-area">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                    <h3 class="wedget-title">Related Tags</h3>
                                    <div class="footer-top-content">
                                        <ul>
											<?php 
												$data1 = $this->db->get("tbl_category")->result();
												foreach($data1 as $row1)
												{
											?>
                                            <li><a href=""><?php echo $row1->category; ?></a></li>
											<?php 
												}
											?>
                                           
                                        </ul>
                                        <!--div class="view-all-tag">
                                            <ul>
                                                <li><a href="#">View All Tags</a></li>
                                            </ul>
                                        </div->
                                    </div>
                                </div>
                            </div-->
                            <!--footer-tag-area-end-->
                            <!--footer-account-area-start-->
                            <div class="footer-account-area footer-none">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <h3 class="wedget-title">My account</h3>
                                    <div class="footer-top-content">
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>Customer">My Account</a></li>
                                            <li><a href="<?php echo base_url(); ?>Cart">My Cart</a></li>
                                            <!--li><a href="#">Wishlist</a></li-->
                                            <li><a href="#">Sitemap</a></li>
                                            <!--li><a href="#">Safe shopping</a></li-->
                                            <li><a href="#">Privacy Policy</a></li>
                                            <!--li><a href="#">Discount</a></li-->
                                            <!--li><a href="#">Advanced Search</a></li-->
                                            <li><a href="<?php echo base_url(); ?>Front/ContactUs">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--footer-account-area-end-->
                            <!--footer-contact-info-start-->
                            <div class="footer-contact-info">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <h3 class="wedget-title">Contact Us</h3>
                                    <div class="footer-contact">
                                        <p class="adress">
										<label>Address:</label>
										<span class="ft-content">11 A Jalan Anggerik Eria 31/AU <br/> Kota Kemuning,Shah Alam, </span>
										</p>
                                        <p class="adress"><label></label><span class="ft-content">Selangor, Malaysia</span></p>
                                        <p class="phone"><label>Phone:</label><span class="ft-content phone-num"><span class="phone1">+60 16-790 0221</span><!--span class="phone2">(0) 0123 456 789</span--></span></p>
                                        <p class="web"><label>Email:</label><span class="ft-content web-site"><a href="mailto:">sharah_joey@yahoo.com</a></span></p>
                                    </div>
                                </div>
                            </div>
                            <!--footer-contact-info-end-->
                        </div>
                    </div>
                </div>
                <!--footer-top-area-end-->
                <!--footer-bottom-area-start-->
                <div class="footer-bottom-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="copy-right" style="text-align: center;">
                                    <span> Copyright &copy; <a href="">Bombay Fashion</a>. All Rights Reserved.</span>
                                </div>
                            </div>
                            <!--div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="payment-area">
                                    <ul>
                                        <li><a title="Paypal" href="#"><img src="<?php echo base_url(); ?>assets/frontend/images/payment/1.png" alt="Paypal"></a></li>
                                        <li><a title="Visa" href="#"><img src="<?php echo base_url(); ?>assets/frontend/images/payment/2.png" alt="Visa"></a></li>
                                        <li><a title="Bank" href="#"><img src="<?php echo base_url(); ?>assets/frontend/images/payment/3.png" alt="Bank"></a></li>
                                        <li class="hidden-xs"><a title="Mastercard" href="#"><img src="<?php echo base_url(); ?>assets/frontend/images/payment/4.png" alt="Mastercard"></a></li>
                                        <li><a title="Discover" href="#"><img src="<?php echo base_url(); ?>assets/frontend/images/payment/5.png" alt="Discover"></a></li>
                                    </ul>
                                </div>
                            </div-->
                        </div>
                    </div>
                </div>
                <!--footer-bottom-area-end-->
            </footer>
            <!--End-footer-wrap-->
			
	</div>
        <!--End-main-wrapper-->
		
<!-- all js here -->
		<!-- jquery latest version -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
		<!-- Modernizr a JavaScript library that detects HTML5 and CSS3 features in the user’s browser -->
<script src="<?php echo base_url(); ?>assets/image_zoom/js/modernizr.custom.js" type="text/javascript"></script>
<!-- GlassCase plugin's JS script file -->
<script src="<?php echo base_url(); ?>assets/image_zoom/js/jquery.glasscase.min.js" type="text/javascript"></script>
		<!-- owl.carousel js -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/owl.carousel.min.js"></script>
		<!-- meanmenu.js -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.meanmenu.js"></script>
		<!-- nivo.slider.js -->
        <script src="<?php echo base_url(); ?>assets/frontend/lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/lib/home.js" type="text/javascript"></script>
		<!-- jquery-ui js -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery-ui.min.js"></script>
		<!-- scrollUp.min.js -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.scrollUp.min.js"></script>
		<!-- jquery.parallax.js -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.parallax.js"></script>
		<!-- sticky.js -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.sticky.js"></script>
        <!-- jquery.simpleGallery.min.js -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.simpleGallery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.simpleLens.min.js"></script>
		<!-- cascade-slider.js -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/cascade-slider.html"></script>
		<!-- countdown.min.js -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.countdown.min.js"></script>
		<!-- wow js -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/wow.min.js"></script>
		<!-- plugins js -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/plugins.js"></script>
		<!-- main js -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/main.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/jquery.validate.js"></script>
		
		<!-- font libs -->
		<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
		
		<!-- demo page styles -->
		<link href="<?php echo base_url(); ?>assets/jplist/css/jplist.demo-pages.min.css" rel="stylesheet" type="text/css" />
		
		<script src="<?php echo base_url(); ?>assets/frontend/custom/js/product_list.js"></script>
		<!-- jPList core js and css  -->
		<link href="<?php echo base_url(); ?>assets/jplist/css/jplist.core.min.css" rel="stylesheet" type="text/css" />		
		<script src="<?php echo base_url(); ?>assets/jplist/js/jplist.core.min.js"></script>		
	
		<!-- jplist pagination bundle -->
		<script src="<?php echo base_url(); ?>assets/jplist/js/jplist.pagination-bundle.min.js"></script>
		<link href="<?php echo base_url(); ?>assets/jplist/css/jplist.pagination-bundle.min.css" rel="stylesheet" type="text/css" />
		
		<!-- jPList views control -->
		<script src="<?php echo base_url(); ?>assets/jplist/js/jplist.list-grid-view.min.js"></script>
		<link href="<?php echo base_url(); ?>assets/jplist/css/jplist.list-grid-view.min.css" rel="stylesheet" type="text/css" />
		
		<!-- jPList sort bundle -->
		<script src="<?php echo base_url(); ?>assets/jplist/js/jplist.sort-bundle.min.js"></script>
		
		<!-- jPList toggle bundle -->
		<script src="<?php echo base_url(); ?>assets/jplist/js/jplist.filter-toggle-bundle.min.js"></script>
		<link href="<?php echo base_url(); ?>assets/jplist/css/jplist.filter-toggle-bundle.min.css" rel="stylesheet" type="text/css" />
		<!-- jPList start -->
		<script>
		$('document').ready(function(){
		
			$('#demo').jplist({				
				itemsBox: '.list' 
				,itemPath: '.list-item' 
				,panelPath: '.jplist-panel'	
			});
		});
		</script>

<style>
.help-inline-error
{
	color: #ff0016;
}
</style>		
<script type="text/javascript">
  
  jQuery().ready(function() {

    // validate form on keyup and submit
    var v = jQuery("#basicform").validate({
      rules: {
        fname: {
          required: true,
          minlength: 2,
          maxlength: 16
        },
		lname: {
          required: true,
          minlength: 1,
          maxlength: 16
        },
		address1: {
          required: true,
          minlength: 3,
          maxlength: 100
        },
		address21: {
          required: true,
          minlength: 3,
          maxlength: 100
        },
        email: {
          required: true,
          minlength: 2,
          email: true,
          maxlength: 100,
        },
		phone: {
          required: true,
          number: true
        },
		city: {
          required: true,
          minlength: 3,
          maxlength: 25
        },
		state: {
          required: true,
          minlength: 3,
          maxlength: 25
        },
		postcode: {
			required: true,
			number: true
        },
		country: {
			required: true,
        },
		
		
        pwd: {
          required: true,
          minlength: 6,
          maxlength: 15,
        },
        cpwd: {
          required: true,
          minlength: 6,
          equalTo: "#pwd",
        }

      },
      errorElement: "span",
      errorClass: "help-inline-error",
    });


  });
</script>
		
		<script type="text/javascript">
			$(document).ready( function () {
				//If your <ul> has the id "glasscase"
				$('#glasscase').glassCase();
			});
		</script>
    </body>
</html>