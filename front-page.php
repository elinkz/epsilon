<?php get_header(); ?>
	
	<?php if (have_posts()) :
		while (have_posts()) : the_post();  
			the_content();
		endwhile;

		else :
			echo "<p>No content found.</p>";
		endif; ?>
	
	<div class="main_content">
		<h1>Main content</h1>
	</div>
	
<?php get_footer(); ?>