<?php
/**
 * Template Name: Start Page
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

		<div class="start_page_content">
			<div class="start_logo">
				<img src="http://media.mentor.se/2012/05/hm-logo.png" alt="logo">
				<h3>HOME</h3>
			</div>
			<div class="start_shopping_btn">
				<a href="<?php echo get_page_link(5); ?>" class="start_shopping_link"><i class="fa fa-chevron-right"></i> Börja shoppa</a>
				<!-- kom ihåg att ändra get_page_link till Elin: 12 Cicci: 5 -->
			</div>
			<div class="start_info">
				<h3 class="start_info_h3">
					Betala direkt i kassan eller med faktura
				</h3>
			</div>
		</div>

<?php get_footer(); ?>