<?php
/**
 * Template Name: Shopping Cart Page
 *
 * @package Epsilon
 * @subpackage Epsilon
 * @since Version 1.0
 */

get_header(); 

	 if (have_posts()) :
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
		<a href="<?php echo get_page_link(42);?>"><i class="fa fa-shopping-cart fa-3x"></i></a>
	</nav>
</header>

<div class="shopping_cart_content">
	<div class="shopping_cart_header">
		<a href="javascript:void(0);"><i class="fa fa-undo fa-3x"></i></a>
		<a href="javascript:void(0);" class="varukorg cart_steps">VARUKORG</a>
		<i class="fa fa-angle-right fa-2x angle_1"></i>
		<a href="javascript:void(0);" class="betalsatt cart_steps step_1">BETALSÄTT</a>
		<i class="fa fa-angle-right fa-2x angle_2"></i>
		<a href="javascript:void(0);" class="kvitto cart_steps step_2">KVITTO</a>	
	</div>
</div>

<?php get_footer(); ?>
