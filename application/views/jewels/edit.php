


<?php echo validation_errors(); ?>

<?php echo form_open_multipart('jewels/update'); ?>
	<input type="hidden" name="id" value="<?php echo $jewel['id']; ?>">
	  <div class="row">
		<div class="col-md-9 col-md-offset-1">
			<h3><?= $title; ?></h3>
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" type="text" name="product_name" placeholder="Product Name" value="<?php echo $jewel['product_name']; ?>" >
				<label>Category</label>
				<input type="text" class="form-control" name="category" placeholder="Category" value="<?php echo $jewel['category']; ?>">
				<label>Price</label>
				<input type="text" name="price" class="form-control" placeholder="price" value="<?php echo $jewel['price']; ?>">
				<label>Description</label>
				<textarea class="form-control" name="description" placeholder="Add description"><?php echo $jewel['description']; ?></textarea>
				<label>Types</label>
				<input type="text" name="type" placeholder="Types" class="form-control" value="<?php echo $jewel['type']; ?>">
				<label>No of Views</label>
				<input type="text" name="no_views" placeholder="No of views" class="form-control" value="<?php echo $jewel['no_views']; ?>">

			</div>
	
	<div class="form-group">
				<label>Category</label>
				<select name="category_id" class="form-control">

				<?php foreach($categories as $category): ?>
					<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
				<?php endforeach; ?>
					
				</select>
			</div>
		<button type="submit" class="btn btn-default">Submit</button>

</form>

	</div>
  </div>
