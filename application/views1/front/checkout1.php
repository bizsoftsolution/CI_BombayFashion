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
<!--div class="signle-heading">
	<div class="container">
		<div class="row">
			<!--start-shop-head ->
			<div class="col-lg-12">
				<div class="shop-head-menu">
					<ul>
						<li><i class="fa fa-home"></i><a class="shop-home" href=""><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
						<li class="shop-pro">Checkout</li>
					</ul>
				</div>
			</div>
			<!--end-shop-head->
		</div>
	</div>
</div-->
<!--end-single-heading-->
<br>
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
<?php
if($cart = $this->cart->contents())
{
	?>
<!-- checkout-area start -->
<div class="checkout-area">
	<div class="container">
		
		
		<div class="row">
			
			  <div class="panel panel-primary" style="    border-color: #e3e3e3;">
    <div class="panel-heading" style="    color: #000;
    background-color: #ffbb00;
    border-color: #ffbb00;">
      <h3 class="panel-title">BILLING DETAILS</h3>
    </div>
    <div class="panel-body">
      <form name="basicform" id="basicform" method="post" action="<?php echo base_url();?>Checkout/Add">
        
        <div id="sf1" class="frm">
          <fieldset>
            <legend style="">Name & Address</legend>
            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">First Name </label>
              <div class="col-lg-6">
                <input type="text" placeholder="First Name" id="uname" name="uname" class="form-control" autocomplete="off">
              </div>
            </div>
			<div class="clearfix" style="height: 10px;clear: both;"></div>
			<div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Last Name </label>
              <div class="col-lg-6">
                <input type="text" placeholder="Last Name" id="lname" name="lname" class="form-control" autocomplete="off" required>
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
			<div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Address 1</label>
              <div class="col-lg-6">
                <input type="text" placeholder="Address 1" id="address1" name="address1" class="form-control" autocomplete="off" required>
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
			<div class="form-group">
              <label class="col-lg-2 control-label" for="uname"></label>
              <div class="col-lg-6">
                <input type="text" placeholder="Address 2" id="address2" name="address2" class="form-control" autocomplete="off">
              </div>
            </div>
			<div class="clearfix" style="height: 10px;clear: both;"></div>
			<div class="form-group">
              <label class="col-lg-2 control-label" for="uemail">Email Address </label>
              <div class="col-lg-6">
                <input type="text" placeholder="Your Email" id="uemail" name="uemail" class="form-control" autocomplete="off">
              </div>
            </div>
			<div class="clearfix" style="height: 10px;clear: both;"></div>
			<div class="form-group">
              <label class="col-lg-2 control-label" for="phoneno">Phone No</label>
              <div class="col-lg-6">
                <input type="text" placeholder="Phone Number" id="phoneno" name="phoneno" class="form-control" autocomplete="off" required>
              </div>
            </div>
			<div class="clearfix" style="height: 10px;clear: both;"></div>
			<div class="form-group">
              <label class="col-lg-2 control-label" for="phoneno">City</label>
              <div class="col-lg-6">
                <input type="text" placeholder="City Name" id="city" name="city" class="form-control" autocomplete="off" required>
              </div>
            </div>
			<div class="clearfix" style="height: 10px;clear: both;"></div>
			<div class="form-group">
              <label class="col-lg-2 control-label" for="phoneno">State</label>
              <div class="col-lg-6">
                <input type="text" placeholder="State Name" id="state" name="state" class="form-control" autocomplete="off" required>
              </div>
            </div>
			<div class="clearfix" style="height: 10px;clear: both;"></div>
			<div class="form-group">
              <label class="col-lg-2 control-label" for="phoneno">Postcode / Zip</label>
              <div class="col-lg-6">
                <input type="text" placeholder="Postcode" id="postcode" name="postcode" class="form-control" autocomplete="off" required>
              </div>
            </div>
			<div class="clearfix" style="height: 10px;clear: both;"></div>
			<div class="form-group">
              <label class="col-lg-2 control-label" for="phoneno">Country</label>
              <div class="col-lg-6">
                <input type="text" placeholder="Country" id="country" name="country" class="form-control" autocomplete="off" required>
              </div>
            </div>
			<div class="clearfix" style="height: 10px;clear: both;"></div>
			
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-primary open1" type="button">Next <span class="fa fa-arrow-right"></span></button> 
              </div>
            </div>

          </fieldset>
        </div>

        <div id="sf2" class="frm" style="display: none;">
          <fieldset>
            <legend>Payment Method</legend>


            <div class="form-group">
              <label class="col-lg-2 control-label" for="uemail">Payment </label>
              <div class="col-lg-6">
                <select name="payment" required style="" class="form-control">
					<option value="">Select Payment Method</option>
					<option value="cash">Cash</option>
				</select>
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>



            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-warning back2" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <button class="btn btn-primary open2" type="button">Next <span class="fa fa-arrow-right"></span></button> 
              </div>
            </div>

          </fieldset>
        </div>

        <div id="sf3" class="frm" style="display: none;">
          <fieldset>
            <legend>Review Your Order</legend>
			<div class="col-lg-6">
				<div class="payment-method" style="margin-top:0px">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
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
							</div>								
							
						</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="your-order">
						<h3>Your order (
						<?php if(!empty($this->cart->contents()))
							{
								echo $this->cart->total_items();
							}
							else
							{
								echo "0";
							}
						?>
						)</h3>
						
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
											<span class="amount">Rs <?php echo number_format($item['subtotal'], 2) ?></span>
										</td>
									</tr>
									<?php 
									}
									?>
								</tbody>
								<tfoot>
									<tr class="cart-subtotal">
										<th>Cart Subtotal</th>
										<td><span class="amount">Rs. <?php echo number_format($grand_total,2); ?></span></td>
									</tr>
									<tr class="shipping">
										<th>Shipping</th>
										<td>
											<ul>
												<li>
													<input type="radio" />
													<label>
														Flat Rate: <span class="amount">Rs 7.00</span>
													</label>
												</li>
												<li>
													<input type="radio" />
													<label>Free Shipping:</label>
												</li>
												<li></li>
											</ul>
										</td>
									</tr>
									<tr class="order-total">
										<th>Order Total</th>
										<td><strong><span class="amount">Rs. <?php echo number_format($grand_total,2); ?></span></strong>
										</td>
									</tr>								
								</tfoot>
							</table>
						</div>
						
					</div>
			</div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
			<!--div class="order-button-payment">
								<input type="submit" value="Place order" />
							</div-->
            <div class="form-group">
              <div class="col-lg-12 text-right">
                <button class="btn btn-warning back3" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <input class="btn btn-primary open3" type="submit" value="Place order" name="add_checkout_data"> 
                <img src="spinner.gif" alt="" id="loader" style="display: none">
              </div>
            </div>

          </fieldset>
        </div>
      </form>
    </div>
  </div>
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