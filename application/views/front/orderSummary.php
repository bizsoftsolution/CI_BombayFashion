<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="table-responsive">
<table border="1" cellpadding="5" cellpadding="1" class="table">
	<tr>
		<td colspan="2">Order No:</td>
		<td colspan="2"><?php echo $orderno; ?></td>
	</tr>
	<tr>
		<td colspan="2">Order Date:</td>
		<td colspan="2"><?php echo date("d M Y", strtotime($orderdate)); ?></td>
	</tr>
	<tr>
		<td colspan="2">Billing To</td>
		<td colspan="2"><?php echo $address1; ?> <?php echo $address2; ?> <br> 
		<?php echo $city; ?>, <?php echo $province; ?><br>
		<?php echo $country; ?> - <?php echo $postcode; ?><br>
		Phone : <?php echo $phone; ?>
		
		</td>
	</tr>
	<tr>
		<td colspan="4">Order Summary</td>
	</tr>

	<tr>
		<td colspan="2"></td>
		<td >Shipping Charge</td>
		<td ><?php echo $shippingchrge; ?></td>
	</tr>
	<tr>
		<td colspan="2"></td>
		<td >GST</td>
		<td ><?php echo $gst; ?></td>
	</tr>
	<tr>
		<td colspan="2"></td>
		<td >TOTAL</td>
		<td >RM 
		<?php
		//$totall = $this->cart->total();	
		//$total2 = $totall * $gst / 100;
		//$total = $totall + $shippingchrge + $total2;
		echo number_format($ototal, 2);
		?>
		</td>
	</tr>
	
</table>
</div>
<br><br>
<div role="alert" class="alert alert-success">
		<strong>Well done!</strong>
		Your Order Successfully Placed!!!
</div>
</div>

</body>
</html>


