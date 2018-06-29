            <!--start-single-heading-banner-->
            <div class="single-banner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center">
                            <div class="single-ban-top-content">
                                <p>Customer Profile</p>
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
                                    <li class="shop-pro">Customer Profile</li>
                                </ul>
                            </div>
                        </div>
                        <!--end-shop-head-->
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
            <!-- login-area start -->
            <div class="login-area1">
                <div class="container">
					<div class="row">&nbsp;</div>
						<?php 
						if($this->session->flashdata('signup') != "")
						{
							?>
							<div class="alert alert-success alert-bordered alert-rounded">
								<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
								<span class="text-semibold">!!!</span> <?php echo  $this->session->flashdata('signup');?>
							</div>
						<?php
						}
						elseif($this->session->flashdata('chnagepassword') != "")
						{
							?>
							<div class="alert alert-danger alert-bordered alert-rounded">
								<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
								<span class="text-semibold">!!!</span> <?php echo  $this->session->flashdata('chnagepassword');?>
							</div>
						<?php
						}
						?>
                    <div class="row">
						<?php 
							foreach($cprofile as $cprofile_row)
							{
						?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="table-responsive">
								<table class="table table-bordered">
									<tr>
										<th colspan="2" style="text-align: center;">Personal Information</th>
									</tr>
									<tr>
										<th colspan="2" style="text-align: center;"><img src="<?php echo base_url(); ?>upload/cprofile/<?php echo $cprofile_row->uploadFile;?>" class="img-responsive" style="width:150px;height:150px;display:block;margin:0 auto;"></th>
									</tr>
									<tr>
										<td>Name</td>
										<td><?php echo $cprofile_row->first_name.' '.$cprofile_row->last_name; ?></td>
									</tr>
									<tr>
										<td>Email ID</td>
										<td><?php echo $cprofile_row->email; ?></td>
									</tr>
									<tr>
										<td>Phone</td>
										<td><?php echo $cprofile_row->phone; ?></td>
									</tr>
									<tr>
										<td>Address</td>
										<td><?php echo $cprofile_row->billing_address1; ?><br><?php echo $cprofile_row->billing_address2; ?></td>
									</tr>
									<tr>
										<td>City</td>
										<td><?php echo $cprofile_row->billing_city; ?></td>
									</tr>
									<tr>
										<td>State</td>
										<td><?php echo $cprofile_row->billing_state; ?></td>
									</tr>
									<tr>
										<td>Country</td>
										<td><?php echo $cprofile_row->billing_country; ?></td>
									</tr>
									<tr>
										<td>Zipcode</td>
										<td><?php echo $cprofile_row->billing_zip; ?></td>
									</tr>
								</table>
							</div>
                        </div>
						<?php 
							}
						?>
						<style>
							.nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
        .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 15px 0; }
.tab-content{padding:20px}

.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
						</style>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
								<div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Purchase History</a></li>
                                        <!--li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Wishlist</a></li-->
                                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Edit Profile</a></li>
                                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home"></div>
                                        <!--div role="tabpanel" class="tab-pane" id="profile"></div-->
                                        <div role="tabpanel" class="tab-pane" id="messages">
											<?php 
												foreach($cprofile as $cprofile_row1)
												{
											?>
											<form class="form-horizontal" action="<?php echo base_url(); ?>Customer/customerEdit/<?php echo $cprofile_row1->customer_id; ?>" method="POST" enctype="multipart/form-data">
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">First Name</label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" value="<?php echo $cprofile_row1->first_name; ?>" name="fname">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Last Name</label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" value="<?php echo $cprofile_row1->last_name; ?>" name="lname">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Email ID</label>
													<div class="col-sm-9">
													  <input type="email" class="form-control" value="<?php echo $cprofile_row1->email; ?>" name="email">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Phone No</label>
													<div class="col-sm-9">
													  <input type="number" class="form-control" value="<?php echo $cprofile_row1->phone; ?>" name="phone">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Billing Address1</label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" value="<?php echo $cprofile_row1->billing_address1; ?>" id="badd1" name="baddress1">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Billing Address2</label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" value="<?php echo $cprofile_row1->billing_address2; ?>" id="badd2" name="baddress2">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Billing City</label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" value="<?php echo $cprofile_row1->billing_city; ?>" id="bcity" name="bcity">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Billing State</label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" value="<?php echo $cprofile_row1->billing_state; ?>" id="bstate" name="bstate">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Billing Country</label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" value="<?php echo $cprofile_row1->billing_country; ?>" id="bcountry" name="bcountry">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Billing Zip</label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" value="<?php echo $cprofile_row1->billing_zip; ?>" id="bzip" name="bzip">
													</div>
												</div>
												<hr>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email"></label>
													<div class="col-sm-9">
													<input type="checkbox" value="" name="filltoo" id="filltoo" onclick="filladd()" />Billing Address same as Shipping Address
													</div>
												</div>
												<hr>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Shipping Address1</label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" value="<?php echo $cprofile_row1->shipping_address1; ?>" id="badd11" name="sadd11">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Shipping Address2</label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" value="<?php echo $cprofile_row1->shipping_address2; ?>" id="badd22" name="sadd22">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Shipping City</label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" value="<?php echo $cprofile_row1->shipping_city; ?>" id="bcity1" name="scity1">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Shipping State</label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" value="<?php echo $cprofile_row1->shipping_state; ?>" id="bstate1" name="sstate1">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Shipping Country</label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" value="<?php echo $cprofile_row1->shipping_country; ?>" id="bcountry1" name="scountry1">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Shipping Zip</label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" value="<?php echo $cprofile_row1->shipping_zip; ?>" id="bzip1" name="szip1">
													</div>
												</div>
												<?php 
												if($cprofile_row->uploadFile == "")
												{
												?>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">File</label>
													<div class="col-sm-9">
													  <input type="file" class="form-control" name="file">
													</div>
												</div>
												<?php 
												}
												else
												{
												?>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">File</label>
													<div class="col-sm-5">
													  <img src="<?php echo base_url(); ?>upload/cprofile/<?php echo $cprofile_row->uploadFile; ?>" class="img-responsive" style="width:150px;height:150px;"/>
													  <input type="file" class="form-control" name="file"><br>
													</div>
													<div class="col-sm-4">
													  
													  <input type="hidden" value="<?php echo $cprofile_row1->uploadFile; ?>" name="hidden_img"/>
													</div>
												</div>
												<?php
												}
												?>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email"></label>
													<div class="col-sm-4">
													  <input type="submit" class="form-control btn btn-warning" value="Update Profile" name="Update_customer_profile">
													</div>
												</div>
											</form>
											<script>
											function filladd()
											{
												 if(filltoo.checked == true) 
												 {
														 var badd1 =document.getElementById("badd1").value;
														 var badd2 =document.getElementById("badd2").value;
														 var bcity =document.getElementById("bcity").value;
														 var bstate =document.getElementById("bstate").value;
														 var bcountry =document.getElementById("bcountry").value;
														 var bzip =document.getElementById("bzip").value;

														var copybadd1 =badd1 ;
														var copybadd2 =badd2 ;
														var copybcity =bcity ;
														var copybstate =bstate ;
														var copybcountry =bcountry ;
														var copybzip =bzip ;

														document.getElementById("badd11").value = copybadd1;
														document.getElementById("badd22").value = copybadd2;
														document.getElementById("bcity1").value = copybcity;
														document.getElementById("bstate1").value = copybstate;
														document.getElementById("bcountry1").value = copybcountry;
														document.getElementById("bzip1").value = copybzip;
												 }
												 else if(filltoo.checked == false)
												 {
													 document.getElementById("badd11").value='';
													 document.getElementById("badd22").value='';
													 document.getElementById("bcity1").value='';
													 document.getElementById("bstate1").value='';
													 document.getElementById("bcountry1").value='';
													 document.getElementById("bzip1").value='';
												 }
											}
											</script>
											<?php 
												}
											?>
										</div>
                                        <div role="tabpanel" class="tab-pane" id="settings">
											<?php 
												foreach($cprofile as $cprofile_row2)
												{
											?>
												
											<form name="add" method="POST" action="<?php echo  base_url();?>Customer/pwd_update/<?php echo $cprofile_row2->customer_id; ?>" class="form-horizontal">
												<div class="form-body">
													
													<div class="form-group">
														<label class="control-label col-md-3">Old Password</label>
														<div class="col-md-5">
															<input name="old_password" placeholder="Old Password" class="form-control" type="password">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">New Password</label>
														<div class="col-md-5">
															<input name="new_password" placeholder="New Password" id="password" class="form-control" type="password">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Confirm Password</label>
														<div class="col-md-5">
															<input name="confirm_password" placeholder="Confirm Password" id="confirm_password" class="form-control" type="password">
															<span id='message'></span>
														</div>
													</div>
												</div>


											  <div style="text-align:center">
												 <input type="submit" name="submit_change_password" value="Save" class="btn btn-success">
												 <input type="reset" value="Clear" class="btn btn-danger">
											  </div>
										   </form>
										   <?php 
												}
										   ?>
											<script>
											var password = document.getElementById("password")
											  , confirm_password = document.getElementById("confirm_password");

											function validatePassword(){
											  if(password.value != confirm_password.value) {
												 confirm_password.setCustomValidity("Passwords Don't Match");
												 $('#message').html('Not Matching').css('color', 'red');
											  } else {
												  confirm_password.setCustomValidity('');
												   $('#message').html('Matching').css('color', 'green');
												
											  }
											}

											password.onchange = validatePassword;
											confirm_password.onkeyup = validatePassword;
											</script>
										</div>
                                    </div>
								</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login-area end -->	