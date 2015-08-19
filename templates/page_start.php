<?php
/**
 * Template Name: Start Page
 *
 * @package Epsilon
 * @subpackage Epsilon
 * @since Version 1.0
 */
get_header();
?>

<?php
if (have_posts()) :
	while (have_posts()) : the_post();
		the_content();
	endwhile;

else :
	echo "<p>No content found.</p>";
endif;
?>

<div class="start_page_content">
	<div class="start_logo">
		<img src="<?php bloginfo('template_directory'); ?>/img/hm-logo4.svg" alt="logo">
	</div>
	<div class="start_shopping_btn">
		<a href="<?php echo get_permalink( get_page_by_title( 'Home' ) ); ?>" class="start_shopping_link"><i class="fa fa-chevron-right"></i> Börja shoppa</a>
	</div>
	<div class="start_info">
		<h3 class="start_info_h3">
			Betala direkt i kassan eller med faktura
		</h3>
	</div>
</div>

<?php
get_footer();
