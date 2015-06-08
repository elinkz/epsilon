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
		<a href="#"><i class="fa fa-shopping-cart fa-3x"></i></a>
	</nav>
</header>

<!--**************************************************************** 
************************ MAIN CONTENT ******************************
*****************************************************************-->
<div class="main_content">
	<div class="categories">
		<h1>Categories and stuff</h1>
	</div>
	<div class="products">
		<h1>Products</h1>
	</div>
</div>

<?php get_footer(); ?>