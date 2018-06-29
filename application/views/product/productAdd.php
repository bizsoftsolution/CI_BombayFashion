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
	
	<div class="col-lg-12">
      <!-- Traffic sources -->
		<div class="panel panel-flat">
			 <div class="panel-heading">
				<div class="col-md-3">
					<h3 class="panel-title">Add New Product
				</h3>
				</div>
				<div class="col-md-6">
					<!--h3 class="panel-title">Add New Category
				</h3-->
					 <?php if($message == "FAILED") { ?>
				   <div class="alert alert-danger">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Action Failed !!! </strong>
				   </div>
				   <?php } else if($message == "SUCCESS") {  ?>
				   <div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Success !!! </strong> New Product Created successfully
				   </div>
				   <?php } ?>
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
	<form class="form-horizontal form-validate-jquery" action="<?php echo base_url();?>Product/Add" method="POST" enctype="multipart/form-data">
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
								<input type="text" name="productname" class="form-control" required="required" placeholder="Product Name">
							</div>
						</div>
						<!-- /basic text input -->
						<!-- Basic textarea -->
						<div class="form-group">
							<label class="control-label col-lg-3">Product Description<span class="text-danger">*</span></label>
							<div class="col-lg-9">
								<textarea rows="3" cols="3" name="productdescription" id="editor-full" class="form-control" required="required" placeholder="Product Description"></textarea>
							</div>
						</div>
						<!-- /basic textarea -->
						<!-- Select2 select -->
						<div class="form-group">
							<label class="control-label col-lg-3">Product Category <span class="text-danger">*</span></label>
							<div class="col-lg-9">
								<select name="productcategory" data-placeholder="Select a Category..." class="select" required="required" id="category">
										<option label="Select Category"></option>
										<?php 
											$data1 = $this->db->get('tbl_category')->result();
											foreach($data1 as $data1_row)
											{
										?>
											<option value="<?php echo $data1_row->id; ?>"><?php echo $data1_row->category; ?></option>
										<?php
											}
										?>
								</select>
							</div>
						</div>
						<!-- /select2 select -->
						<div class="form-group">
							<div id="subcat">
								<label class="control-label col-lg-3">Sub Category<span class="text-danger">*</span></label>
								<div class="col-lg-9">
									<div class="multi-select-full">
										<select class="form-control" name="productsubcategory" id="subcategory">
										<option label="Select Subcategory"></option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-3">Related Product<span class="text-danger">*</span></label>
							<div class="col-lg-9">
								<div class="multi-select-full">
								<select name="relatedproduct[]" class="form-control multiselect-select-all-filtering" multiple="multiple">
									<optgroup label="Select Related Product">
										<?php 
											$data4 = $this->db->get('tbl_product')->result();
											foreach($data4 as $data4_row)
											{
										?>
										<option value="<?php echo $data4_row->id; ?>"><?php echo $data4_row->product_name; ?></option>
										<?php
											}
										?>
									</optgroup>
								</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-3">Apply GST %<span class="text-danger">*</span></label>
							<div class="col-lg-9">
								<input type="checkbox" name="gst" value="1" class="styled" required />
							</div>
						</div>
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
									<input type="text" name="numbers" class="form-control" required="required" placeholder="Enter Price" id="rate">
									<span class="input-group-addon">.00</span>
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
									<input type="text" name="digits" class="form-control quantity" required="required" placeholder="Enter Quantity" id="quantity">
									<span class="input-group-addon">.00</span>
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
									<input type="text" name="grossamount" class="form-control" readonly="" id="gross" value="">
									<span class="input-group-addon">.00</span>
								</div>
							</div>
						</div>
						<!-- /numbers only -->
						<!-- Touchspin spinners -->
						<div class="form-group">
							<label class="control-label col-lg-3">Discount</label>
							<div class="col-lg-9">
								<div class="input-group">
									<input type="text" class="form-control discount" name="discount" value="" id="discount">
									<span class="input-group-addon">%</span>
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
									<input type="text" name="netamount" class="form-control" readonly="" value="" id="net">
									<span class="input-group-addon">.00</span>
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
					<label class="control-label col-lg-3">Color<span class="text-danger"></span></label>
					<div class="col-lg-9">
						<div class="multi-select-full">
						<select name="productcolor[]" class="form-control multiselect-select-all-filtering" multiple="multiple" required="required">
							<optgroup label="Select Product Color">
								<?php 
									$data2 = $this->db->get('tbl_color')->result();
									foreach($data2 as $data2_row)
									{
								?>
								<option value="<?php echo $data2_row->id; ?>"><?php echo $data2_row->color; ?></option>
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
						<select name="productsize[]" class="form-control multiselect-select-all-filtering" multiple="multiple" >
							<optgroup label="Select Product Size">
								<?php 
									$data3 = $this->db->get('tbl_size')->result();
									foreach($data3 as $data3_row)
									{
								?>
								<option value="<?php echo $data3_row->id; ?>"><?php echo $data3_row->size; ?></option>
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
						<label class="control-label col-md-3">Banner</label>
						<div class="col-md-9">
							<input name="bg_banner" class="form-control file-styled" type="file" required="required">
							<span class="help-block">Accepted formats: PNG, JPG. Max file size 2Mb, <label style="color:red">Resolution ( 480 * 635 )</label></span>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3">Thumbnail Image</label>
						<div class="col-md-9">
							<div id="filediv"><input name="file[]" type="file" id="file" required="required"/></div>
							<input type="button" id="add_more" class="upload" value="Add More Files" />
						   <!--input name="file" class="form-control file-styled" type="file" required=""-->
						   <span class="help-block"> Add more Max file size 2MB <label style="color:red">Resolution ( 480 * 635 )</label></span>
						</div>
					</div>
				</fieldset>
				<div class="text-right">
					<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
					<input type="submit" class="btn btn-primary icon-arrow-right14 position-right" value="Submit" name="Submit_product_data"> 
				</div>
			</div>
		</div>
   </div>
   </form>
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