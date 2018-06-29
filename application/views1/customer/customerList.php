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
      <li class="active">Customer</li>
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
					<li class="active"><a href="" >Customer List</a></li>
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
				<div class="col-md-6">
					<!--div style="text-align:right;">
					  <a class="btn bg-purple" href=""><i class="glyphicon glyphicon-plus"></i> Add </a>
				   </div-->
				</div>
			</div>
			
           <hr/>
         <table class="table datatable-button-print-columns">
            <thead>
               <tr>

                 <th>Sno</th>
                 <th>Name</th>
                 <th>Email ID</th>
                 <th>Phone No</th>
                 <th>Status</th>
                 <th style="text-align:center">Action </th>
               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
              foreach($customerList as $row) {
            ?>
              <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row->first_name.''.$row->last_name; ?></td>
              <td><?php echo $row->email;?></td>
              <td><?php echo $row->phone;?></td>
              
              <td>
				<?php if ($row->status == '0') { ?>
					<a href="<?php echo base_url(); ?>Admin/customer_status/<?php echo $row->customer_id; ?>/1" data-toggle="tooltip" title="Inactive" class="btn btn-danger btn-rounded btn-condensed btn-sm changestatus" style="height: 25px;width: 44px;"><span  class="glyphicon glyphicon-ban-circle" title="Inactive" style="top: -2px;vertical-align: initial;"></span></a>
					<?php } else { ?>
					<a href="<?php echo base_url(); ?>Admin/customer_status/<?php echo $row->customer_id; ?>/0" data-toggle="tooltip" title="Active" class="btn btn-success btn-rounded btn-condensed btn-sm changestatus" style="height: 25px;width: 44px;"><span class="glyphicon glyphicon-ok-circle" title="Active" style="top: -2px;vertical-align: initial;"></span></a>
				<?php } ?>
			  </td>
              <td style="text-align:center">
              <!--a href="<?php echo base_url(); ?>Admin/Edit/<?php echo $row->id;?>" title="Edit" class="btn bg-success"><i class="glyphicon glyphicon-pencil "></i>
              </a--><a href="<?php echo base_url(); ?>Admin/customer_view/<?php echo $row->customer_id;?>"  title="View" class="btn bg-primary remove" ><i class="glyphicon glyphicon-eye-open"></i></a>
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
