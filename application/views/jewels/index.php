<center><strong><h3><?= $title ?></h3></strong></center>




<style type="text/css">
		
		
		.thumb {
			float: left; width: 200px; height: 250px;    
			
   		 	padding-right: 30px;
   		 	padding-left: 30px;
    		padding-bottom: 30px;
    		padding-left: 30px;
			display: inline-block;
			vertical-align: top;
			margin:10px 11px;
			-webkit-box-shadow: 1px 1px 3px #ccc;
			-moz-box-shadow: 1px 1px 3px #ccc;
			box-shadow: 1px 1px 3px #ccc;
			background:#FFFFFF;
			text-align:center;
			
		}
		.thumb:hover {
			outline: 1px solid #999;
		}
		
		#gallery:after {
			content: "."; visibility: hidden; display: block; clear: both; height: 0; font-size: 0;
		}

 img {
    width: 100px;
    height: 100px;

}
 img:hover {
	color:#d7d3d2; border:solid 1px #4f3c38; 
	background:#392420;
}
 .button {
	background:none;
	cursor: pointer; 
	border:1px solid #d8d8d8; 
	color: #5e4d4a;
	line-height: 12px;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size: 11px;
	font-weight: normal;	
	padding:9px 8px;
	margin:5px;
	float: right;
}

 .button:hover {
	background:#392420;
}
 .button:hover {
	color:#d7d3d2; border:solid 1px #4f3c38; 
}	
.image-container{
	float: left;
}



</style>


	<div id="gallery">
		
			<?php foreach($jewels as $jewel):	?>
			<div class="thumb">
				<a href="<?php echo site_url('/jewels/'.$jewel['slug']); ?>">
				<h5><?php echo $jewel['product_name']; ?></h5>
				</a>
				
					<img src="<?php echo site_url(); ?>/assets/images/products/<?php echo $jewel['post_image']; ?>">
				
				<div class="image-container">
					<p> <strong>KSH.</strong> <?php echo $jewel['price']; ?></p>

					<p><strong>Category: </strong><?php echo $jewel['name']; ?></p>
	 				<p><button class="button">add to cart</button></p> <hr> 
					<!--<a href="<//?php echo site_url('/jewels/'.$jewel['slug']); ?>">description</a>-->
				</div>

							
			</div>

		<?php endforeach; ?>
		
	</div>



	


	