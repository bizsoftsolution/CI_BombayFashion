
<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="<?php echo base_url();?>Dashboard">Dashboard</a></li>
      <li class="active">Product</li>
   </ul>
</div>
<br>
<style>
	.form-horizontal .radio, .form-horizontal .checkbox, .form-horizontal .radio-inline, .form-horizontal .checkbox-inline
	{
		padding-top: 0px;
	}
	.checkbox .checker, .form-horizontal .checkbox-inline .checker
	{
		top:0px;
	}
	.checkbox .checker, .checkbox-inline .checker
	{
		top: 0px;
	}
</style>
<!-- Main charts -->
<div class="row">
	<?php 
		foreach($product as $row)
		{
	?>
	<div class="col-lg-12">
      <!-- Traffic sources -->
		<div class="panel panel-flat">
			 <div class="panel-heading">
				<div class="col-md-3">
					<h3 class="panel-title"><?php echo $row->product_name; ?>
				</h3>
				</div>
				<div class="col-md-6">
					<!--h3 class="panel-title">Add New Category
				</h3-->
				</div>
				<div class="col-md-3">
					<div style="text-align:right;">
				   <a href="<?php echo  base_url();?>Product" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
				</div>
				</div>
			 </div>
			 <div class="panel-body"></div>
		</div>
	</div>
	
	<form class="form-horizontal form-validate-jquery" action="<?php echo base_url();?>Product/Edit/<?php echo $row->id; ?>" method="POST" enctype="multipart/form-data">
	<div class="col-lg-8">
		<div class="panel panel-flat">
			<div class="panel-heading"></div>
				<div class="panel-body">
					<fieldset class="content-group">
						<legend class="text-bold">Product Details</legend>
						<!--div class="form-group">
							<label class="col-lg-3 control-label">Product Code<span class="text-danger">*</span>&nbsp;&nbsp;
							<br><a style="cursor: pointer;" class="AutoGenerate">Auto Generate</a></label>
							<div class="col-lg-9">
								<input class="form-control" type="text" id="product_code" value="<?php echo set_value('product_code'); ?>" name="product_code" placeholder="Product Code" >
							</div>
						</div-->
						<!-- Basic text input -->
						<div class="form-group">
							<label class="control-label col-lg-3">Product Name<span class="text-danger">*</span></label>
							<div class="col-lg-9">
								<input type="text" name="productname" class="form-control" required="required" value="<?php echo $row->product_name; ?>">
							</div>
						</div>
						<!-- /basic text input -->
						<!-- Basic textarea -->
						<div class="form-group">
							<label class="control-label col-lg-3">Product Description<span class="text-danger">*</span></label>
							<div class="col-lg-9">
								<textarea rows="5" cols="5" name="productdescription" class="form-control" required="required"><?php echo $row->product_description; ?></textarea>
							</div>
						</div>
						<!-- /basic textarea -->
						<!-- Select2 select -->
						<div class="form-group">
							<label class="control-label col-lg-3">Product Category <span class="text-danger">*</span></label>
							<div class="col-lg-9">
								<select name="productcategory" class="select" required="required" id="category">
										<option label="Select Category"></option>
										<?php 
											$data1=$this->db->get('tbl_category')->result_array();
											foreach ($data1 as $data1_row) 
											{
												?>
										   <option value="<?php echo $data1_row['id'];?>" <?php if($data1_row['id']==$row->category_id){echo "selected";}?>><?php echo $data1_row['category'];?></option> 
										   <?php
											}
										?>
										
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Sub Category <span class="text-danger">*</span></label>
							<div class="col-md-9">
							   <select class="form-control select" name="productsubcategory" id="subcategory">
								   <?php
									$split_scat = explode(',',$row->sub_category_id);
									$S_category=$this->db->get('tbl_sub_category')->result();									
								  foreach($S_category as $tmm) {
									 ?>
									 <option value="<?php echo $tmm->id;?>" <?php if(in_array($tmm->id,$split_scat)){echo "selected";}?>
									 ><?php echo ($tmm->sub_category=='' ? $tmm->id : $tmm->sub_category) ;?></option>
								  <?php
										}
								  ?>
							   </select>
							   <span class="help-block"></span>
							</div>
						 </div>
						<div class="form-group">
							<label class="control-label col-lg-3">Related Product<span class="text-danger">*</span></label>
							<div class="col-lg-9">
								<div class="multi-select-full">
								<select name="relatedproduct[]" class="form-control multiselect" multiple="multiple">
									<optgroup label="Select Related Product">
										<?php 
											$split_rprod = explode(',',$row->related_product);
											$data4 = $this->db->get('tbl_product')->result();
											foreach($data4 as $data4_row)
											{
										?>
										 <option value="<?php echo $data4_row->id;?>" <?php if(in_array($data4_row->id,$split_rprod)){echo "selected";}?>
									 ><?php echo ($data4_row->product_name=='' ? $data4_row->id : $data4_row->product_name) ;?></option>
										<?php
											}
										?>
									</optgroup>
								</select>
								</div>
							</div>
						</div>
						<!--div class="form-group">
							<label class="control-label col-lg-3">Featured Product<span class="text-danger">*</span></label>
							<div class="col-lg-9">
								<label class="checkbox-inline">
									<input type="checkbox" name="featuredproduct" class="styled" value="1" <?php echo ($row->featured_product=='1' )? 'checked': '' ?>>
								</label>
							</div>
						</div-->
					</fieldset>
				</div>
		</div>
      <!-- /traffic sources -->
   </div>
   <div class="col-lg-4">
		<div class="panel panel-flat">
			<div class="panel-heading"></div>  
				<div class="panel-body">
					<!--p class="content-group-lg"></p-->
					<fieldset class="content-group">
						<legend class="text-bold">Price Details</legend>
						<!-- Numbers only -->
						<div class="form-group">
							<label class="control-label col-lg-3">Price</label>
							<div class="col-lg-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="icon-cash"></i></span>
									<input type="text" name="numbers" class="form-control" required="required" id="rate" value="<?php echo $row->product_price; ?>">
									
								</div>
							</div>
						</div>
						<!-- /numbers only -->
						<!-- Digits only -->
						<div class="form-group">
							<label class="control-label col-lg-3">Quantity</label>
							<div class="col-lg-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="icon-cube2"></i></span>
									<input type="text" name="digits" class="form-control quantity" required="required" id="quantity" value="<?php echo $row->quantity; ?>">
									
								</div>
							</div>
						</div>
						
						<!-- /digits only -->
						<!-- Numbers only -->
						<div class="form-group">
							<label class="control-label col-lg-3">Gross <br> Amount</label>
							<div class="col-lg-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="icon-cash4"></i></span>
									<input type="text" name="grossamount" class="form-control" readonly="" id="gross" value="<?php echo $row->gross_amount; ?>">
									
								</div>
							</div>
						</div>
						<!-- /numbers only -->
						<!-- Touchspin spinners -->
						<div class="form-group">
							<label class="control-label col-lg-3">Discount</label>
							<div class="col-lg-9">
								<div class="input-group">
								<span class="input-group-addon"><i class="icon-percent"></i></span>
									<input type="text" class="form-control discount" name="discount" id="discount" value="<?php echo $row->discount; ?>">
								</div>
							</div>
						</div>
						
						<!-- /touchspin spinners -->
						<!-- Numbers only -->
						<div class="form-group">
							<label class="control-label col-lg-3">Net <br> Amount</label>
							<div class="col-lg-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="icon-cash3"></i></span>
									<input type="text" name="netamount" class="form-control" readonly="" id="net" value="<?php echo $row->net_amount; ?>">
								</div>
							</div>
						</div>
						<!-- /numbers only -->
					</fieldset>
				</div>
      </div>
		<div class="panel panel-flat">
			<div class="panel-heading"></div>  
			<div class="panel-body">
				<!-- Basic select -->
				<div class="form-group">
					<label class="control-label col-lg-3">Color<span class="text-danger">*</span></label>
					<div class="col-lg-9">
						<div class="multi-select-full">
						<select name="productcolor[]" class="form-control multiselect" multiple="multiple" required="required">
							<optgroup label="Select Product Color">
								<?php 
									$split_cid = explode(',',$row->color_id);
									$data2 = $this->db->get('tbl_color')->result();
									foreach($data2 as $data2_row)
									{
								?>
								 <option value="<?php echo $data2_row->id;?>" <?php if(in_array($data2_row->id,$split_cid)){echo "selected";}?>
							 ><?php echo ($data2_row->color=='' ? $data2_row->id : $data2_row->color) ;?></option>
								<?php
									}
								?>
							</optgroup>
						</select>
						</div>
					</div>
				</div>
				<!-- /basic select -->
				<div class="form-group">
					<label class="control-label col-lg-3">Size<span class="text-danger">*</span></label>
					<div class="col-lg-9">
						<div class="multi-select-full">
						<select name="productsize[]" class="form-control multiselect" multiple="multiple">
							<optgroup label="Select Product Size">
								<?php 
									$split_sid = explode(',',$row->size_id);
									$data3 = $this->db->get('tbl_size')->result();
									foreach($data3 as $data3_row)
									{
								?>
								 <option value="<?php echo $data3_row->id;?>" <?php if(in_array($data3_row->id,$split_sid)){echo "selected";}?>
							 ><?php echo ($data3_row->size=='' ? $data3_row->id : $data3_row->size) ;?></option>
								<?php
									}
								?>
							</optgroup>
						</select>
						</div>
					</div>
				</div>
			</div>
		</div>
   </div>
   <div class="col-lg-12">
		<div class="panel panel-flat">
			<div class="panel-heading"></div>
			<div class="panel-body">
				<fieldset class="content-group">
					<legend class="text-bold">Product Images</legend>
					<div class="form-group">
                        <label class="control-label col-md-2">Banner</label>
						<div class="col-md-10">
							<img src="<?php echo base_url(); ?>upload/products/banner/<?php echo $row->banner_image; ?>" class="img-responsive" style="width:120px; height:120px;margin:0 0 5px 0;">
							<input type="hidden" name="already_bannerimg" value="<?php echo $row->banner_image; ?>">
						</div>
						<div class="col-lg-12"></div>
						<label class="control-label col-md-2"></label>
						<div class="col-md-10">
							<input name="edit_bg_image" class="form-control file-styled" type="file" value="<?php echo $row->banner_image; ?>">
                           <span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
                        <label class="control-label col-md-2">Thumbnail Image</label>
						<div class="col-md-10">
						<?php if ($row->product_image) { 
						//echo $row->image;
						$img = explode(',', trim($row->product_image, ','));
						foreach($img as $rowimg)
						{
							?>
							<div class="field_wrapper99">
							<div class="col-md-3">
							<img src="<?php echo base_url(); ?>upload/products/<?php echo $rowimg; ?>" class="img-responsive" style="width:120px; height:120px;margin:0 0 5px 0;">
							<input type="hidden" name="already_img[]" value="<?php echo $rowimg; ?>">
							<a href="javascript:void(0);" class="remove_button2" title="Remove field"
							style="position: absolute;margin: -30px 4px 0px 0px;background:#f5f5f5;;"
							><img src="<?php echo base_url(); ?>/upload/x.png" style="width:25px; height:25px;"/></a>
							</div>
							</div>
							<script type="text/javascript">
								$(document).ready(function(){
									//var maxField = 4; //Input fields increment limitation
									//var addButton = $('.add_button2'); //Add button selector
									var wrapper = $('.field_wrapper99'); //Input field wrapper	
									var x = 1; //Initial field counter is 1
									
									$(wrapper).on('click', '.remove_button2', function(e){ //Once remove button is clicked
										e.preventDefault();
										$(this).parent('div').remove(); //Remove field html
										x--; //Decrement field counter
									});
								});
							</script>
							<?php
						}
						
						?>
							
						<?php }else{ echo(" <h3>Upload Photo</h3>"); } ?>
						</div>
						<div class="col-lg-12">&nbsp;</div>
						<label class="control-label col-md-2"></label>
						<div class="col-md-10">
						
						<div id="filediv"><input name="file[]" type="file" id="file"/></div>
							<input type="button" id="add_more" class="upload" value="Add More Files" />
						   <!--input name="file" class="form-control file-styled" type="file" required=""-->
						   <span class="help-block">Accepted formats: jpg. Max file size 2Mb</span>
						</div>
                    </div>
				</fieldset>
				<div class="text-right">
					<input type="submit" class="btn btn-primary icon-arrow-right14 position-right" value="Update" name="Update_product_data"> 
				</div>
			</div>
		</div>
   </div>
   </form>
   <?php 
		}
   ?>
</div>
<!-- /dashboard content -->
<script type="text/javascript">
    // <![CDATA[
    $(document).ready(function() {
     		   $('#category').change(function() { //any select change on the dropdown with id country trigger this code
            //	alert("dhngfdhg");
            $("#subcategory > option").remove(); //first of all clear select items
            var category_id = $('#category').val(); // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>Product/viewSubCategory/" + category_id, //here we are calling our user controller and get_cities method with the country_id

                success: function(cities) //we're calling the response json array 'cities'
                    {
                        $.each(cities, function(id, city) //here we're doing a foeach loop round each city with id as the key and city as the value
                            {
                                var opt = $('<option />'); // here we're creating a new select option with for each city
                                opt.val(id);
                                opt.text(city);
                                $('#subcategory').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                            });
                    }

            });

        });
    });
    // ]]>
</script>

<script>  
$('document').ready(function()
{
	$('.AutoGenerate').bind("click", function() {
            $.post("<?php echo base_url() . 'Product/product_code' ?>", {}, function(data) {
                    $('#product_code').val(data);
            });
	});
	var quantity_blur=function()
	{
		var quantity = $('#quantity').val().trim();
		if(quantity==='' || isNaN(quantity))
		{
			$('#quantity').val('1');
			quantity='1';
		}

		var rate = parseFloat($('#rate').val());
		var gross = parseFloat(rate * quantity);
		
		$('#gross').val(gross.toFixed(2));
	};

	var discount_blur=function()
	{
		var discount = $('#discount').val().trim();
		if(discount==='' || isNaN(discount))
		{
			$('#discount').val('0');
			discount='0';
		}
		var gross = $('#gross').val();
		var net = gross - (gross*discount/100);
		
		$('#net').val(net.toFixed(2));
	}
	$('.quantity').blur(quantity_blur);
	$('.discount').blur(discount_blur);
	 
}); 
</script>