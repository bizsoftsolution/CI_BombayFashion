<script type="application/javascript">
/** After windod Load */
$(window).bind("load", function() {
  window.setTimeout(function() {
    $(".alert").fadeTo(300, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);
});
</script>
<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li class="active">Order Placed</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
		
		<div class="panel-body">
			<div class="tabbable">
				<ul class="nav nav-tabs nav-tabs-highlight">
					<li class="active"><a href="" >Order Placed List</a></li>
				</ul>

				<div class="tab-content">
					<div class="active">
      <!-- Traffic sources -->
			<div class="row">
				<div class="col-md-6">
					<?php
					if($this->session->flashdata('notification')) 
					{
					$message = $this->session->flashdata('notification');
					?>
					<div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?>

					</div>
					<?php
					}
					?>
				</div>
				<!--div class="col-md-6">
					<div style="text-align:right;">
					  <a class="btn bg-purple" href="<?php echo  base_url();?>Size/Add"><i class="glyphicon glyphicon-plus"></i> Add </a>
				   </div>
				</div-->
			</div>
			
           <hr/>
         <table class="table datatable-button-print-columns">
            <thead>
               <tr>

                 <th>Order No</th>
                 <th>Order Date</th>
                 <th>Buyer Name</th>
                 <th>Grand Amount</th>
                 <th>Status</th>
                 <th style="width:180px;text-align:center;">Action </th>
               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
              foreach($orderList as $row) {
            ?>
              <tr>
              <!--td><?php echo $i; ?></td-->
              <td><?php echo $row->order_no;?></td>
              <td><?php echo $row->order_date;?></td>
              <td><?php 
				$usertbl = $this->db->get_where("user", array("user_id"=>$row->customer_id))->result();
				foreach($usertbl as $user_row)
				{
					echo $user_row->first_name.' '.$user_row->last_name;
				}
			 // echo $row->customer_id;
			  ?></td>
              <td><?php echo $row->grandtotal;?></td>
              <td>
				<?php 
					if($row->status == "PROCESSING")
					{
				?>
				<span style="background-color: #d9534f;
				border-color: #d9534f;
				color: #fff; display: inline-block;
				font-weight: 500;
				padding: 2px 5px 1px 5px;
				line-height: 1.5384616;
				border: 1px solid transparent;
				text-transform: uppercase;
				font-size: 10px;
				letter-spacing: 0.1px;
				border-radius: 2px;">Order Placed</span>
				<?php 
					}
					else
					{		
				?>
				<span style="background-color: #5cb85c;
				border-color: #5cb85c;
				color: #fff; display: inline-block;
				font-weight: 500;
				padding: 2px 5px 1px 5px;
				line-height: 1.5384616;
				border: 1px solid transparent;
				text-transform: uppercase;
				font-size: 10px;
				letter-spacing: 0.1px;
				border-radius: 2px;">Delivered</span>
				<?php
					}
					//echo $row->status;
				?>
			 
			  </td>
              <td style="text-align:center;">
              <a href="<?php echo base_url(); ?>Order/View/<?php echo $row->id;?>" title="View" class="btn bg-primary"><i class="glyphicon glyphicon-eye-open"></i>
              </a>&nbsp;<!--a href="<?php echo base_url(); ?>Order/Delete/<?php echo $row->id;?>"  title="Delete" class="btn bg-danger remove" onclick="return confirm('Are You Sure want to Delete');"><i class="glyphicon glyphicon-remove "></i></a-->
              </td>
              </tr>
              <?php $i++;}?>


            </tbody>
         </table>
      <!-- /traffic sources -->
					</div>
				</div>
			</div>
		</div>
		
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
