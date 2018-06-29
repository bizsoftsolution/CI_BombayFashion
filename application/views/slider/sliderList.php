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
			<div class="col-md-3">
				<h3 class="panel-title">Slider Details</h3>
			</div>
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
			<div class="col-md-3">
				<div style="text-align:right;">
				  <a class="btn bg-purple" href="<?php echo  base_url();?>Slider/Add"><i class="glyphicon glyphicon-plus"></i> Add </a>
			   </div>
			</div>
           <hr/>
        </div>
         <table class="table datatable-button-print-columns">
            <thead>
               <tr>

                 <th>Sno</th>
                 <th>Slider</th>
                 <th>Status</th>
                 <th style="width:150px;">Action </th>

               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
              foreach($sliderList as $row) {
            ?>
              <tr>
              <td><?php echo $i; ?></td>
              <td><img src="<?php echo base_url(); ?>upload/slider/<?php echo $row->slider;?>" style="width:100px;height:60px;"/></td>
			  <td>
				<?php if ($row->status == '0') { ?>
					<a href="<?php base_url() ?>Slider/slider_status/<?php echo $row->id; ?>/1" data-toggle="tooltip" title="Inactive" class="btn btn-danger btn-rounded btn-condensed btn-sm changestatus" style="height: 25px;width: 44px;"><span  class="glyphicon glyphicon-ban-circle" title="Inactive" style="top: -2px;vertical-align: initial;"></span></a>
					<?php } else { ?>
					<a href="<?php base_url() ?>Slider/slider_status/<?php echo $row->id; ?>/0" data-toggle="tooltip" title="Active" class="btn btn-success btn-rounded btn-condensed btn-sm changestatus" style="height: 25px;width: 44px;"><span class="glyphicon glyphicon-ok-circle" title="Active" style="top: -2px;vertical-align: initial;"></span></a>
				<?php } ?>
			  </td>
              <td style="text-align:right">
              <a href="<?php echo base_url(); ?>Slider/Edit/<?php echo $row->id;?>" title="Edit" class="btn bg-success"><i class="glyphicon glyphicon-pencil "></i>
              </a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>Slider/Delete/<?php echo $row->id;?>"  title="Delete" class="btn bg-danger remove" onclick="return confirm('Are You Sure to delete');"><i class="glyphicon glyphicon-remove "></i></a>
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
