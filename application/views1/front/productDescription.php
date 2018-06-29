 <link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ratings/star-rating.css" media="all" rel="stylesheet" type="text/css"/>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/ratings/star-rating.js" type="text/javascript"></script>
 <!--start-single-heading-banner-->
			<?php 
			foreach($productDescription as $row)
			{
			?>
            <div class="single-banner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="single-ban-top-content">
                                <p><?php 
								$data2 = $this->db->get_where("tbl_category", array("id"=>$row->category_id))->result();
								foreach($data2 as $data2_row)
								{
								echo $data2_row->category;
								}
								?>
								</p>					
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
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!--start-shop-head -->
                            <div class="shop-head-menu">
                                <ul>
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="<?php echo base_url();?>"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">
									<?php 
										$data2 = $this->db->get_where("tbl_category", array("id"=>$row->category_id))->result();
										foreach($data2 as $data2_row)
										{
										echo $data2_row->category;
										}
									?>
								</li>
                                </ul>
                            </div>
                            <!--end-shop-head-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
			
            <!--start-signle-page-->
            <div class="single-page-area padding-t">
                <!-- Single Product details Area -->
                <div class="single-product-details-area">
                    <!-- Single Product View Area -->
                    <div class="single-product-view-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
								<!-- GlassCase stylesheet -->                                        


                                    <ul id="glasscase" class="gc-start">
									<?php 
										$split_image =  explode(",", trim($row->product_image, ','));
										foreach($split_image as $split_image_row)
										{
									?>
										<li><img src="<?php echo base_url(); ?>upload/products/<?php echo $split_image_row; ?>" alt="Text" data-gc-caption="" /></li>
										
									<?php 
										}
									?>
									</ul>
									
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 single-product-details">
									
                                    <div class="single-pro">
                                        <div class="product-name">
                                            <h3><a href="#"><?php echo $row->product_name; ?></a></h3>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                        <div class="product-content">
											<?php 
												$id = $this->uri->segment(3);
												$data8 = $this->db->get_where("tbl_review", array("product_id"=>$id));
												$count = $data8->num_rows();
												$result = $data8->result();

												$qty1 = 0;
												$prc1 = 0;
												$vle1 = 0;
												//$i = 1;
												foreach($result as $val)
												{
													$qty1 = $qty1 + $val->quality_rating / $count;;
													$prc1 = $prc1 + $val->price_rating / $count;
													$vle1 = $vle1 + $val->value_rating / $count;
												}
												$total = $qty1 + $prc1 + $vle1;
												$total1 = $total / 3; 
											?>
												<div class="pro-rating single-p" style="    margin-top: -20px;">
													<ul class="single-pro-rating">
														<input id="star-rating-demo1" value="<?php echo $total1; ?>" type="number" class="rating" min=0 max=5 step=0.1 data-size="sm" readonly>
													</ul>
													<div class="rating-links">
														<?php echo $count; ?> Review(s)
													</div>
												</div>
											
											<br>
											
											<?php 
											if($row->discount != 0)
											{
											?>
                                            <div class="pro-price single-p">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">RM <?php echo number_format($row->product_price - ($row->product_price * $row->discount / 100), 2); ?></span>
                                                <span class="old-price"><del>RM <?php echo number_format($row->product_price, 2); ?></del></span>
                                            </div>
											<?php 
											}
											else
											{
											?>
											<div class="pro-price single-p">
												<span class="price-text">Price:</span>
												<span class="normal-price">RM <?php echo number_format($row->product_price - ($row->product_price * $row->discount / 100), 2); ?></span>
												
											</div>
											<?php
											}
											?>
                                        </div>
                                        <p>Availability: <span class="signle-stock"><?php if($row->quantity > 0) { echo "In stock"; } else { echo "Sold-out";} ?></span></p>
										<div class="row">
											<div class="col-md-1">
												Color:
											</div>
											<div class="col-md-10">
												<ul class="color_choose">
												<?php
											$color_data = explode(",", $row->color_id);
											$color =  $this->db->query("SELECT * FROM tbl_color");
											foreach ($color->result() as $value) {
												foreach ($color_data as $color_value) {
													if($color_value == $value->id)
													{?>
													<label class="checkbox-inline">
													
													<li class="color" id="<?php echo $value->id;?>" onClick="setColorValue('<?php echo $value->id;?>')" class="active">
															<div style=" height: 20px; width:20px; background-color:<?php echo $value->color_code;?>;"></div>
													</li>
													
													</label>
													<?php }
												}
											}
											?>
												</ul>
											</div>
										</div>
										<style>
										.color_choose .active
										{
											border: 2px solid #0000ff;
										}
										.color_choose1 .active
										{
											border: 2px solid #0000ff;
											padding: 1px 3px;
										}
										</style>
										<script>
										function setColorValue(obj) 
										{
										$('.color').removeClass('active');
										$("#"+obj).addClass('active');
										var id = obj;
										$("#productcolor").val(id);
										}
										</script>
										<div class="row">
											<div class="col-md-1">Size:</div>
											<div class="col-md-10">
												<ul class="color_choose1">
												<?php
												$size_data = explode(",", $row->size_id);
												$size =  $this->db->query("SELECT * FROM tbl_size");
												foreach ($size->result() as $value  ) {
													foreach ($size_data as $size_value) {
														if($size_value == $value->id)
														{?>
														<label class="checkbox-inline">
														<li>
														<a class="size_data" id="s<?php echo $value->id;?>" onClick="setSizeValue('s<?php echo $value->id;?>')"><?php echo $value->size;?></a>
														</li>														
														</label>
														<?php }
													}
												}
												?>
												</ul>
											</div>
										</div>
										<script>
										function setSizeValue(obj) {
											$('.size_data').removeClass('active');
											$("#"+obj).addClass('active');
											$("#productsize").val(obj.slice(1));
										}
										</script>
                                        <div class="product-reveiw">
                                            <p style="text-align:justify;"><?php echo $row->product_description; ?></p>
                                        </div>
                                        <div class="">
                                            <div class="quick-add-to-cart">
                                                <form class="cart" action="<?php echo base_url();?>Cart/add" method="post">
                                                    <div class="qty-button"> 	
                                                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">

                                                        <div class="box-icon button-plus"> 
                                                            <input type="button" class="qty-increase " onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" value="+">
                                                        </div>	
                                                        <div class="box-icon button-minus">
                                                            <input type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;" value="-">
                                                        </div>
                                                    </div>
													<?php 
													//echo $row->id;
													echo form_hidden('id', $row->id);
                                                    echo form_hidden('name', $row->product_name);
                                                    echo form_hidden('price', $row->product_price);
                                                    echo form_hidden('image', $row->banner_image);
													?> 
													<input type="hidden" name="color" id="productcolor" value="" />
                                                    <input type="hidden" name="size" id="productsize" value="" />
                                                    <div class="add-to-cartbest single-add">
                                                        <!--a href="#" title="add to cart">
                                                            <div><span>Add to cart</span></div>
                                                        </a-->
														<button type="submit" class="add-cart item_add" name="action" style="    background: #ffbb00;
    border: 1px solid #ffbb00;
    padding: 10px 15px;
    font-size: 16px;
    font-weight: bold;"><span>Add to cart</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--div class="single-pro-cart">
                                            <div class="add-to-link single-p"> 
                                                <a href="#" title="Wishlist">
                                                    <div><i class="fa fa-heart"></i></div>
                                                </a>
                                                <a href="#" title="Email">
                                                    <div><i class="fa fa-envelope"></i></div>
                                                </a>
                                                <a href="#" title="Compare">
                                                    <div><i class="fa fa-random"></i></div>
                                                </a>
                                            </div>
                                        </div-->
                                        <div class="clear"></div>
                                        <!-- social-markting end -->
                                        <div class="social-icon-img">
                                            <a href="#">
                                                <img src="images/icon/s.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product View Area -->
                </div>
                        <!-- End Single details Area -->
            </div>
            <!--End-signle-page-->
			<!-- Single Description Tab -->
			<style>
				.email-area input[type="submit"]
				{
					right: 0px;
				}
			</style>
			<div class="single-product-description">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="product-description-tab custom-tab">
								<!-- tab bar -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#product-des" data-toggle="tab">Product Description</a></li>
									<li><a href="#product-rev" data-toggle="tab">Reviews</a></li>
									<li><a href="#product-tag" data-toggle="tab">Product Tags</a></li>
								</ul>
								<!-- Tab Content -->
								<div class="tab-content" style="padding:5px 20px;    overflow-y: scroll;
    height: 720px;">
									<div class="tab-pane active" id="product-des">
										<p style="text-align:justify;"><?php echo $row->product_description; ?></p>
									</div>
									<div class="tab-pane" id="product-rev">
									
									
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
												
												<div class="product-rev-left">
													<p class="product-action">
														<a href="">Bombay Fashion</a>
													</p>
													<p><span class="posted">( Overall rating this product )</span></p>
													<div class="product-ratting">
														<table class="">
															<tr>
																<td>Quality</td>
																<td class="quality-single-p">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
																</td>
															</tr>
															<tr>
																<td>Price</td>
																<td class="quality-single-p">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
																</td>
															</tr>
															<tr>
																<td>Value</td>
																<td class="quality-single-p">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
																</td>
															</tr>
														</table>
													</div>
													
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<?php 
					$id = $this->uri->segment(3);
						$data7 = $this->db->get_where("tbl_review", array("product_id"=>$id))->result();
						foreach($data7 as $data7_row)
						{
					?>
					<div class="row" style="border: 1px solid rgba(153, 153, 153, 0.23);
    padding: 10px 10px;">
						<!--div class="col-sm-2" style="text-align:right;">
							<!--img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded" ->
							<div class="review-block-name"><a href="#"><?php echo $data7_row->name; ?></a></div>
							
						</div-->
						<div class="col-sm-8">
							<div class="review-block-rate" style="    color: rgb(255, 187, 0);
    font-weight: bold;
    font-size: 16px;">
								<?php echo $data7_row->name; ?>
							</div><br>
							<!--div class="review-block-title"></div-->
							<div class="review-block-description" style="text-align:justify;"><?php echo $data7_row->description; ?></div>
							<div class="review-block-date" style="text-align:right;"><b><?php echo date("M d, Y", strtotime($data7_row->date)); ?></b></div>
						</div>
						<div class="col-sm-4"><br>
						<div class="col-md-4"><b>Quality</b></div>
						<div class="col-md-8"><input id="star-rating-demo1" value="<?php echo $data7_row->quality_rating; ?>" type="number" class="rating" min=0 max=5 step=0.1 data-size="sm" readonly></div>
						<div class="col-md-4"><b>Price</b></div>
						<div class="col-md-8"><input id="star-rating-demo1" value="<?php echo $data7_row->price_rating; ?>" type="number" class="rating" min=0 max=5 step=0.1 data-size="sm" readonly></div>
						<div class="col-md-4"><b>Value</b></div>
						<div class="col-md-8"><input id="star-rating-demo1" value="<?php echo $data7_row->value_rating; ?>" type="number" class="rating" min=0 max=5 step=0.1 data-size="sm" readonly></div>	
						</div>
						
					</div>
					<?php 
						}
					?>
												<?php
													if($this->session->userdata('user_type')=="Customer")
													{
												?>
												<div class="row">
												<br><br>
												<div class="product-rev-right">
													<!--h3>You're reviewing: Proin lectus ipsum</h3-->
												<div class="porduct-rev-right-form">	
						<form action="" class="form-horizontal" method="POST" style="border: 1px solid rgba(153, 153, 153, 0.23);
    padding: 10px 10px;">
	<h3 align="center"><b>How do you rate this product? <span>*</span></b></h3><hr>
													<!--div class="product-rev-right-table table-responsive">
  
													
														<table>
															<thead>
																<tr class="first last">
																	<th>&nbsp;</th>
																	<th><span class="nobr">1 star</span></th>
																	<th><span class="nobr">2 stars</span></th>
																	<th><span class="nobr">3 stars</span></th>
																	<th><span class="nobr">4 stars</span></th>
																	<th><span class="nobr">5 stars</span></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th>Quality</th>
																	<th><input type="radio" class="radio product_qty" name="product_qty" id="product_qty"></th>
																	<th><input type="radio" class="radio product_qty" name="product_qty" id="product_qty"></th>
																	<th><input type="radio" class="radio product_qty" name="product_qty" id="product_qty"></th>
																	<th><input type="radio" class="radio product_qty" name="product_qty" id="product_qty"></th>
																	<th><input type="radio" class="radio product_qty" name="product_qty" id="product_qty"></th>
																</tr>
																<tr>
																	<th>Price</th>
																	<th><input type="radio" class="radio product_price" name="product_price"id="product_price"></th>
																	<th><input type="radio" class="radio product_price" name="product_price"id="product_price"></th>
																	<th><input type="radio" class="radio product_price" name="product_price"id="product_price"></th>
																	<th><input type="radio" class="radio product_price" name="product_price"id="product_price"></th>
																	<th><input type="radio" class="radio product_price" name="product_price"id="product_price"></th>
																</tr>
																<tr>
																	<th>Value</th>
																	<th><input type="radio" class="radio product_value" name="product_value"id="product_value"></th>
																	<th><input type="radio" class="radio product_value" name="product_value"id="product_value"></th>
																	<th><input type="radio" class="radio product_value" name="product_value"id="product_value"></th>
																	<th><input type="radio" class="radio product_value" name="product_value"id="product_value"></th>
																	<th><input type="radio" class="radio product_value" name="product_value"id="product_value"></th>
																</tr>
															</tbody>
														</table>
													</div-->
													 <div class="form-group">
														<label class="control-label col-sm-2" for="email">Quality:</label>
														<div class="col-sm-10">
														  <input id="input-21d" value="2" type="text" class="rating product_qty" data-min=0 data-max=5 data-step=0.5 data-size="sm"
																					title="" name="product_qty">
														</div>
													  </div>
													  <div class="form-group">
														<label class="control-label col-sm-2" for="email">Price:</label>
														<div class="col-sm-10">
														  <input id="input-21d" value="2" type="text" class="rating product_price" data-min=0 data-max=5 data-step=0.5 data-size="sm"
																					title="" name="product_price">
														</div>
													  </div>
													  <div class="form-group">
														<label class="control-label col-sm-2" for="email">Value:</label>
														<div class="col-sm-10">
														  <input id="input-21d" value="2" type="text" class="rating product_value" data-min=0 data-max=5 data-step=0.5 data-size="sm"
																					title="" name="product_value">
														</div>
													  </div>
													  <div class="form-group">
														<label class="control-label col-sm-2" for="email">Name:</label>
														<div class="col-sm-10">
														  <input type="text" class="form-control" required="required" name="nname" id="nname">
														</div>
													  </div>
													  <div class="form-group">
														<label class="control-label col-sm-2" for="email">Review:</label>
														<div class="col-sm-10">
														  <textarea class="form-control" rows="5" required="required"name="review" id="review"></textarea>
																<input type="hidden" value="<?php echo $row->id; ?>" name="cus_id" id="cus_id">
														</div>
													  </div>
													  <div class="form-group">
														<label class="control-label col-sm-2" for="email"></label>
														<div class="col-sm-10">
														  <input type="submit" class="btn custom-button submit_review" value="Submit Review" name="submit_review">
														</div>
													  </div>
													 <div class="form-group">
														<label class="control-label col-sm-2" for="email"></label>
														<div class="col-sm-10">
														  <div id="flash"></div>
															<div id="show"></div>
														</div>
													  </div>
													
															
															
														
													
						
						</form>
						</div>
												</div>
												</div>
						<?php $id = $this->uri->segment(3); ?>
												<script type="text/javascript">
						$(function() {
						$(".submit_review").click(function() {
						var product_qty = $(".product_qty").val();
						//alert(product_qty);
						var product_price = $(".product_price").val();
						var product_value = $(".product_value").val();
						var nname = $("#nname").val();
						//var sreview = $("#sreview").val();
						var review = $("#review").val();
						var cus_id = $("#cus_id").val();
						var dataString = 'product_qty='+ product_qty + '&product_price='+ product_price + '&product_value='+product_value +'&nname='+nname+ '&review='+review+ '&cus_id='+cus_id;
						
						//alert(dataString);
						if(dataString=='')
						{
						alert("Enter some text..");
						$("#nname").focus();
						}
						else
						{
						$("#flash").show();
						$("#flash").fadeIn(400).html('<span class="load">Loading..</span>');
						$.ajax({
						type: "POST",
						url: "<?php echo base_url('Front/InsertReview'); ?>",
						data: dataString,
						cache: true,
						success: function(html){
							$("#show").after(html);
							//document.getElementById('content').value='';
							//document.getElementById('rtitle').value='';
							$("#flash").hide();
							//$("#content").focus();
							alert("Thank you for the review !!!");
							window.location.href = "<?php echo base_url().'Front/ProductDescription/'.$id; ?>";
						}  
						});
						}
						return false;
						});
						});
						</script>
												<?php 
													}
												?>	
											</div>
										</div>
									
										
										
										
										
										
									</div>
									<div class="tab-pane" id="product-tag">
										<h2>Other people marked this product with these tags:</h2>
										<p class="product-action">
											<a href="http://bootexperts.com/">Laptop </a> <span>(1)</span>
										</p>
										<form action="#" class="product-form">
											<label>Add Your Tags:</label>
											<input type="text" class="form-control" required="required">
											<button class="btn custom-button" value="submit">Add Tags</button>
										</form>
										<p>Use spaces to separate tags. Use single quotes (') for phrases.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Description Tab -->
			<!--Start-related-products-wrap-->
            <div class="latest-products-wrap s-padding-t">
                <div class="container">
                    <div class="latest-content text-center">
                        <div class="section-heading">
                            <h3><span class="h-color">Related</span> Products</h3>
                        </div>
                    </div>
                    <div class="row">
						<div class="featured-carousel indicator">
						<?php
						$related_data = explode(",", $row->related_product);
						$relatedD =  $this->db->query("SELECT * FROM tbl_product");
						foreach ($relatedD->result() as $value) {
							foreach ($related_data as $size_value) {
								if($size_value == $value->id)
								{
									//$split_image =  current(explode(",",$value->product_image));
								?>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product <?php if($value->quantity > 0) { echo ""; } else { echo "sold-out";} ?>">
                                <div class="sale">Sale</div>
								<?php 
								if($value->latest_product == 1)
								{
									echo '<div class="new">new</div> ';
								}
								else
								{
									echo "";
								}
								?>
                                <div class="sale-border"></div>
									<form class="cart" action="<?php echo base_url();?>Cart/add" method="post">
                                    <div class="product-img-wrap"> 
                                        <a class="product-img" href="<?php echo base_url(); ?>Front/ProductDescription/<?php echo $value->id; ?>"> 
										<img src="<?php echo base_url(); ?>upload/products/banner/<?php echo $value->banner_image;?>" alt="product-image" />
										</a>
                                        <div class="add-to-link"> 
                                            <!--a href="#">
                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                            </a-->
											<a href="<?php echo base_url(); ?>Front/ProductDescription/<?php echo $value->id; ?>">
                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                            </a>
                                            <!--a data-toggle="modal" data-target="#productModal" href="#">
                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                            </a-->
                                            <!--a href="#">
                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                            </a-->
                                        </div>
										<?php if($value->quantity > 0) 
										{
										?>
										<div class="add-to-cart" style="background: #ffbb00;">
										<input type="hidden" name="color" id="productcolor" value="" />
                                        <input type="hidden" name="size" id="productsize" value="" />
										<input type="hidden" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
										<?php 
										//echo $row->id;
										echo form_hidden('id', $value->id);
										echo form_hidden('name', $value->product_name);
										echo form_hidden('price', $value->product_price);
										echo form_hidden('image', $value->banner_image);
										?>
                                            <!--a href="<?php echo base_url(); ?>" title="add to cart"-->
                                                <div><i class="fa fa-shopping-cart"></i><button type="submit" class="add-cart item_add" name="action" style="    background: #ffbb00;
    border: 1px solid #ffbb00;
    font-size: 15px;
    font-weight: bold;"><span>Add to cart</span></button></div>
                                            <!--/a-->
                                        </div>
                                        <!--div class="add-to-cart">
                                            <a href="<?php echo base_url(); ?>" title="add to cart">
                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                            </a>
                                        </div-->
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
                                            <a href="#"><h3 class="pro-name"><?php echo $value->product_name; ?></h3></a>
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
                                                <span class="normal-price">Rs <?php echo number_format($value->product_price - ($value->product_price * $value->discount / 100), 2); ?></span>
                                                <span class="old-price"><del>Rs <?php echo number_format($value->product_price, 2); ?></del></span>
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
						
                            <!-- Start-single-product -->

                            <!-- End-single-product -->
                        </div>
					</div>
                </div>
            </div>
            <!--End-related-products-wrap-->
			<?php 
			}
			?>
