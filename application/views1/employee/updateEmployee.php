<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Employee</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            <h2 class="panel-title">Employee Details</h2>
            <div style="text-align:right;">
               <a class="btn bg-violet" href="<?php echo  base_url();?>Employee/addNew"><i class="glyphicon glyphicon-plus"></i> Add </a>
               <a href="<?php echo  base_url();?>Employee/employeeList" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
            <hr/>
         </div>
         <div class="container-fluid">
            <!-- content Starts Here-->
			<div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
               <br>
               <?php if($message == "FAILED") { ?>
               <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Action Failed !!! </strong>
               </div>
               <?php } else if($message == "SUCCESS") {  ?>
               <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Success !!! </strong> Updated successfully
               </div>
               <?php } ?>
               <?php foreach($getEditdata as $row){?>
		
				<form name="add"   method="POST" action="<?php echo  base_url();?>Employee/editData/<?php echo $row->id;?>" 
				class="form-horizontal">
                  <div class="form-body">
					 <div class="form-body">
                           <div class="form-group">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-9">
                                <input name="name" placeholder="Employee Name" class="form-control" type="text" value="<?php echo $row->ename; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Date of Birth</label>
                            <div class="col-md-9">
                                <input name="dob" placeholder="yyyy-mm-dd" class="form-control pickadate-format" type="text" value="1980-01-01" value="<?php echo $row->dob; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3">Designation</label>
                            <div class="col-md-9">
                                <select name="designation" class="form-control">
                                    <option value="<?php echo $row->designation;?>"><?php echo $row->designation;?></option>
                                    <option value="">--Select Designation--</option>
                                    <option value="GS">GS</option>
                                    <option value="AGS">AGS</option>
                                    <option value="Manger">Manager</option>
                                    <option value="Secretary">Secretary</option>
                                    <option value="Officer">Officer</option>
                                    <option value="Manager">Manager</option>
                                    <option value="FrontDesk">Front Desk</option>

                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Branch</label>
                            <div class="col-md-9">
                                <select name="branch_no" class="form-control">
                                    <option value="">--Select Branch--</option>
                                    <?php foreach ($branchList as  $row1){ ?>
                  										<option value="<?php echo $row1->branch_no;?>">
                                        <?php  echo  $row1->branch_name;?></option><?php }?>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
							<label class="control-label co-md-3">Scope</label>
							<div class="col-md-9">
								<input type="text" name="scope" placeholder="Scope" class="form-control" value="<?php echo $row->scope; ?>">
							</div>
						</div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Street1</label>
                            <div class="col-md-9">
                                <input type="text" name="street1" placeholder="Street1" class="form-control" value="<?php echo $row->street1; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Street2</label>
                            <div class="col-md-9">
                                <input type="text" name="street2" placeholder="Street2" class="form-control" value="<?php echo $row->street2; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">City</label>
                            <div class="col-md-9">
                                <input type="text" name="city" placeholder="City" class="form-control" value="<?php echo $row->city; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">State</label>
                            <div class="col-md-9">
                                <input type="text" name="state" placeholder="State" class="form-control" value="<?php echo $row->state; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Country</label>
                            <div class="col-md-9">
                                <input type="text" name="country" placeholder="Country" class="form-control" value="<?php echo $row->country; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Phone Number</label>
                            <div class="col-md-9">
                                <input type="text" name="phone_number" placeholder="Phone Number" class="form-control" value="<?php echo $row->phone_number; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">E-Mail</label>
                            <div class="col-md-9">
                                <input type="email" name="email" placeholder="E-Mail" class="form-control" value="<?php echo $row->email;?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                  </div>
				   <div style="text-align:center">
                     <input type="submit" name="update_employee" value="Update" class="btn btn-success">
                     <input type="reset" value="Reset" class="btn btn-danger">
                  </div>
               </form>
			   <!--CKeditor-->
				
               <?php } ?>
               <br><br>
            </div>
			 <div class="col-md-1"></div>
			</div>
         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
   