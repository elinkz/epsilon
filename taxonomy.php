<?php get_header(); ?>

<header class="header">
<!--**************************************************************** 
************************ NAVIGATION ********************************
*****************************************************************-->
	<nav class="main_nav">
		<a href="#"><i class="fa fa-search fa-3x"></i></a>
		<a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/hm-logo4.svg" alt="logo" class="home_logo_img"></a>
		<a href="#"><i class="fa fa-shopping-cart fa-3x"></i></a>
	</nav>
</header>

<!--**************************************************************** 
************************ MAIN CONTENT ******************************
*****************************************************************-->
<?php	
	if (have_posts()) :
	while (have_posts()) : the_post();  
?>
<div class="main_content">
	<div class="product_categories">
		
		<?php
		$taxonomy = 'products_category';
		$terms = get_terms( $taxonomy, 'products' );
		
		if ($terms) {
			foreach($terms as $term) {
			    echo '<p class="product_category"><a href="' . esc_attr(get_term_link($term, $taxonomy)) . '" title="' . $term->name . '" >' . $term->name.'</a></p>';
			}
		} ?>

	</div>
<?php 
	endwhile;

	else :
		echo "<p>No content found.</p>";
	endif; ?>

<!--**************************************************************** 
***************************** PRODUCTS *****************************
*****************************************************************-->
<?php	
	if (have_posts()) :
	while (have_posts()) : the_post();  
?>
	<div class="products">
		<h2><?php if ( is_category() ) { echo 'Category: '; single_cat_title(); } ?></h2>	
		<div class="product">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<div class="excerpt">
				<?php the_content(); ?>
			</div>
			<div class="readmore">
				<a href="<?php the_permalink(); ?>">Read more</a>
			</div>
		</div>
	</div>
	<?php 
	endwhile;

	else :
		echo "<p>No content found.</p>";
	endif; ?>
</div> <!-- /MAIN CONTENT --> 

<?php get_footer(); ?>