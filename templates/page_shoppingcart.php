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
		<a href="<?php echo get_page_link(38); ?>"><i class="fa fa-shopping-cart fa-3x"></i></a>
	</nav>
</header>

<div class="shopping_cart_content">
	<a href="#" class="varukorg">VARUKORG</a>
	<a href="#" class="betalsatt">BETALSÄTT</p>
	<a href="#" class="tack">TACK FÖR DITT KÖP</a>
</div>

<?php get_footer(); ?>
