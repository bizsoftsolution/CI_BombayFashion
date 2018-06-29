<!--start-single-heading-banner-->
<div class="single-banner-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<div class="single-ban-top-content">
					<p>Checkout</p>
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
						<li><i class="fa fa-home"></i><a class="shop-home" href=""><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
						<li class="shop-pro">Checkout</li>
					</ul>
				</div>
			</div>
			<!--end-shop-head-->
		</div>
	</div>
</div>
<!--end-single-heading-->
<br><br>
 <!-- coupon-area start -->
<!--div class="coupon-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="coupon-accordion">
					<!-- ACCORDION START ->
					<h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
					<div id="checkout-login" class="coupon-content">
						<div class="coupon-info">
							<p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
							<form action="#">
								<p class="form-row-first">
									<label>Username or email <span class="required">*</span></label>
									<input type="text" />
								</p>
								<p class="form-row-last">
									<label>Password  <span class="required">*</span></label>
									<input type="text" />
								</p>
								<p class="form-row">					
									<input type="submit" value="Login" />
									<label>
										<input type="checkbox" />
										 Remember me 
									</label>
								</p>
								<p class="lost-password">
									<a href="#">Lost your password?</a>
								</p>
							</form>
						</div>
					</div>
					<!-- ACCORDION END ->						
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="coupon-accordion">	
					<!-- ACCORDION START ->
					<h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
					<div id="checkout_coupon" class="coupon-checkout-content">
						<div class="coupon-info">
							<form action="#">
								<p class="checkout-coupon">
									<input type="text" placeholder="Coupon code" />
									<input type="submit" value="Apply Coupon" />
								</p>
							</form>
						</div>
					</div>
					<!-- ACCORDION END ->						
				</div>
			</div>
		</div>
	</div>
</div-->
<!-- coupon-area end -->
<!-- checkout-area start -->
<?php
if($cart = $this->cart->contents())
{
	?>
<div class="checkout-area">
	<div class="container">
		<div class="row">
			<form action="<?php echo base_url(); ?>Checkout/Addcart" method="POST" id="basicform">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="background: #f2f2f2;">
					<div class="checkbox-form">	
						<div class="layout-title">
							<h2>Billing Details</h2>
						</div>
						<?php 
							if($this->session->userdata('user_id')!="")
							{
								if($this->session->userdata('user_type')=="Customer")
								{
								$data99 = $this->db->get_where("tbl_customers", array("customer_id"=>$this->session->userdata('custmer_id')))->result();
								foreach($data99 as $row)
								{
						?>
						<div class="row">
							
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="checkout-form-list">
									<label>First Name <span class="required">*</span></label>										
									<input type="text" placeholder="" name="fname" id="fname" value="<?php echo $row->first_name; ?>"/>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="checkout-form-list">
									<label>Last Name <span class="required">*</span></label>										
									<input type="text" placeholder="" name="lname" id="lname" value="<?php echo $row->last_name; ?>"/>
								</div>
							</div>
							<!--div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="checkout-form-list">
									<label>Company Name</label>
									<input type="text" placeholder="" />
								</div>
							</div-->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="checkout-form-list">
									<label>Address <span class="required">*</span></label>
									<input type="text" placeholder="Address 1" name="address1" id="address1" value="<?php echo $row->billing_address1; ?>"/>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="checkout-form-list">									
									<input type="text" placeholder="Address 2" name="address2" id="address2" value="<?php echo $row->billing_address2; ?>"/>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="checkout-form-list">
									<label>Email Address <span class="required">*</span></label>										
									<input type="email" placeholder="" name="email" id="email" value="<?php echo $row->email; ?>"/>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="checkout-form-list">
									<label>Phone  <span class="required">*</span></label>										
									<input type="text" placeholder="Phone Number" name="phone" value="<?php echo $row->phone; ?>"/>
								</div>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="checkout-form-list">
									<label>Town / City <span class="required">*</span></label>
									<input type="text" placeholder="Town / City" name="city" value="<?php echo $row->billing_city; ?>"/>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="checkout-form-list">
									<label>State / County <span class="required">*</span></label>										
									<input type="text" placeholder="" name="state" value="<?php echo $row->billing_state; ?>"/>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="checkout-form-list">
									<label>Postcode / Zip <span class="required">*</span></label>										
									<input type="text" placeholder="Postcode / Zip" name="postcode" value="<?php echo $row->billing_zip; ?>"/>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="checkout-form-list">
									<label>Country<span class="required">*</span></label>										
									<input type="text" placeholder="Country" name="country" value="<?php echo $row->billing_country; ?>"/>
								</div>
							</div>
							
							<!--div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="checkout-form-list create-acc">	
									<input id="cbox" type="checkbox" />
									<label>Create an account?</label>
								</div>
								<div id="cbox_info" class="checkout-form-list create-account">
									<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
									<label>Account password  <span class="required">*</span></label>
									<input type="password" placeholder="password" />	
								</div>
							</div-->								
						</div>
						
						<?php 
								}
								}
								else
								{
							?>
						<div class="row">
							
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="checkout-form-list">
									<label>First Name <span class="required">*</span></label>										
									<input type="text" placeholder="" name="fname" id="fname" />
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="checkout-form-list">
									<label>Last Name <span class="required">*</span></label>										
									<input type="text" placeholder="" name="lname" id="lname"/>
								</div>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="checkout-form-list">
									<label>Address <span class="required">*</span></label>
									<input type="text" placeholder="Address 1" name="address1" id="address1"/>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="checkout-form-list">									
									<input type="text" placeholder="Address 2" name="address2" id="address2"/>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="checkout-form-list">
									<label>Email Address <span class="required">*</span></label>										
									<input type="email" placeholder="" name="email" id="email"/>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="checkout-form-list">
									<label>Phone  <span class="required">*</span></label>										
									<input type="text" placeholder="Phone Number" name="phone"/>
								</div>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="checkout-form-list">
									<label>Town / City <span class="required">*</span></label>
									<input type="text" placeholder="Town / City" name="city"/>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="checkout-form-list">
									<label>State / County <span class="required">*</span></label>										
									<input type="text" placeholder="" name="state"/>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="checkout-form-list">
									<label>Postcode / Zip <span class="required">*</span></label>										
									<input type="text" placeholder="Postcode / Zip" name="postcode"/>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="country-select">
									<label>Country <span class="required">*</span></label>
									<select name="country">
									<option value="">Select Country</option>
									  <option value="India">India</option>
									  
									</select> 										
								</div>
							</div>								
						</div>
						<?php		
								}
							}
						?>
						<!--div class="different-address">
								<div class="ship-different-title">
									<h3>
										<label>Ship to a different address?</label>
										<input id="ship-box" type="checkbox" />
									</h3>
								</div>
							<div id="ship-box-info" class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="country-select">
										<label>Country <span class="required">*</span></label>
										<select>
										  <option value="volvo">bangladesh</option>
										  <option value="saab">Algeria</option>
										  <option value="mercedes">Afghanistan</option>
										  <option value="audi">Ghana</option>
										  <option value="audi2">Albania</option>
										  <option value="audi3">Bahrain</option>
										  <option value="audi4">Colombia</option>
										  <option value="audi5">Dominican Republic</option>
										</select> 										
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="checkout-form-list">
										<label>First Name <span class="required">*</span></label>										
										<input type="text" placeholder="" />
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="checkout-form-list">
										<label>Last Name <span class="required">*</span></label>										
										<input type="text" placeholder="" />
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="checkout-form-list">
										<label>Company Name</label>
										<input type="text" placeholder="" />
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="checkout-form-list">
										<label>Address <span class="required">*</span></label>
										<input type="text" placeholder="Street address" />
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="checkout-form-list">									
										<input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="checkout-form-list">
										<label>Town / City <span class="required">*</span></label>
										<input type="text" placeholder="Town / City" />
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>State / County <span class="required">*</span></label>										
										<input type="text" placeholder="" />
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>Postcode / Zip <span class="required">*</span></label>										
										<input type="text" placeholder="Postcode / Zip" />
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>Email Address <span class="required">*</span></label>										
										<input type="email" placeholder="" />
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>Phone  <span class="required">*</span></label>										
										<input type="text" placeholder="Postcode / Zip" />
									</div>
								</div>								
							</div>
							<div class="order-notes">
								<div class="checkout-form-list">
									<label>Order Notes</label>
									<textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
								</div>									
							</div>
						</div-->													
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="your-order">
						<div class="layout-title">
						<h2>Your order (
						<?php if(!empty($this->cart->contents()))
							{
								echo $this->cart->total_items();
							}
							else
							{
								echo "0";
							}
						?>
						)</h2>
						</div>
						<div class="your-order-table table-responsive">
							<table>
								<thead>
									<tr>
										<th class="product-name">Product</th>
										<th class="product-total">Total</th>
									</tr>							
								</thead>
								<tbody>
									<?php 
									$grand_total = 0;
									foreach ($cart as $item)
									{
									?>
									<tr class="cart_item">
										<td class="product-name">
											<?php echo $item['name']; ?> <strong class="product-quantity"> × <?php echo $item['qty']; ?></strong>
										</td>
										<td class="product-total">
											<?php $grand_total = $grand_total + $item['subtotal']; ?>
											<span class="amount">RM <?php echo number_format($item['subtotal'], 2) ?></span>
										</td>
									</tr>
									<?php 
									}
									?>
								</tbody>
								<tfoot>
									<tr class="cart-subtotal">
										<th>Cart Subtotal</th>
										<td><span class="amount">RM <?php echo number_format($grand_total,2); ?></span></td>
									</tr>
									<!--tr class="shipping">
										<th>Shipping</th>
										<td>
											<ul>
												<li>
													<input type="radio" />
													<label>
														Flat Rate: <span class="amount">RM 7.00</span>
													</label>
												</li>
												<li>
													<input type="radio" />
													<label>Free Shipping:</label>
												</li>
												<li></li>
											</ul>
										</td>
									</tr-->
									<tr class="order-total">
										<th>Order Total</th>
										<td><strong><span class="amount">RM <?php echo number_format($grand_total,2); ?></span></strong>
										</td>
									</tr>								
								</tfoot>
							</table>
						</div>
						<div class="payment-method">
							<!--div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
								  <h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									  Direct Bank Transfer
									</a>
								  </h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								  <div class="panel-body">
									<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
								  </div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
								  <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  Cheque Payment
									</a>
								  </h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								  <div class="panel-body">
									 <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
								  </div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								  <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									  PayPal
									</a>
								  </h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								  <div class="panel-body">
									<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
								  </div>
								</div>
							  </div>
							</div-->								
							<div class="order-button-payment">
								<input type="submit" value="Place order" name="add_checkout_data"/>
							</div>
						</div>
					</div>
				</div>
				
			</form>
		</div>
	</div>
</div>
<!-- checkout-area end -->	
<?php 
					}
					else
{
	redirect("Cart");
}
				?>