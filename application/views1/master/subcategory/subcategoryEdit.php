<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li class="active">Subcategory</li>
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
				<h3 class="panel-title">Subcategory Edit
			</h3>
			</div>
			<div class="col-md-6">
				<div style="text-align:right;">
               <a href="<?php echo  base_url();?>Subcategory" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
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
                  <strong>Success !!! </strong> Subcategory Updated successfully
               </div>
               <?php } ?>
               <?php foreach($subcategory as $row){?>
               <form name="add"   method="POST" action="<?php echo  base_url();?>Subcategory/Edit/<?php echo $row->id;?>" class="form-horizontal">
                  <div class="form-body">
					<div class="form-group">
                        <label class="control-label col-md-3"><b>Category</b> <strong style="color:red;">*</strong></label>
						<div class="col-md-9">
						<select class="form-control" name="category_type" required>
						  <option value="">--Select Category--</option>
						  <?php
							$data7 = $this->db->get('tbl_category')->result();
							foreach ($data7 as $category) 
							{
							 ?>
							 <option value="<?php echo $category->id;?>" <?php if($category->id == $row->category_id){echo "selected";}?>><?php echo $category->category ;?></option>
						  <?php } ?>
					   </select>
					   </div>
					</div>
                     <div class="form-group">
                        <label class="control-label col-md-3"><b>Subcategory Name</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
                           <input name="subcategoryname" class="form-control" type="text" value="<?php echo $row->sub_category;?>" required="required">
                           <span class="help-block"></span>
                        </div>
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
   