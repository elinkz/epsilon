<?php 
if(have_posts()) {
	while(have_posts()) {
		the_post();
?>
<div class="single_product_box">
	
	<div class="single_product_img">
		<?php the_post_thumbnail('medium-thumbnail'); ?>
	</div>
	<div class="single_product_content">
		<h2><?php echo the_title(); ?></h2>
		<p><?php echo the_content(); ?></p>
		<p class="price">1299 kr</p>
		<p class="add_to_cart_btn">LÄGG TILL I VARUKORG <i class="fa fa-plus"></i></p>
	</div>
		
</div>
	
<?php		
	}
}
