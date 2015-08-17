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

<header class="header">
<!--**************************************************************** 
************************ NAVIGATION ********************************
*****************************************************************-->
	<nav class="main_nav">
		<a href="#"><i class="fa fa-search fa-3x"></i></a>
		<a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/hm-logo4.svg" alt="logo" class="home_logo_img"></a>
		<a href="<?php echo get_page_link(42); ?>"><i class="fa fa-shopping-cart fa-3x"></i></a>
	</nav>
</header>

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
			    echo '<p class="product_category"><a href="' . esc_attr(get_term_link($term, $taxonomy)) . '" title="' . $term->name . '" >' . $term->name.'</a></p>';
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
				<p>99kr</p>
			</div>
		</div>
		<div class="home_box erbjudande">
			<h4>erbjudande</h4>
			<img src="<?php bloginfo('template_directory'); ?>/img/soffkudde.png" alt="news" />
			<div class="box_info">
				<h5>Soffkudde</h5>
				<p>49kr</p>
			</div>
		</div>
		<div class="home_box rea">
			<h4>rea</h4>
			<img src="<?php bloginfo('template_directory'); ?>/img/brodkorg.png" alt="news" />
			<div class="box_info">
				<h5>Brödkorg</h5>
				<p class="sale">49kr</p>
				<p class="before">99kr</p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>