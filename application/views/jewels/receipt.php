<h2><?= $title ?></h2>

This is Jewel Online Store



<p><img src="logo.png"></p>
<p><b><u>ORDER CONFIRMATION RECEIPT</u></b></p>

<p><b>DATE: </b></p>

<table border="0" width="auto">
	<tr>
		<td width="100%" colspan="3"></td>
	</tr>
	<tr>
		<td width="25%"><strong>Name</strong></td>
		<td width="3%"><b>:</b></td>
		<td width="auto"></td>
	</tr>
	<tr>
		<td width="25%"><strong>Email</strong></td>
		<td width="3%"><b>:</b></td>
		<td width="auto"></td>
	</tr>
	<tr>
		<td width="25%"><strong>Billing Address</strong></td>
		<td width="3%"><b>:</b></td>
		<td width="auto"></td>
	</tr>
	<tr>
		<td width="25%"><strong>Telephone</strong></td>
		<td width="3%"><b>:</b></td>
		<td width="auto"></td>
	</tr>
</table>

<br>
<table>
<tr>
	<td colspan="5"><hr></td>
</tr>
<tr>
	<td colspan="3" rowspan="7"></td>
	<td align="left"><b>Total Quantity</b></td>
	<td align="center"></td>
</tr>
<h2><?php echo $jewel['product_name']; ?></h2>
<div>
	<img src="<?php echo site_url(); ?>/assets/images/products/<?php echo $jewel['post_image']; ?>">
	<?php echo $jewel['description']; ?><br>
	<?php echo $jewel['type']; ?>
</div>
<tr>
	<td align="left"><b>Total Items</b></td>
	<td align="center"></td>
</tr>
<tr>
	<td align="left"><b>Sub Total</b></td>
	<td align="center"></td>
</tr>
<tr>
	<td align="left"><b>VAT (15%)</b></td>
	<td align="center"></td>
</tr>
<tr>
	<td align="left"><b>Delivery cost</b></td>
	<td align="center"></td>
</tr>
<tr>
	<td colspan="5"></td>
</tr>
<tr>
	<td align="left"><b>Total Amount (KSH.)</b></td>
	<td align="center"></td>
</tr>

</table>
<br />
<center>
<p>THIS IS SERVED AS YOUR OFFICIAL RECEIPT</p>
<p>THANK YOU FOR CHOSING BB JEWELLERY</p>
<p><b>NOTE: Expect a phone call confirmation before the delivery</b></p>
</center>
