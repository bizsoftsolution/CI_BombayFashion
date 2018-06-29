<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Employee Details</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
        <div class="panel-heading">
           <h2 class="panel-title">Employee List</h2>
           <div style="text-align:right;">
              <button class="btn btn-danger" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Add Person</button>
             <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
           </div>
           <hr/>
        </div>
         <table class="table datatable-button-print-columns">
            <thead>
               <tr>
					<th>Name</th>
					<th>Date of Birth</th>
					<th>Designation</th>
					<th>Phone Number</th>
					<th>Email</th>
                 <th style="width:150px;">Action </th>
               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
              foreach($employeeList as $row) {
            ?>
              <tr>
              <td><?php echo $row->ename; ?></td>
              <td><?php echo $row->dob;?></td>
              <td><?php echo $row->designation;?></td>
              <td><?php echo $row->phone_number;?></td>
              <td><?php echo $row->email;?></td>
             
              <td style="text-align:right">
              <a href="<?php echo base_url(); ?>Employee/editData/<?php echo $row->id;?>" title="Edit" class="btn bg-success"><i class="glyphicon glyphicon-pencil "></i>
              </a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>Employee/deleteData/<?php echo $row->id;?>"  title="Delete" class="btn bg-danger remove" onclick="return confirm('Are You Sure to delete');"><i class="glyphicon glyphicon-remove "></i></a>
              </td>
              </tr>
              <?php $i++;}?>


            </tbody>
         </table>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
