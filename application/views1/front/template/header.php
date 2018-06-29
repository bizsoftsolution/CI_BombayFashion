<!doctype html>
<html class="no-js" lang="en">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bombay Fashion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800i" rel="stylesheet">
        
        <!-- favicon icon -->
        <link rel="shortcut icon" type="images/png" href="images/favicon.ico">
        
		<!-- all css here -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/style.css">
		
		<link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/image_zoom/css/glasscase.min.css"/>
		<!-- modernizr css -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
	<div class="preloader">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object object_one"></div>
				<div class="object object_two"></div>
				<div class="object object_three"></div>
			</div>
		</div>
	</div>
	<div class="page-1">
            <!--Start-Header-area-->
            <header>
                <div class="header-top-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="header-top-left">
                                    <!--Start-Header-language-->
                                    <!--div class="dropdown top-language-wrap"> <a role="button" data-toggle="dropdown" data-target="#" class="top-language dropdown-toggle" href="#"> <img src="images/flag/e.png" alt="language"> English <span class="caret"></span> </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li role="presentation"><a role="menuitem" href="#"><img src="images/flag/e.png" alt="language"> English </a></li>
                                            <li role="presentation"><a role="menuitem" href="#"><img src="images/flag/f.png" alt="language"> French </a></li>
                                            <li role="presentation"><a role="menuitem" href="#"><img src="images/flag/g.png" alt="language"> German </a></li>
                                        </ul>
                                    </div-->
                                    <!--End-Header-language-->
                                    <!--Start-Header-currency-->
                                    <!--div class="dropdown top-currency-wrap"> <a role="button" data-toggle="dropdown" data-target="#" class="top-currency dropdown-toggle" href="#"><span class="usd-icon"><i class="fa fa-usd"></i></span> USD <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li role="presentation"><a role="menuitem" href="#"> $ - Dollar </a></li>
                                            <li role="presentation"><a role="menuitem" href="#"> £ - Pound </a></li>
                                            <li role="presentation"><a role="menuitem" href="#"> € - Euro </a></li>
                                        </ul>
                                    </div-->
                                    <!--End-Header-currency-->
                                    <!--Start-welcome-message-->
                                    <div class="welcome-mg hidden-xs"><span>Welcome To Bombay Fashion!</span></div>
                                    <!--End-welcome-message--> 
                                </div>
                            </div>
                            <!-- Start-Header-links -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="header-top-right">
                                    <div class="top-link-wrap">
                                        <div class="single-link">
                                            <!--div class="my-account"><a href=""><span class="">My Account</span></a></div-->
                                            <!--div class="wishlist"><a href=""><span class="">Wishlist</span></a></div-->
                                            <div class="check"><a href="<?php echo base_url(); ?>Checkout"><span class="">Checkout</span></a></div>
                                            <?php 
											if($this->session->userdata('user_type')=="Customer")
											{
											?>
												<div class="login"><a href=""><span  class=""></span></a></div>
												<div class="mainmenu">
												<nav>
												<ul id="nav">
                                                <li style="background: #000;"><a href="<?php echo base_url(); ?>" style="padding: 0px 10px;"><?php echo $this->session->userdata('first_name'); ?></a>
                                                    <ul class="sub-menu" style="width:150px;">
														 <li><a href="<?php echo base_url(); ?>Customer/profile" class="mega-title" style="margin-bottom:0px;padding-bottom: 0px;">Profile</a></li>
                                                        <li><a href="<?php echo base_url(); ?>Customer/logout" class="mega-title" style="margin-bottom:0px;padding-bottom: 0px;">Logout</a></li>
                                                    </ul>
                                                </li>
												</ul>
												</nav>
												</div>
											<?php
											}
											else
											{
											?>
												<div class="login"><a href="<?php echo base_url(); ?>Customer"><span  class="">Log In</span></a></div>
											<?php 
											}
											?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- End-Header-links -->
                        </div>
                    </div>
                </div>
                <!--Start-header-mid-area-->
                <div class="header-mid-wrap">
                    <div class="container">
                        <div class="header-mid-content">
                            <div class="row">
                                <!--Start-logo-area-->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="header-logo">
                                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/Rev_2.png" alt="Bombay Fashion"></a>
                                    </div>
                                </div>
								<!--div class="col-lg-6">&nbsp;</div-->
                                <!--End-logo-area-->
                                <!--Start-gategory-searchbox-->
								<div class="col-lg-2"></div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<form class="form-inline" style="margin: 15px 0;" action="<?php echo base_url(); ?>Front/SearchList" method="POST">
									  <div class="form-group">
										<label for="email"></label>
										<select class="form-control" id="sel1" name="searchCategory">
											<option>All Categories</option>
											<?php 
											foreach($category as $row1)
											{
											?>
											<option value="<?php echo $row1->id; ?>"><?php echo $row1->category; ?></option>
											<?php 
											}
											?>
										</select>
									  </div>
									  <button type="submit" class="btn btn-default" 
									  style="background:#ffbb00;color: #fff;
										font-weight: bold;
										font-size: 15px;">Search</button>
									</form>
									<!--form class="header-search-box1" action="#" method="post">
									 <div class="search-cat">
										<select class="category-items" name="category" style="margin: 9px 0;background:#fff;">
											<option>All Categories</option>
											<?php 
											foreach($category as $row1)
											{
											?>
											<option value="<?php echo $row1->id; ?>"><?php echo $row1->category; ?></option>
											<?php 
											}
											?>
										</select>
									</div>
									
									 </form-->
                                    <!--div id="search-category-wrap">
                                        
											
                                           
                                            <!--input type="search" placeholder="Search here..." id="text-search" name="search"->
                                           
                                       
                                    </div-->
                                </div>
                                <!--End-gategory-searchbox-->
                                <!--Start-cart-wrap-->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <ul class="header-cart-wrap">
                                        <li>
										<a href="<?php echo base_url()?>Cart">My Cart
													<?php if(!empty($this->cart->contents()))
													{
														echo '<span style="    color: #ffbb00;
    border: 1px solid;
    border-radius: 100%;
    padding: 2px 8px;
    font-weight: bold;">'.$this->cart->total_items().'</span>';
													}
													else
													{
														echo "0";
													}
											?>
											items
										</a>
										<!--a class="cart" href="#">My Cart: 2 items</a-->
                                            <!--div class="mini-cart-content">
                                                <div class="cart-products-list">
                                                    <div class="sing-cart-pro">
                                                        <div class="cart-image">
                                                            <a href="#"><img src="images/product/4.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-product-info">
                                                            <a href="#" class="product-name"> Sample product </a>
                                                            <div class="cart-price">
                                                                <span class="quantity"><strong> 1 x</strong></span>
                                                                <span class="p-price">$110.00</span>
                                                            </div>
                                                            <a class="edit-pro" title="edit"><i class="fa fa-pencil-square-o"></i></a>
                                                            <a class="remove-pro" title="remove"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="sing-cart-pro">
                                                        <div class="cart-image">
                                                            <a href="#"><img src="images/product/1.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-product-info">
                                                            <a href="#" class="product-name">Sample product </a>
                                                            <div class="cart-price">
                                                                <span class="quantity"><strong> 1 x</strong></span>
                                                                <span class="p-price">$150.00</span>
                                                            </div>
                                                            <a class="edit-pro" title="edit"><i class="fa fa-pencil-square-o"></i></a>
                                                            <a class="remove-pro" title="remove"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cart-price-list">
                                                    <p class="price-amount"><span class="cart-subtotal">SUBTotal :</span> <span>$260.00</span> </p>
                                                    <div class="cart-checkout">
                                                        <a href="#">Checkout</a>
                                                    </div>
                                                    <div class="view-cart">
                                                        <a href="#">View cart</a>
                                                    </div>
                                                </div>
                                            </div-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End-cart-wrap-->
                            </div>
                        </div>    
                    </div>
                </div>
                <!--End-header-mid-area-->
                <!--Start-Mainmenu-area -->
                <div class="mainmenu-area hidden-sm hidden-xs">
                    <div id="sticker"> 
                        <div class="container">
                            <div class="row">   
                                <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                                    <div class="log-small"><a class="logo" href="<?php echo base_url(); ?>"><img alt="" src="<?php echo base_url(); ?>assets/images/Rev_2.png" style="    height: 50px;" class="img-responsive"></a></div>
                                    <div class="mainmenu">
                                        <nav>
                                            <ul id="nav">
                                                <li><a href="<?php echo base_url(); ?>">Home</a>
                                                    <!--ul class="sub-menu">
                                                        <li><a href="index-2.html" class="mega-title">Homepage</a></li>
                                                        <li><a href="index-3.html">Homepage Version 2</a></li>
                                                        <li><a href="index-4.html">Homepage Version 3</a></li>
                                                        <li><a href="index-5.html">Homepage Version 4</a></li>
                                                        <li><a href="index-6.html">Homepage Version 5</a></li>
                                                    </ul-->
                                                </li>
                                                <!--li class="angle-down"><a href="shop-grid.html">Men</a>
                                                    <div class="megamenu">
                                                        <div class="megamenu-list">
                                                            <span class="mega-single">	
                                                                <a href="shop-grid.html" class="mega-title">Clothing</a>
                                                                <a href="shop-grid.html">Jackets</a>
                                                                <a href="shop-grid.html">Blazers</a>
                                                                <a href="shop-grid.html">T-Shirts</a>
                                                                <a href="#">Collections</a>
                                                            </span>
                                                            <span class="mega-single">	
                                                                <a href="shop-grid.html" class="mega-title">Dresses</a>
                                                                <a href="shop-grid.html">Evening</a>
                                                                <a href="shop-grid.html">Cocktail</a>
                                                                <a href="shop-grid.html">Footwear</a>
                                                                <a href="shop-grid.html">Sunglass</a>
                                                            </span>
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Handbags</a>
                                                                <a href="shop-grid.html">Bootees Bags</a>
                                                                <a href="shop-grid.html">Exclusive</a>
                                                                <a href="shop-grid.html">Furniture</a>
                                                                <a href="shop-grid.html">Jackets</a>
                                                            </span>
                                                            <span class="mega-single">			
                                                                <a href="shop-grid.html" class="mega-title">Jewellery</a>
                                                                <a href="shop-grid.html">Earrings</a>
                                                                <a href="shop-grid.html">Braclets</a>
                                                                <a href="shop-grid.html">Nosepins</a>
                                                                <a href="shop-grid.html">Bangels</a>
                                                            </span>
                                                            <span>
                                                                <a href="shop-grid.html" class="mega-banner">
                                                                    <img src="images/menu/1.jpg" alt="Hi">
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li-->
                                                <li class="angle-down"><a href="#">Women</a>
                                                    <div class="megamenu" style="width: 200px;">
                                                        <div class="megamenu-list">
                                                            <!--span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Clothing</a>
                                                                <a href="shop-grid.html">Jackets</a>
                                                                <a href="shop-grid.html">Blazers</a>
                                                                <a href="shop-grid.html">T-Shirts</a>
                                                                <a href="#">Collections</a>
                                                            </span>
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Dresses</a>
                                                                <a href="shop-grid.html">Cocktail</a>
                                                                <a href="shop-grid.html">Evening</a>
                                                                <a href="shop-grid.html">Footwear</a>
                                                                <a href="shop-grid.html">Sunglass</a>
                                                            </span>
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Handbags</a>
                                                                <a href="shop-grid.html">Bootees Bags</a>
                                                                <a href="shop-grid.html">Exclusive</a>
                                                                <a href="shop-grid.html">Furniture</a>
                                                                <a href="shop-grid.html">Jackets</a>
                                                            </span-->
															
                                                            <span class="mega-single">
															
                                                                <a class="mega-title">Women</a>
																<?php 
																foreach($category as $row2)
																{
																	if($row2->category != "Jewellery")
																	{
															?>
                                                                <a href="<?php echo base_url(); ?>Front/ProductList/<?php echo $row2->id; ?>"><?php echo $row2->category; ?></a>
																<?php 
																	}
																}
															?>
                                                            </span>
															
                                                            <!--span>				
                                                                <a href="shop-grid.html" class="mega-banner">
                                                                    <img src="images/menu/2.jpg" alt="Hi">
                                                                </a>
                                                            </span-->
                                                        </div>
                                                    </div>
                                                </li>
												<li class="angle-down"><a href="#">Accessories</a>
                                                    <div class="megamenu" style="width:500px;">
                                                        <div class="megamenu-list">
															
                                                            <span class="mega-single">
															
                                                                <a class="mega-title">Accessories</a>
															<?php 
																foreach($category as $row2)
																{
																	if($row2->category == "Jewellery")
																	{
															?>	
                                                                <a href="<?php echo base_url(); ?>Front/ProductList/<?php echo $row2->id; ?>"><?php echo $row2->category; ?></a>
															<?php 
																	}
															}
															?>
                                                            </span>
															
                                                        </div>
                                                    </div>
                                                </li>
                                                <!--li class="angle-down"><a href="index-2.html">Pages</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="single-product.html">Single Product</a></li>
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="blog-details.html">Blog Details</a></li>
                                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="shop-list.html">Shop List</a></li>
                                                        <li><a href="shop-right-sidebar.html">Shop Right Sidbar</a></li>
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                        <li><a href="404.html">404</a></li>
                                                    </ul>
                                                </li-->
                                                <li><a href="<?php echo base_url(); ?>Front/ContactUs">Contact Us</a></li>
                                            </ul>
                                        </nav>
                                    </div>        
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
                <!--End-Mainmenu-area-->
                <!--Start-Mobile-Menu-Area -->
                <div class="mobile-menu-area visible-sm visible-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>">Home</a>
                                                <!--ul>
                                                    <li><a href="index-3.html">Home 2</a></li>
                                                    <li><a href="index-4.html">Home 3</a></li>
                                                    <li><a href="index-5.html">Home 4</a></li>
                                                    <li><a href="index-6.html">Home 5</a></li>
                                                </ul-->
                                            </li>
                                            <!--li><a href="shop-grid.html">Men</a>
                                                <ul>
                                                    <li><a href="shop-grid.html">Clothing</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Jackets</a></li>
                                                            <li><a href="shop-grid.html">Blazers</a></li>
                                                            <li><a href="shop-grid.html">T-Shirts</a></li>
                                                            <li><a href="shop-grid.html">Collections</a></li>
                                                        </ul>
                                                    </li> 
                                                    <li><a href="shop-grid.html">Dresses</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Evening</a></li>
                                                            <li><a href="shop-grid.html">Cocktail</a></li>
                                                            <li><a href="shop-grid.html">Footwear</a></li>
                                                            <li><a href="shop-grid.html">Sunglass</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop-grid.html">Handbags</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Bootees Bags</a></li>
                                                            <li><a href="shop-grid.html">Exclusive</a></li>
                                                            <li><a href="shop-grid.html">Jackets</a></li>
                                                            <li><a href="shop-grid.html">Furniture</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop-grid.html">Jewellery</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Earrings</a></li>
                                                            <li><a href="shop-grid.html">Braclets
        </a></li>
                                                            <li><a href="shop-grid.html">Nosepins</a></li>
                                                            <li><a href="shop-grid.html">SweaBangelsters</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li-->
                                            <li><a href="#">Women</a>
                                                <ul>
                                                    <!--li><a href="shop-grid.html">Clothing</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Jackets</a></li>
                                                            <li><a href="shop-grid.html">Blazers</a></li>
                                                            <li><a href="shop-grid.html">T-Shirts</a></li>
                                                            <li><a href="shop-grid.html">Collections</a></li>
                                                        </ul>
                                                    </li> 
                                                    <li><a href="shop-grid.html">Dresses</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Evening</a></li>
                                                            <li><a href="shop-grid.html">Cocktail</a></li>
                                                            <li><a href="shop-grid.html">Footwear</a></li>
                                                            <li><a href="shop-grid.html">Sunglass</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop-grid.html">Handbags</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Bootees Bags</a></li>
                                                            <li><a href="shop-grid.html">Exclusive</a></li>
                                                            <li><a href="shop-grid.html">Jackets</a></li>
                                                            <li><a href="shop-grid.html">Furniture</a></li>
                                                        </ul>
                                                    </li-->
													
													<?php 
														foreach($category as $row2)
														{
															if($row2->category != "Jewellery")
																	{
													?>
                                                  

                                                            <li><a href="<?php echo base_url(); ?>Front/ProductList/<?php echo $row2->id; ?>"><?php echo $row2->category; ?></a></li>

                                                 
													<?php 
																	}
														}
													?>
                                                </ul>
                                            </li>
											<li><a href="#">Accessories</a>
                                                <ul>
													
													<?php 
														foreach($category as $row2)
														{
															if($row2->category != "Jewellery")
															{
													?>
                                                    
													
                                                      
                                                            <li><a href="<?php echo base_url(); ?>Front/ProductList/<?php echo $row2->id; ?>"><?php echo $row2->category; ?></a></li>
                                                       
                                                   
													<?php 
															}
														}
													?>
                                                </ul>
                                            </li>
                                            <!--li><a href="shop-grid.html">Pages</a>
                                                <ul>
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="single-product.html">Single Product</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                                    <li><a href="shop-list.html">Shop List</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidbar</a></li>
                                                    <li><a href="404.html">404</a></li>
                                                </ul>
                                            </li-->
                                            <li><a href="">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>					
                            </div>
                        </div>
                    </div>
                </div>
                <!--End-Mobile-Menu-Area -->
            </header>
            <!--End-Header-area-->