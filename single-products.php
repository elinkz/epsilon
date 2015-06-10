<?php 
if(have_posts()) {
	while(have_posts()) {
		the_post();
?>
<div class="singel-product-box">
	<div class="product-img">
		<?php the_post_thumbnail('medium-thumbnail'); ?>
	</div>
	<div class="product-info">
		<h1><?php echo the_title(); ?></h1>
		<h2><?php echo the_content(); ?></h2>
	</div>
		
</div>
	
<?php		
	}
}
