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
      <li><a href="<?php echo base_url();?>Dashboard">Dashboard</a></li>
      <li class="active">Shipping Charge</li>
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
				<h3 class="panel-title">Add New Shipping Charge
			</h3>
			</div>
			<div class="col-md-6">
				<div style="text-align:right;">
               <a href="<?php echo  base_url();?>ShippingCharge" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
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
               <br>
               <!--<?php if($message == "FAILED") { ?>
               <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Action Failed !!! </strong>
               </div>
               <?php } else if($message == "SUCCESS") {  ?>
               <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Success !!! </strong> New Size Created successfully
               </div>
               <?php } ?>-->
			   
			   <?php
				if($this->session->flashdata('item')) {
				$message = $this->session->flashdata('item');
				?>
				<div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?>

				</div>
				<?php
				}
				?>
		
               <form name="add"   method="POST" action="<?php echo  base_url();?>ShippingCharge/Add" class="form-horizontal form-validate-jquery" enctype="multipart/form-data">
                  <div class="form-body">
                     <div class="form-group">
                        <label class="control-label col-md-3"><b>File:</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
							<input type="file" name="file" id="file1" class="form-control file-styled" required="required">
                           <!--input name="excelfilename" class="form-control file-styled" type="file" required="required"-->
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"></label>
                        <div class="col-md-9">
                          <input type="submit" name="import" value="Import" class="btn btn-success">
                        </div>
                     </div>
                  </div>
                 
               </form>

               <br><br>
            </div>
         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
