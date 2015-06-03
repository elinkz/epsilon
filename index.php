<?php get_header(); ?>

<div class="site_content clearfix">
	<div class="first_col">
		<?php
		if(have_posts()) {
			while(have_posts()) {
				the_post();  
				
				get_template_part('content');
				
			}
		} 



		?>
		
	</div>
		<?php get_sidebar(); ?>
	<div class="pagination_area">
		<?php
		// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous', 'ek_light' ),
				'next_text'          => __( 'Next', 'ek_light' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'ek_light' ) . ' </span>',
			) ); ?>
	</div>
</div>

<?php get_footer(); ?>