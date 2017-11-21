<?php echo validation_errors(); ?>
<?php echo form_open_multipart('jewels/create'); ?>
    <div class="row">
		<div class="col-md-9 col-md-offset-1">
			<h3 class="text-center"><?= $title; ?></h3>
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" type="text" name="product_name" placeholder="Product Name" >
				<label>Category</label>
				<input type="text" class="form-control" name="category" placeholder="Category">
				<label>Price</label>
				<input type="text" name="price" class="form-control" placeholder="price">
				<label>Description</label>
				<textarea class="form-control" name="description" placeholder="Add description"></textarea>
				<label>Types</label>
				<input type="text" name="type" placeholder="Types" class="form-control">
				<label>No of Views</label>
				<input type="text" name="no_views" placeholder="No of views" class="form-control">

			</div>
			<div class="form-group">
				<label>Upload Image</label>
				<input type="file" name="userfile" size="20">
			</div>
			<div class="form-group">
				<label>Category</label>
				<select name="category_id" class="form-control">

				<?php foreach($categories as $category): ?>
					<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
				<?php endforeach; ?>
					
				</select>
			</div>

			<button type="submit" class="btn btn-default">Submit</button><br><br><hr>

			</form>
		</div>
  </div>