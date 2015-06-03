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
	<h1>Header</h1>
</header>

<!--**************************************************************** 
************************ NAVIGATION ********************************
*****************************************************************-->
<nav class="main_nav">
	<a href="#">Search</a>
	<a href="#">Logo/Home</a>
	<a href="#">Shoppingcart</a>
</nav>
<!--**************************************************************** 
************************ MAIN CONTENT ******************************
*****************************************************************-->
<div class="main_content">
	<h1>Home Page</h1>
</div>
	
<?php get_footer(); ?>