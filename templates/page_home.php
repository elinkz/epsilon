<?php
/**
 * Template Name: Home Page
 *
 * @package Epsilon
 * @subpackage Epsilon
 * @since Version 1.0
 */
get_header(); ?>
	
	<?php if (have_posts()) :
		while (have_posts()) : the_post();  
			the_content();
		endwhile;

		else :
			echo "<p>No content found.</p>";
		endif; ?>


<!--**************************************************************** 
************************ NAVIGATION ********************************
*****************************************************************-->

<?php
get_template_part( 'navigation' );
?>

<!--**************************************************************** 
************************ MAIN CONTENT ******************************
*****************************************************************-->

<div class="main_content">
	<div class="product_categories">
		
		<?php
		$taxonomy = 'products_category';
		$terms = get_terms( $taxonomy, 'products' );
		
		if ($terms) {
			foreach($terms as $term) {
			    echo '<a class="fadeout product_cat_wrap" href="' . esc_attr(get_term_link($term, $taxonomy)) . '" title="' . $term->name . '" ><p class="product_category">' . $term->name.
			    '</p></a>';
			}
		} ?>

	</div>

<!--**************************************************************** 
***************************** PRODUCTS *****************************
*****************************************************************-->
	<div class="home_box_container">
		<div class="home_box nyheter">
			<h4>nyheter</h4>
			<img src="<?php bloginfo('template_directory'); ?>/img/strandhandduk.png" alt="news" />
			<div class="box_info">
				<h5>Strandhandduk</h5>
				<p>99 SEK</p>
			</div>
		</div>
		<div class="home_box erbjudande">
			<h4>erbjudande</h4>
			<img src="<?php bloginfo('template_directory'); ?>/img/soffkudde.png" alt="news" />
			<div class="box_info">
				<h5>Soffkudde</h5>
				<p>49 SEK</p>
			</div>
		</div>
		<div class="home_box rea">
			<h4>rea</h4>
			<img src="<?php bloginfo('template_directory'); ?>/img/brodkorg.png" alt="news" />
			<div class="box_info">
				<h5>Brödkorg</h5>
				<p class="sale">49 SEK</p>
				<p class="before">99 SEK</p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>