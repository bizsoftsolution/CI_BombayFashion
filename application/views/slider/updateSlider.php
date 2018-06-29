<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li class="active">Slider</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            <h2 class="panel-title">Slider Details</h2>
            <div style="text-align:right;">
               <!--a class="btn bg-violet" href="<?php echo  base_url();?>SAslider/addNew"><i class="glyphicon glyphicon-plus"></i> Add </a-->
               <a href="<?php echo  base_url();?>Slider" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
            <hr/>
         </div>
         <div class="container-fluid">
            <!-- content Starts Here-->
            <!--div class="col-md-2"></div-->
            <div class="col-md-12">
               <br>
               <?php foreach($slider as $row){?>
               <form name="add"   method="POST" action="<?php echo  base_url();?>Slider/Edit/<?php echo $row->id;?>" class="form-horizontal form-validate-jquery" enctype="multipart/form-data">
                  <div class="form-body">
                     <div class="form-group">
                        <label class="control-label col-md-3">Slider</label>
						<div class="col-md-9">
						<img src="<?php echo base_url(); ?>upload/slider/<?php echo $row->slider; ?>" class="img-responsive" style="width:180px; height:100px;">
						<input name="get_image_name" class="form-control file-styled" type="hidden" value="<?php echo $row->slider;?>">
						</div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"></label>
                        <div class="col-md-8">
                           <input name="edit_bg_image" class="form-control file-styled" type="file" required="required">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"></label>
                        <div class="col-md-9">
                           <input type="submit" name="submit_updatebgimage" value="Update" class="btn btn-success">
                        </div>
                     </div>
                  </div>
               </form>
			   <hr>

               <?php } ?>
               <br><br>
            </div>
         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
   