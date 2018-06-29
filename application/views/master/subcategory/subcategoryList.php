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
      <li class="active">Subcategory</li>
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
					<li class="active"><a href="" >Subcategory List</a></li>
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
					<div style="text-align:right;">
					  <a class="btn bg-purple" href="<?php echo  base_url();?>Subcategory/Add"><i class="glyphicon glyphicon-plus"></i> Add </a>
				   </div>
				</div>
			</div>
			
           <hr/>
         <table class="table datatable-button-print-columns">
            <thead>
               <tr>

                 <th>Sno</th>
                 <th>Category</th>
                 <th>Subcategory</th>
                 <th style="width:180px;">Action </th>
               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
              foreach($categoryList as $row) {
            ?>
              <tr>
              <td><?php echo $i; ?></td>
              <td><?php 
				$data7 = $this->db->get_where('tbl_category', array('id'=>$row->category_id))->result();
				foreach ($data7 as $category_Type) {
					echo $category_Type->category;
				}
			  ?></td>
              <td><?php echo $row->sub_category;?></td>
              <td style="text-align:right">
              <a href="<?php echo base_url(); ?>Subcategory/Edit/<?php echo $row->id;?>" title="Edit" class="btn bg-success"><i class="glyphicon glyphicon-pencil "></i>
              </a>&nbsp;<a href="<?php echo base_url(); ?>Subcategory/Delete/<?php echo $row->id;?>"  title="Delete" class="btn bg-danger remove" onclick="return confirm('Are You Sure want to Delete');"><i class="glyphicon glyphicon-remove "></i></a>
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
