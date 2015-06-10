<?php 
if(have_posts()) {
	while(have_posts()) {
		the_post();
?>
<div class="singel_product_box">
	
	<div class="product_img">
		<?php the_post_thumbnail('medium-thumbnail'); ?>
	</div>
	<div class="product_info">
		<h1><?php echo the_title(); ?></h1>
		<h2><?php echo the_content(); ?></h2>
	</div>
		
</div>
	
<?php		
	}
}
