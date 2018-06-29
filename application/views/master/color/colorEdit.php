<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li class="active">Color</li>
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
				<h3 class="panel-title">Color Edit
			</h3>
			</div>
			<div class="col-md-6">
				<div style="text-align:right;">
               <a href="<?php echo  base_url();?>Color" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
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
               <?php if($message == "FAILED") { ?>
               <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Action Failed !!! </strong>
               </div>
               <?php } else if($message == "SUCCESS") {  ?>
               <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Success !!! </strong> Color Updated successfully
               </div>
               <?php } ?>
               <?php foreach($color as $row){?>
               <form name="add"   method="POST" action="<?php echo  base_url();?>Color/Edit/<?php echo $row->id;?>" class="form-horizontal">
                  <div class="form-body">
                     <div class="form-group">
                        <label class="control-label col-md-3"><b>Color Name</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
                           <input name="colorname" class="form-control" type="text" value="<?php echo $row->color;?>" required="required">
                           <span class="help-block"></span>
                        </div>
                     </div>
                  </div>
				<div class="form-group">
					<label class="control-label col-md-3"><b>Choose Color</b> <strong style="color:red;">*</strong></label>
					<div class="col-md-9">
					   <input type="text" class="form-control colorpicker-show-input" data-preferred-format="hex" value="<?php echo $row->color_code;?>" required="" name="choosecolor">
					   <span class="help-block "></span>
					</div>
				 </div>
                  <div style="text-align:center">
                     <input type="submit" name="submit" value="Update" class="btn btn-success">
                     <input type="reset" value="Reset" class="btn btn-danger">
                  </div>
               </form>
               <?php } ?>
               <br><br>
            </div>
         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
   