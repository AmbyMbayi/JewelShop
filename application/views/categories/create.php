<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>
	 <div class="form-group">
	 	<label>Name</label>
	 	<input type="text" placeholder="Enter name" name="name" class="form-control">
	 </div>
	 <button type="submit" class="btn btn-default">Submit</button>
</form>