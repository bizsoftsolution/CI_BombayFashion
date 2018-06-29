	<div class="single-banner-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<div class="single-ban-top-content">
					<p>Cart</p>
				</div>
			</div>
		</div>
	</div>
</div>	
            <!--start-single-heading-->
            <div class="signle-heading">
                <div class="container">
                    <div class="row">
                        <!--start-shop-head -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="shop-head-menu">
                                <ul>
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="<?php echo base_url(); ?>"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">Shopping Cart</li>
                                </ul>
                            </div>
                        </div>
                        <!--end-shop-head-->
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
            <!-- cart-main-area start-->
            <div class="cart-main-area">
                <div class="container">
				<br>
					<?php
					if($cart = $this->cart->contents()){ ?>
						<h3>My Shopping Bag 
						(<?php if(!empty($this->cart->contents()))
							{
								echo $this->cart->total_items();
							}
							else
							{
								echo "0";
							}
						?>)</h3>
						<br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<?php
							echo form_open('Cart/update_cart');
							
							?>
                            <!--form action="#"-->				
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Image</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-name">Color</th>
                                                <th class="product-name">Size</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                                <th class="product-remove">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php 
											$grand_total = 0;
											//$i = 1;
											foreach ($cart as $item)
											{
												echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
												echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
												echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
												echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
												echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
											?>
                                            <tr>
                                                <td class="product-thumbnail">
													<img class="img-responsive" id="<?php echo $item['id']?>" src="<?php echo base_url();?>upload/products/banner/<?php echo $item['image']?>" style="width: 60px; height: 60px; cursor: pointer;" alt="">
												</td>
                                                <td class="product-name"><?php echo $item['name']?></td>
                                                <td class="product-name">
												<?php
													 $color =  $this->db->query("SELECT * FROM tbl_color where id = '".$item['color']."'");
												foreach ($color->result() as $value) {?>
													  <span style="color: #333333;"><span style="height: 20px; width: 20px; background: <?php echo $value->color_code;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
											   <?php }
													?></td>
												<td class="product-name">
													<?php
                                                             $size_1 =  $this->db->query("SELECT * FROM tbl_size where id = '".$item['size']."'");
                                                        foreach ($size_1->result() as $value) {?>
                                                              <span style="color: #333333;"> <?php echo $value->size;?></span>
                                                       <?php }
                                                            ?>
												</td>
                                                <td class="product-price"><span class="amount">RM <?php echo number_format($item['price'], 2); ?></span></td>
                                                <td class="product-quantity">
												<?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" '); ?>
												<!--input type="number" value="<?php echo $item['qty']?>" name="cart"--></td>
                                                <td class="product-subtotal" style="width: 200px!important;">
												<?php $grand_total = $grand_total + $item['subtotal']; ?>
												RM. <?php echo number_format($item['subtotal'], 2) ?>
												</td>
                                                <td class="product-remove">
												<?php
													$path = "<i class='fa fa-times'></i>";
													 echo anchor('Cart/remove/' . $item['rowid'], $path); 
												?>
												<!--a href="#"><i class="fa fa-times"></i></a--></td>
                                            </tr>
											<?php 
											}
											?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                        <div class="buttons-cart">
                                            <input class="banner-r-b" type="submit" value="Update Cart" />
											<input type="button" class="btn btn-danger my-cart-btn my-cart-b" onclick="clear_cart()" value="Clear Cart">
											<a href="<?php echo base_url(); ?>">Continue Shopping</a>
                                        </div>
                                        <!--div class="coupon">
                                            <h3>Coupon</h3>
                                            <p>Enter your coupon code if you have one.</p>
                                            <input type="text" placeholder="Coupon code" />
                                            <input type="submit" value="Apply Coupon" />
                                        </div-->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                        <div class="cart_totals">
                                            <h2>Cart Totals</h2>
                                            <table>
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td><span class="amount">RM. <?php echo number_format($grand_total,2)?></span></td>
                                                    </tr>
                                                    <!--tr class="shipping">
                                                        <th>Shipping</th>
                                                        <td>
                                                            <ul id="shipping_method">
                                                                <li>
                                                                    <input type="radio" /> 
                                                                    <label>
                                                                        Flat Rate: <span class="amount">RM 7.00</span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <input type="radio" /> 
                                                                    <label>
                                                                        Free Shipping
                                                                    </label>
                                                                </li>
                                                                <li></li>
                                                            </ul>
                                                            <p><a class="shipping-calculator-button" href="#">Calculate Shipping</a></p>
                                                        </td>
                                                    </tr-->
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td>
                                                            <strong><span class="amount">RM. <?php echo number_format($grand_total,2)?></span></strong>
                                                        </td>
                                                    </tr>											
                                                </tbody>
                                            </table>
                                            <div class="wc-proceed-to-checkout">
                                                <a href="<?php echo base_url(); ?>Checkout">Proceed to Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<?php echo form_close(); ?>
                            <!--/form-->	
                        </div>
                    </div>
					<?php
					}
					else
                    { ?>
					<div class="row">
						<div class="col-lg-12">
							<img src="<?php echo base_url(); ?>assets/images/empty-cart.png" class="img-responsive" style="display:block;margin:0 auto;">
							<!--span style="font-size: 18px;text-align: center;" class="product-name"> Your cart has been empty add item!!</span-->
						</div>
					</div>
                   <?php }
                    ?>
                </div>
            </div>
            <!-- cart-main-area end -->
			<script type="text/javascript">
					function clear_cart() {
						var result = confirm('Are you sure want to clear all bookings?');
						if (result) {
							window.location = "<?php echo base_url(); ?>Cart/remove/all";
						} else {
							return false; // cancel button
						}
					}
			</script>			