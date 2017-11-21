<!DOCTYPE html>
<html>
<head>
	<title>JewelShop</title>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
	

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootswatch.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/w3c.css">

	

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="assets/images/favicon.png" rel="icon" />
</head>
<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
 		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>">Jewellery Shop</a>
	    </div>	
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url();?>">Home</a></li>
				<!--<li><a href="">Shopping Cart</a></li>
				<li><a href="">Order History</a></li>
				<li><a href="">Checkout</a></li>
				<li><a href="">Search</a></li>-->
				<li><a href="<?php echo base_url(); ?>categories">Category</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php 	if(!$this->session->userdata('logged_in')): ?>
							<li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
							<li><a href="<?php echo base_url(); ?>about">About Us</a></li>
							<li><a href="<?php echo base_url(); ?>jewels">View Products</a></li>
							<li><a href="<?php echo base_url(); ?>users/register">Sign Up</a></li>
							<li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
				<?php endif; ?>	

				<?php 	if($this->session->userdata('logged_in')): ?>
						<li><a href="<?php echo base_url(); ?>jewels">View Products</a></li>
						 <li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
				        <li><a href="<?php echo base_url(); ?>jewels/create">Add Products</a></li>	
						<li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>


				<?php endif; ?>
			</ul>
					<br><br>
				<ul class="nav navbar-nav">
					
					
					
					
				</ul>
	
	</div>
	</div>
</nav>

<!--flash messages-->
<?php if($this->session->flashdata('user_registered')): ?>
	<?php echo '<p class ="alert alert-success">' .$this->session->flashdata('user_registered'). '</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('login_failed')): ?>
	<?php echo '<p class ="alert alert-danger">' .$this->session->flashdata('login_failed'). '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('user_loggedin')): ?>
	<?php echo '<p class ="alert alert-success">' .$this->session->flashdata('user_loggedin'). '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('user_loggedout')): ?>
	<?php echo '<p class ="alert alert-success">' .$this->session->flashdata('user_loggedout'). '</p>'; ?>
<?php endif; ?>

<div class="main-container">
	



