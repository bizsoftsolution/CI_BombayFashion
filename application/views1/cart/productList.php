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
      <li class="active">Product</li>
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
					<li class="active"><a href="" >Product List</a></li>
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
					  <a class="btn bg-purple" href="<?php echo  base_url();?>Product/Add"><i class="glyphicon glyphicon-plus"></i> Add </a>
				   </div>
				</div>
			</div>
			
           <hr/>
         <table class="table datatable-button-print-columns">
            <thead>
               <tr>

                 <th>Sno</th>
                 <th>Name</th>
                 <th>Price</th>
                 <th>Category</th>
                 <th>Sub Category</th>
                 <th>Featured Product</th>
                 <th>Latest Product</th>
                 <th>Status</th>
                 <th style="width:180px;">Action </th>
               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
              foreach($productList as $row) {
            ?>
              <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row->product_name;?></td>
              <td><?php echo $row->product_price;?></td>
              <td> 
			  <?php 
				$data7 = $this->db->get_where('tbl_category', array('id'=>$row->category_id))->result();
				foreach ($data7 as $category_Type) {
					echo $category_Type->category;
				}
			  ?>
			 </td>
              <td>
				<?php 
				//if($row->sub_category_id != NULL)
				//{
					//$tmore = explode(',', $row->sub_category_id);
					$tmore = $row->sub_category_id;
					//$ii=1;
					//foreach($tmore as $tlmore)
					//{
						//echo $tlmore;
						$data10 = $this->db->get_where('tbl_sub_category', array('id'=>$tmore))->result();
						foreach($data10 as $data10_row)
						{
						?>
						<p style="padding:0 0 1px 0px;float:left;">
						<span class="label bg-pink"><?php echo $data10_row->sub_category; ?></span>
						</p>
						<?php 
						}
					//}
				//}
				//else
				//{
					//echo " ";
				//}
				?>
			  </td>
              <td>
				<?php if ($row->featured_product == '0') { ?>
					<a href="<?php base_url() ?>Product/feature_status/<?php echo $row->id; ?>/1" data-toggle="tooltip" title="Inactive" class="btn btn-danger btn-rounded btn-condensed btn-sm changestatus" style="height: 25px;width: 44px;"><span  class="glyphicon glyphicon-ban-circle" title="Inactive" style="top: -2px;vertical-align: initial;"></span></a>
					<?php } else { ?>
					<a href="<?php base_url() ?>Product/feature_status/<?php echo $row->id; ?>/0" data-toggle="tooltip" title="Active" class="btn btn-success btn-rounded btn-condensed btn-sm changestatus" style="height: 25px;width: 44px;"><span class="glyphicon glyphicon-ok-circle" title="Active" style="top: -2px;vertical-align: initial;"></span></a>
				<?php } ?>
			  </td>
              <td>
				<?php if ($row->latest_product == '0') { ?>
					<a href="<?php base_url() ?>Product/latest_status/<?php echo $row->id; ?>/1" data-toggle="tooltip" title="Inactive" class="btn btn-danger btn-rounded btn-condensed btn-sm changestatus" style="height: 25px;width: 44px;"><span  class="glyphicon glyphicon-ban-circle" title="Inactive" style="top: -2px;vertical-align: initial;"></span></a>
					<?php } else { ?>
					<a href="<?php base_url() ?>Product/latest_status/<?php echo $row->id; ?>/0" data-toggle="tooltip" title="Active" class="btn btn-success btn-rounded btn-condensed btn-sm changestatus" style="height: 25px;width: 44px;"><span class="glyphicon glyphicon-ok-circle" title="Active" style="top: -2px;vertical-align: initial;"></span></a>
				<?php } ?>
			  </td>
              <td>
				<?php if ($row->status == '0') { ?>
					<a href="<?php base_url() ?>Product/product_status/<?php echo $row->id; ?>/1" data-toggle="tooltip" title="Inactive" class="btn btn-danger btn-rounded btn-condensed btn-sm changestatus" style="height: 25px;width: 44px;"><span  class="glyphicon glyphicon-ban-circle" title="Inactive" style="top: -2px;vertical-align: initial;"></span></a>
					<?php } else { ?>
					<a href="<?php base_url() ?>Product/product_status/<?php echo $row->id; ?>/0" data-toggle="tooltip" title="Active" class="btn btn-success btn-rounded btn-condensed btn-sm changestatus" style="height: 25px;width: 44px;"><span class="glyphicon glyphicon-ok-circle" title="Active" style="top: -2px;vertical-align: initial;"></span></a>
				<?php } ?>
			  </td>
              <td style="text-align:right">
              <a href="<?php echo base_url(); ?>Product/Edit/<?php echo $row->id;?>" title="Edit" class="btn bg-success"><i class="glyphicon glyphicon-pencil "></i>
              </a>&nbsp;<a href="<?php echo base_url(); ?>Product/Delete/<?php echo $row->id;?>"  title="Delete" class="btn bg-danger remove" onclick="return confirm('Are You Sure want to Delete');"><i class="glyphicon glyphicon-remove "></i></a>
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
