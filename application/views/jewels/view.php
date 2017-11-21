

 <div class="row">

	<div class="col-md-9 col-md-offset-1">
		<h3><?php echo $jewel['product_name']; ?></h3>
		<div>
			<img src="<?php echo site_url(); ?>/assets/images/products/<?php echo $jewel['post_image']; ?>">
			<?php echo $jewel['description']; ?><br>
			<?php echo $jewel['type']; ?><br>

		</div>

		<!--jewellery created can be deleted by the admin-->
		<hr>
		<?php echo form_open('/jewels/delete/'. $jewel['id']); ?>
			<input type="submit" value="Delete" class="btn btn-danger">
		</form>

		<a class="btn btn-default" href="<?php echo base_url(); ?>jewels/edit/<?php echo $jewel['slug']; ?>">Edit</a> 

	</div>
</div>		