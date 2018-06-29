            <!--start-single-heading-banner-->
            <div class="single-banner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="single-ban-top-content">
                                <p>Product List</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-single-heading-banner-->
            <!--start-single-heading-->
            <div class="signle-heading">
                <div class="container">
                    <div class="row">
                        <!--start-shop-head -->
                        <div class="col-lg-12">
                            <div class="shop-head-menu">
                                <ul>
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="<?php echo base_url(); ?>"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">Product List</li>
                                </ul>
                            </div>
                        </div>
                        <!--end-shop-head-->
                    </div>
                </div>
            </div>
			<br><br>
            <!--end-single-heading-->
            <!--start-shop-product-area-->
            <div class="shop-product-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <!-- Left-Sidebar-start-->
                            <div class="left-sidebar-title">
                                <h2>Shopping Options</h2>
                            </div>
                            <!-- Shop-Layout-start -->
                            <div class="left-sidebar">
                                <div class="shop-layout">
                                    <div class="layout-title">
                                        <h2>Category</h2>
                                    </div>
                                    <div class="layout-list">
                                        <ul>
											<?php
											foreach($category as $row2)
											{
											?>
												<li><a href="<?php echo $row2->id; ?>"><?php echo $row2->category; ?></a><!--span>(9)</span--></li>
											<?php 
											}
											?>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <!-- Shop-Layout-end -->
                                <!-- Price-Filter-start -->
                                <!--div class="price-filter-area shop-layout">
                                    <div class="price-filter">
                                        <div class="layout-title">
                                            <h2>Price</h2>
                                        </div>
                                        <p> 
                                          <label class="range-text">Range:</label>
                                          <input type="text" style="border:0; color:#f6931f; font-weight:bold;" readonly="" id="amount">
                                        </p>
                                        <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></span></div>
                                        <button class="btn btn-default">show</button>
                                    </div>
                                </div-->
                                <!-- Price-Filter-end -->
                                <!-- Shop-Layout-start -->
                                <div class="shop-layout">
                                    <div class="layout-title">
                                        <h2>Sub Category</h2>
                                    </div>
                                    <div class="layout-list">
                                        <ul>
											<?php
											$data7 = $this->db->get("tbl_sub_category")->result();
											foreach($data7 as $row3)
												{
											?>
												<li><a href="<?php echo base_url(); ?>Subcategory/ProductList/<?php echo $row3->id;?>"><?php echo $row3->sub_category;?></a><!--span>(2)</span--></li>
											<?php 
											}
											?>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <!-- Shop-Layout-end -->
                                <!-- Shop-Layout-start -->
                                <!--div class="shop-layout">
                                    <div class="layout-title">
                                        <h2>Color</h2>
                                    </div>
                                    <div class="layout-list">
                                        <ul>
                                            <li><a href="#">Black</a><span>(1)</span></li>
                                            <li><a href="#">Blue</a><span>(2)</span></li>
                                            <li><a href="#">Brown</a><span>(3)</span></li>
                                            <li><a href="#">Pink</a><span>(3)</span></li>
                                            <li><a href="#">Red</a><span>(2)</span></li>
                                            <li><a href="#">White</a><span>(2)</span></li>
                                            <li><a href="#">Yellow</a><span>(3)</span></li>
                                        </ul>
                                    </div>
                                </div-->
                                <!-- Shop-Layout-end -->
                            </div>
                            <!-- End-Left-Sidebar -->
                            <!-- Shop-compare-start -->
                            <!--div class="shop-banner-area">
                                <div class="left-sidebar-title">
                                    <h2 class="compare-title contact">Compare Products</h2>
                                </div>
                                <div class="layout-list compare">
                                    <ul>
                                        <li><a href="#">occaecati cupiditate</a><span class="compare-icon"><i class="fa fa-trash"></i></span></li>
                                        <li><a href="#">consequences</a><span class="compare-icon"><i class="fa fa-trash"></i></span></li>
                                        <li><a href="#">pleasure rationally</a><span class="compare-icon"><i class="fa fa-trash"></i></span></li>
                                    </ul>
                                    <div class="compare-action">
                                        <div class="clear-button">
                                            <a href="#">clear all</a>
                                        </div>
                                        <div class="product-cart compare">
                                            <button class="button">compare</button>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                            <!-- Shop-compare-end -->
                            <!-- Shop-Layout-Banner-start -->
                            <!--div class="shop-banner-area banner-r-b">
                                <div class="single-banner">
                                    <div class="single-banner">
                                        <a href="#"><img alt="Hi Guys" src="images/banner/18.jpg" /></a>
                                    </div>
                                </div>
                            </div-->
                            <!-- Shop-Layout-Banner-end -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <!-- Shop-Product-View-start -->
                            <div class="shop-product-view">
                                <!-- Shop Product Tab Area -->
                                <div class="product-tab-area">
                                    <!-- Tab Bar -->
                                    <div class="tab-bar">
                                        <div class="tab-bar-inner">
											<?php 
											
											$data3_1 = $this->db->get_where("tbl_category", array("id"=>$cid))->result();
									foreach($data3_1 as $data2_row)
									{
										?>
                                            <!--ul role="tablist" class="nav nav-tabs">
                                                <li class="active"><a title="Grid" data-toggle="tab" href="#shop-product"><i class="fa fa-th-large"></i><span class="grid" title="Grid">Grid</span></a></li>
                                                <li><a  title="List" data-toggle="tab" href="#shop-list"><i class="fa fa-list"></i><span class="list">List</span></a></li>
                                            </ul-->
											<p style="font-size: 20px;margin:0px;"><?php echo $data2_row->category; ?></p>
										<?php 
									}
										?>
                                        </div>
                                        <div class="toolbar">
                                            <div class="sorter">
                                                <div class="sort-by">
                                                    <label class="sort-none">Sort By</label>
                                                    <select>
                                                        <option value="position">Position</option>
                                                        <option value="name">Name</option>
                                                        <option value="price">Price</option>
                                                    </select>
                                                    <a class="up-arrow" href="#"><i class="fa fa-long-arrow-up"></i></a>
                                                </div>
                                            </div>
                                            <!--div class="pager-list">
                                                <div class="limiter">
                                                    <label>Show</label>
                                                    <select>
                                                        <option value="9">9</option>
                                                        <option value="12">12</option>
                                                        <option value="24">24</option>
                                                        <option value="36">36</option>
                                                    </select>
                                                    per page
                                                </div>
                                            </div-->
                                        </div>
                                    </div>
                                    <!-- End-Tab-Bar -->
                                    <!-- Tab-Content -->
                                    <div class="tab-content">
                                        <!-- Shop Product-->
                                        <div id="shop-product" class="tab-pane active">
                                            <div class="row">
                                                <!-- Start-single-product -->
												<?php 
									$data3 = $this->db->get_where("tbl_product", array("category_id"=>$cid))->result();
									foreach($data3 as $data2_row)
									{
										if($data2_row->status == 1)
										{
										if($data2_row->latest_product == 1)
										{
							?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
										<img src="<?php echo base_url(); ?>upload/products/banner/<?php echo $data2_row->banner_image;?>" alt="product-image" style="height:394px;width:100%;" class="img-responsive"/>
										</a>
                                        <div class="add-to-link"> 
                                            <a href="#">
                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                            </a>
											<a href="<?php echo base_url(); ?>Front/ProductDescription/<?php echo $data2_row->id; ?>">
                                                <div><i class="fa fa-eye"></i><span>View Details</span></div>
                                            </a>
                                            <!--a data-toggle="modal" data-target="#productModal" href="#">
                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                            </a-->
                                            <a href="#">
                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                            </a>
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
                                            <div class="pro-price">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">RM <?php echo number_format($data2_row->product_price - ($data2_row->product_price * $data2_row->discount / 100), 2); ?></span>
                                                <span class="old-price"><del>RM <?php echo number_format($data2_row->product_price, 2); ?></del></span>
                                            </div>
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
                                        <!-- End-Shop-Product-->
                                        <!-- Shop List -->
                                       
										
										
										
										
										
										
                                    </div>
                                    <!-- End Tab Content -->
                                    <!-- Tab Bar -->
                                    <!--div class="tab-bar tab-bar-bottom">
                                        <div class="tab-bar-inner">
                                            <ul role="tablist" class="nav nav-tabs">
                                                <li class="active"><a title="Grid" data-toggle="tab" href="#shop"><i class="fa fa-th-large"></i><span class="grid" title="Grid">Grid</span></a></li>
                                                <li><a title="List" data-toggle="tab" href="#shop-list"><i class="fa fa-list"></i><span class="list">List</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="toolbar">
                                            <!--div class="sorter">
                                                <div class="sort-by">
                                                    <label class="sort-none">Sort By</label>
                                                    <select>
                                                        <option value="position">Position</option>
                                                        <option value="name">Name</option>
                                                        <option value="price">Price</option>
                                                    </select>
                                                    <a class="up-arrow" href="#"><i class="fa fa-long-arrow-up"></i></a>
                                                </div>
                                            </div->
                                            <div class="pages">
                                                <strong>Page:</strong>
                                                <ol>
                                                    <li class="current">1</li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#" title="Next"><i class="fa fa-arrow-right"></i></a></li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div-->
                                    <!-- End Tab Bar -->
                                </div>
                                <!-- End Shop Product Tab Area -->
                            </div>
                            <!-- End Shop Product View -->
                        </div>
                    </div>
                </div>
            </div>
            <!--shop-product-area-end--> 
			
			<br><br>