
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-3.1.1.min.js"></script>   
   <style>
          
    .active
    {
        border: 2px solid #0000ff;
    }

            </style>
<!-- Start-banner-area-->
	<!--div class="banner-area padding-t banner-dis1">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="single-banner banner-r-b">
						<a href="#"><img alt="Hi Guys" src="<?php echo base_url(); ?>assets/frontend/images/banner/1.jpg" /></a>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<div class="single-banner banner-m-b">
						<a href="#"><img alt="Hi Guys" src="<?php echo base_url(); ?>assets/frontend/images/banner/2.jpg" /></a>
					</div>
					<div class="single-banner banner-r-b">
						<a href="#"><img alt="Hi Guys" src="<?php echo base_url(); ?>assets/frontend/images/banner/3.jpg" /></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="single-banner banner-4">
						<a href="#"><img alt="Hi Guys" src="<?php echo base_url(); ?>assets/frontend/images/banner/4.jpg" /></a>
					</div>
				</div>
			</div>
		</div>
	</div-->
<!--Start-latest-products-wrap-->
            <div class="latest-products-wrap padding-t">
                <div class="container">
                    <div class="latest-content text-center">
                        <div class="section-heading">
                            <h3><span class="h-color">FEATURED</span> PRODUCTS</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="featured-carousel indicator">
                            <!-- Start-single-product -->
							<?php 
									$data2 = $this->db->get("tbl_product")->result();
									foreach($data2 as $data2_row)
									{
										if($data2_row->status == 1)
										{
										if($data2_row->featured_product == 1)
										{	
										//$split_image =  explode(",",$data2_row->product_image);
							?>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product <?php if($data2_row->quantity > 0) { echo ""; } else { echo "sold-out";} ?>">
								<?php 
								if($data2_row->quantity > 0)
								{
									echo '<div class="sale">Sale</div>';
								}
								else
								{
									echo "";
								}
								?>
								<?php 
								//if($data2_row->latest_product == 1)
								//{
								//	echo '<div class="new">new</div> ';
								//}
								//else
								//{
									//echo "";
								//}
								?>
                                <div class="sale-border"></div>
									<form class="cart" action="<?php echo base_url();?>Cart/add" method="post">
                                    <div class="product-img-wrap"> 
                                        <a class="product-img" href="<?php echo base_url(); ?>Front/ProductDescription/<?php echo $data2_row->id; ?>"> 
										<img src="<?php echo base_url(); ?>upload/products/banner/<?php echo $data2_row->banner_image;?>" alt="product-image" style="width:263px;height:394px;" class="img-responsive"/>
										</a>
                                        <div class="add-to-link"> 
                                            <!--a href="#">
                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                            </a-->
											<!--a href="<?php echo base_url(); ?>Front/ProductDescription/<?php echo $data2_row->id; ?>">
                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                            </a-->
											<!--data-toggle="modal" data-target="#productModal" href="#"-->
                                            <a href="<?php echo base_url(); ?>Front/ProductDescription/<?php echo $data2_row->id; ?>">
                                                <div><i class="fa fa-eye"></i><span>View Details</span></div>
                                            </a>
											
                                            <!--a href="#">
                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                            </a-->
                                        </div>
										<?php if($data2_row->quantity > 0) 
										{
										?>
                                        <div class="add-to-cart" style="    background: #ffbb00;">
										<input type="hidden" name="color" id="productcolor" value="" />
                                        <input type="hidden" name="size" id="productsize" value="" />
										<input type="hidden" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
										<?php 
										//echo $row->id;
										echo form_hidden('id', $data2_row->id);
										echo form_hidden('name', $data2_row->product_name);
										echo form_hidden('price', $data2_row->product_price);
										echo form_hidden('image', $data2_row->banner_image);
										?>
                                            <!--a href="<?php echo base_url(); ?>" title="add to cart"-->
                                                <div><i class="fa fa-shopping-cart"></i><button type="submit" class="add-cart item_add" name="action" style="    background: #ffbb00;
    border: 1px solid #ffbb00;
    font-size: 15px;
    font-weight: bold;"><span>Add to cart</span></button></div>
                                            <!--/a-->
                                        </div>
										<?php 
										}
										else
										{
										?>
										<div class="sold-text">
                                            <span>Sold <br> Out</span>
                                        </div>										
										<?php 
										}
										?>
                                    </div>
									</form>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name"><?php echo $data2_row->product_name; ?></h3></a>
                                            <!--div class="pro-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div-->
											<?php 
											if($data2_row->discount != 0)
											{
											?>
                                            <div class="pro-price">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">RM <?php echo number_format($data2_row->product_price - ($data2_row->product_price * $data2_row->discount / 100), 2); ?></span>
                                                <span class="old-price"><del>RM <?php echo number_format($data2_row->product_price, 2); ?></del></span>
                                            </div>
											<?php 
											}
											else
											{
											?>
											<div class="pro-price">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">RM <?php echo number_format($data2_row->product_price - ($data2_row->product_price * $data2_row->discount / 100), 2); ?></span>
                                               
                                            </div>
											<?php 
											}
											?>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<?php
										}
									}	
									}
							?>
                            <!-- End-single-product -->
                        </div>
                    </div>
                </div>
            </div>
            <!--End-latest-products-wrap-->
			<div class="clear"></div>
            <!--Start-banner-area-->
            <!--Satar-business-policy-wrap-->
            <div class="business-policy-wrap padding-t">
                <div class="container">
                    <div class="row">
                       <!--Satar-single-p-wrap-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-p-wrap banner-r-b text-center">
                                <span><i class="fa fa-plane"></i></span>
                                <h4>FREE SHIPPING WORLDWIDE.</h4>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, veniam.</p-->
                            </div>
                        </div>
                        <!--end-single-p-wrap-->
                        <!--Satar-single-p-wrap-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-p-wrap banner-r-b text-center">
                                <span><i class="fa fa-life-ring"></i></span>
                                <h4>24/7 CUSTOMER SERVICE.</h4>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, veniam.</p-->
                            </div>
                        </div>
                        <!--end-single-p-wrap-->
                        <!--Satar-single-p-wrap-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-p-wrap banner-r-b text-center">
                                <span><i class="fa fa-money"></i></span>
                                <h4>100% MONEY BACK</h4>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, veniam.</p-->
                            </div>
                        </div>
                        <!--end-single-p-wrap-->
                        <!--Satar-single-p-wrap-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-p-wrap text-center">
                                <span><i class="fa fa-clock-o"></i></span>
                                <h4>OPEN: 09:30 AM - CLOSE: 21:30 PM.</h4>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, veniam.</p-->
                            </div>
                        </div>
                        <!--end-single-p-wrap-->
                    </div>
                </div>
            </div>
            <!--End-business-policy-wrap-->
            <div class="clear"></div>
			
			            <!--Start-latest-products-wrap-->
            <div class="latest-products-wrap padding-t">
                <div class="container">
                    <div class="latest-content text-center">
                        <div class="section-heading">
                            <h3><span class="h-color">latest</span> Products</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="featured-carousel indicator">
                            <!-- Start-single-product -->
							<?php 
									$data3 = $this->db->get("tbl_product")->result();
									foreach($data3 as $data2_row)
									{
										if($data2_row->status == 1)
										{
										if($data2_row->latest_product == 1)
										{
							?>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product <?php if($data2_row->quantity > 0) { echo ""; } else { echo "sold-out";} ?>">
                                <?php 
								if($data2_row->quantity > 0)
								{
									echo '<div class="sale">Sale</div>';
								}
								else
								{
									echo "";
								}
								?>
                                <div class="sale-border"></div>
									<form class="cart" action="<?php echo base_url();?>Cart/add" method="post">
                                    <div class="product-img-wrap"> 
                                        <a class="product-img" href="<?php echo base_url(); ?>Front/ProductDescription/<?php echo $data2_row->id; ?>"> 
										<img src="<?php echo base_url(); ?>upload/products/banner/<?php echo $data2_row->banner_image;?>" alt="product-image" style="width:263px;height:394px;" class="img-responsive"/>
										</a>
                                        <div class="add-to-link"> 
                                            <!--a href="#">
                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                            </a-->
											<a href="<?php echo base_url(); ?>Front/ProductDescription/<?php echo $data2_row->id; ?>">
                                                <div><i class="fa fa-eye"></i><span>View Details</span></div>
                                            </a>
                                            <!--a data-toggle="modal" data-target="#productModal" href="#">
                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                            </a-->
                                            <!--a href="#">
                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                            </a-->
                                        </div>
										<?php if($data2_row->quantity > 0) 
										{
										?>
                                        <div class="add-to-cart" style="    background: #ffbb00;">
										<input type="hidden" name="color" id="productcolor" value="" />
                                        <input type="hidden" name="size" id="productsize" value="" />
										<input type="hidden" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
										<?php 
										//echo $row->id;
										echo form_hidden('id', $data2_row->id);
										echo form_hidden('name', $data2_row->product_name);
										echo form_hidden('price', $data2_row->product_price);
										echo form_hidden('image', $data2_row->banner_image);
										?>
                                            <!--a href="<?php echo base_url(); ?>" title="add to cart"-->
                                                <div><i class="fa fa-shopping-cart"></i><button type="submit" class="add-cart item_add" name="action" style="    background: #ffbb00;
    border: 1px solid #ffbb00;
    font-size: 15px;
    font-weight: bold;"><span>Add to cart</span></button></div>
                                            <!--/a-->
                                        </div>
										<?php 
										}
										else
										{
										?>
										<div class="sold-text">
                                            <span>Sold <br> Out</span>
                                        </div>										
										<?php 
										}
										?>
                                    </div>
									</form>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name"><?php echo $data2_row->product_name; ?></h3></a>
                                            <!--div class="pro-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div-->
											<?php 
											if($data2_row->discount != 0)
											{
											?>
                                            <div class="pro-price">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">RM <?php echo number_format($data2_row->product_price - ($data2_row->product_price * $data2_row->discount / 100), 2); ?></span>
                                                <span class="old-price"><del>RM <?php echo number_format($data2_row->product_price, 2); ?></del></span>
                                            </div>
											<?php 
											}
											else
											{
											?>
											<div class="pro-price">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">RM <?php echo number_format($data2_row->product_price - ($data2_row->product_price * $data2_row->discount / 100), 2); ?></span>
                                               
                                            </div>
											<?php 
											}
											?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<?php
										}
									}	
									}									
							?>
                            <!-- End-single-product -->
                            
                            
                        </div>
                    </div>
					<br>
                </div>
            </div>
            <!--End-latest-products-wrap-->
			<div class="clear"></div>

	
			        