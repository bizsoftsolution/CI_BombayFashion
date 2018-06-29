
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
			<br>
<!--start-shop-product-area-->
    <div class="shop-product-area">	
					<!-- main content -->
		<div class="box">
			<div class="center" style="width: 100%;">
				<!--<><><><><><><><><><><><><><><><><><><><><><><><><><> DEMO START <><><><><><><><><><><><><><><><><><><><><><><><><><>-->
						
				<div id="demo" class="box jplist">
					
				<div class="col-md-3">
					<div class="jplist-ios-button">
						<i class="fa fa-sort"></i>
						jPList Actions
					</div>
					<!-- panel -->
					<div class="jplist-panel box panel-top" style="">
						<div class="left-sidebar" style="padding: 7px 9px;
						background: rgba(227, 227, 227, 0.65);">
						<div class="shop-layout">
					<!-- ios button: show/hide panel -->
					
					<div class="left-sidebar-title">
						<h2>Shopping Options</h2>
					</div>
					<?php
						$uri_val = $this->uri->segment(3);
						foreach($category as $row)
						{
					?>
					   
					   <div class="layout-title">
						<h2 style="border-bottom: 2px solid #ffbb00;">
						<?php echo $row->category; ?></h2>
						</div>
						<div class="layout-list">
						<ul>
						<?php
							$sub_category = $this->db->get_where('tbl_sub_category',array('category_id'=>$row->id))->result();
							foreach($sub_category as $row1)
							{
						?>
						<li>
							<a href="<?php echo base_url(); ?>Subcategory/ProductList/<?php echo $row1->id;?>"><?php echo $row1->sub_category;?></a>

							<span>
								(<?php echo $this->db->get_where('tbl_product',array('sub_category_id'=>$row1->id,'status'=>'1'))->num_rows(); ?>)
							</span>
						
						</li>
						<?php } ?>
						</ul>
						</div>
					<?php 
						}
					?>
						<!-- items per page dropdown -->
						
						
						
	
					</div>

					</div>
				</div>
				</div>
				<div class="col-md-9">
					<div class="jplist-panel box panel-top" style="background: rgba(227, 227, 227, 0.65);padding: 3px 12px;">
						<?php 
							//$cid = $this->uri->segment(3);
							//foreach($data3 as $data3_row)
							//{
							$data3_1 = $this->db->get_where("tbl_category", array("id"=>$cid))->result();
							foreach($data3_1 as $data2_row)
							{
						?>
						<div style="float: left;
    font-size: 21px;
    padding: 13px;
    color: #222;"><?php echo $data2_row->category; ?></div>
						<?php 
							}
							//}
						?>
						<!-- items per page dropdown -->
						
						<!--div 
						   class="jplist-views" 
						   data-control-type="views" 
						   data-control-name="views" 
						   data-control-action="views"
						   data-default="jplist-grid-view"
						   style="margin-bottom: 10px;"
						   >
						   
						   <button type="button" class="jplist-view jplist-list-view" data-type="jplist-list-view"></button>
						   <button type="button" class="jplist-view jplist-grid-view" data-type="jplist-grid-view"></button>
						   <!--button type="button" class="jplist-view jplist-thumbs-view" data-type="jplist-thumbs-view"></button->
						</div-->
						<div 
						   class="jplist-label" 
						   data-type="Page {current} of {pages}" 
						   data-control-type="pagination-info" 
						   data-control-name="paging" 
						   data-control-action="paging"
						   style="float:right;margin-bottom: 10px;"
						   >
						</div>
						<select 
						   class="jplist-select" 
						   data-control-type="sort-select" 
						   data-control-name="sort" 
						   data-control-action="sort"
						   style="float:right;"
						   >
						   
							  <option data-path="default">Sort by</option>
							  <option data-path=".title" data-order="asc" data-type="text">Title A-Z</option>
							  <option data-path=".title" data-order="desc" data-type="text">Title Z-A</option>
							 								
						</select>
						
					</div>
					<!-- data -->   
					<div class="list box text-shadow">
						<!-- Start-single-product -->
							<div class="list-item box">
							<?php 
							//$cid = $this->uri->segment(3);
							//$data3 = $this->db->get_where("tbl_product", array("category_id"=>$cid))->result();
							foreach($data3 as $data2_row)
							{
								if($data2_row->status == 1)
								{
								//if($data2_row->latest_product == 1)
								//{
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
                                    <div class="product-info text-center ">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name title"><?php echo $data2_row->product_name; ?></h3></a>
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
										<p class="theme">
										<!--span class="<?php echo $data2_row->category_id; ?>"></span-->
										<span class="<?php echo $data2_row->sub_category_id; ?>"></span>
										</p>
                                    </div>
                                </div>
                            </div>
							
							<?php
										//}
									}	
									}									
							?>
						</div>
					</div>

					<div class="box jplist-no-results text-shadow align-center">
						<p>No results found</p>
					</div>
					
					<!-- ios button: show/hide panel -->
					<div class="jplist-ios-button">
						<i class="fa fa-sort"></i>
						jPList Actions
					</div>
					
					<!-- panel -->
					<div class="jplist-panel box panel-bottom" style="background: rgba(227, 227, 227, 0.65);padding: 3px 12px 13px 9px;
					margin: 0px 0 19px 0;">
						
						<div 
                           class="jplist-drop-down" 
                           data-control-type="items-per-page-drop-down" 
                           data-control-name="paging" 
                           data-control-action="paging">

                           <ul>
                             <li><span data-number="3"> 3 per page </span></li>
                             <li><span data-number="5"> 5 per page </span></li>
                             <li><span data-number="9" data-default="true"> 9 per page </span></li>
                             <li><span data-number="all"> View All </span></li>
                           </ul>
                        </div>
                        
						<!--div 
						   class="jplist-label" 
						   data-type="Page {current} of {pages}" 
						   data-control-type="pagination-info" 
						   data-control-name="paging" 
						   data-control-action="paging">
						</div-->	

						<div 
						   class="jplist-pagination" 
						   data-control-type="pagination" 
						   data-control-name="paging" 
						   data-control-action="paging">
						</div>
						
					</div>
					
				</div>
					
					
									 
					
					
								
				</div>
				
				<!--<><><><><><><><><><><><><><><><><><><><><><><><><><> DEMO END <><><><><><><><><><><><><><><><><><><><><><><><><><>-->				
			</div>		
		</div>

		</div>
		<br><br>
		
		<script>
			function toggle_subs(cat){
				$("#subs_"+cat).toggle('fast');
			}
			
			function sub_clear(){
				$(".check_sub_category").each(function(){
					 this.checked = false;
				});
			}
		</script>
            <!--end-single-heading-->
            <!--start-shop-product-area-->
            <div class="shop-product-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							
                        </div>

                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                        </div>
                    </div>
                </div>
            </div>
            <!--shop-product-area-end--> 