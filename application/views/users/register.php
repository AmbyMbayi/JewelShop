

<div class="row">

	<div class="col-md-4 col-md-offset-4" >
			<h3 class="text-center"><?php echo $title; ?></h3>

			<?php echo validation_errors(); ?>
			<?php echo form_open('users/register'); ?>
		<div class="form-group">
			<label>First Name</label>
			<input type="text" class="form-control" name="firstname" placeholder="First Name">

		</div>
		<div class="form-group">
			<label>Last Name</label>
			<input type="text" name="lastname" class="form-control" placeholder="Last Name">

		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" placeholder="Email">
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username" class="form-control">
		</div>
		<div>
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
		</div>

		<button type="submit" class="btn btn-primary btn-block">Submit</button> <hr><br>
	</div>
</div>

<?php echo form_close(); ?>