<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li class="active">Order Details</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            
			<div class="col-md-6">
				<h3 class="panel-title">Order Details
			</h3>
			</div>
			<div class="col-md-6">
				<div style="text-align:right;">
               <a href="<?php echo  base_url();?>Order" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
			</div>
         </div>
		 <br>
		 <hr/>
         <div class="container-fluid">
            <!-- content Starts Here-->
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <br>

					<?php 
						$id = $this->uri->segment(3);
						$order_details_val = $this->db->get_where('tbl_order_details', array("order_id"=>$id))->result();
						foreach($order_details_val as $order_details)
						{
					?>
					<form name="add"   method="POST" action="<?php echo  base_url();?>Order/View/<?php echo $order_details->order_id;?>" class="form-horizontal">
					<div class="table-responsive">
						<table class="table table-striped" style="border:1px solid #c3b9b9;">
							
							<tr>
								<th style="width:50%">Product Name</th>
								<td style="width:50%"><?php echo $order_details->product_name; ?></td>
							</tr>
							<tr>
								<th>Quantity</th>
								<td><?php echo $order_details->qty; ?></td>
							</tr>
							<tr>
								<th>Product Price</th>
								<td><?php echo $order_details->product_price; ?></td>
							</tr>
							<tr>
								<th>Size</th>
								<td>
								<?php 
									$size_id = $this->db->get_where('tbl_size', array("id"=>$order_details->size_id))->result();
									foreach($size_id as $size_row)
									{
										echo $size_row->size;
									}
								?>	
										
								</td>
							</tr>
							<tr>
								<th>Color</th>
								<td><?php //echo $order_details->color_id; ?>
								
								<?php 
									$color_id = $this->db->get_where('tbl_color', array("id"=>$order_details->color_id))->result();
									foreach($color_id as $color_row)
									{
								?>
								<div style="height: 20px; width:20px; background:<?php echo $color_row->color_code; ?>"></div>
								<?php 
									}
								?>
								</td>
							</tr>
							<tr style="    background: #2196f3;color: #fff;
    font-size: 16px;
    font-weight: bold">
								<th>Total</th>
								<td><?php echo $order_details->sub_total; ?></td>
								
								
								<input type="hidden" value="<?php echo $order_details->product_id; ?>" name="pro_id">
								<input type="hidden" value="<?php echo $order_details->qty; ?>" name="qty_id">
							</tr>
						
						</table>
					</div>
						<div style="margin:15px 0;"></div>
						<?php 
						}
					?>
					
					<?php 
						$id = $this->uri->segment(3);
						$order_val = $this->db->get_where('tbl_order', array("id"=>$id))->result();
						foreach($order_val as $order)
						{
					?>
					
					<div class="table-responsive">
						<table class="table table-striped" style="border:1px solid #c3b9b9;">
							<tr>
								<th>Order No</th>
								<td><?php echo $order->order_no; ?></td>
							</tr>
							<tr>
								<th>Order Date</th>
								<td><?php echo date("d/M/Y", strtotime($order->order_date)); ?></td>
							</tr>
							<tr>
								<th style="width:50%">Shipping Charge</th>
								<td style="width:50%"><?php echo $order->shipping_charge; ?></td>
							</tr>
							<tr>
								<th>GST</th>
								<td><?php echo $order->gst; ?></td>
							</tr>
							
							<tr style="    background: #2196f3;color: #fff;
    font-size: 16px;
    font-weight: bold">
								<th>Grand Total</th>
								<td><?php echo $order->grandtotal; ?></td>
							</tr>
							
						
						</table>
					</div>
						<div style="margin:15px 0;"></div>
						
					<div class="table-responsive">
						<table class="table table-striped" style="border:1px solid #c3b9b9;">
							<tr>
								<th style="width:50%"><b>Product Status</b></th>
								<td style="width:50%">
									<select class="form-control" name="orderstatus">
										<option label="Status"></option>
										<option value="DELIVERED">DELIVERED</option>
										<option value="PROCESSING">PROCESSING</option>
									</select>
								</td>
								
								
							</tr>
						</table>
					</div>
					<?php 
						$id = $this->uri->segment(3);
						$sale_val = $this->db->get_where('tbl_checkout', array("sale_id"=>$id))->result();
						foreach($sale_val as $saleid)
						{
					?>
						<input type="hidden" value="<?php echo $saleid->email; ?>" name="emailid">
					<?php 
						}
					?>
					
				<div style="margin:25px 0;"></div>	
                  <div style="text-align:center">
                     <input type="submit" name="submit" value="Update" class="btn btn-success">
                     <input type="reset" value="Reset" class="btn btn-danger">
                  </div>
               </form>
			   <?php 
						}
					?>
              
               <br><br>
            </div>
         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
   