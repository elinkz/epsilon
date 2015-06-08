<?php get_header(); ?>

<div class="project_single_wrapper clearfix">
	<div class="projects_single_content">
		<?php
		if(have_posts()) { ?>

			<h2>
			HEJHEJ
				<?php

				if ( is_category() ) {
					echo 'Category: ';
					single_cat_title(); 
				} elseif ( is_day() ) {
					echo 'Daily Archives: ' . get_the_date(); 
				} elseif ( is_month() ) {
					echo 'Monthly Archives: ' . get_the_date('F Y');
				} elseif ( is_year() ) {
					echo 'Yearly Archives: ' . get_the_date('Y');
				} else {
					echo "Archives:";
				}

				?>
  			</h2>	
			<?php
				while(have_posts()) {
					the_post(); ?> 
					<div class="post">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<div class="meta">
						<h6>
						<?php echo get_the_date(); ?>
						By: <?php the_author(); ?>
						</h6>
					</div>
					<div class="excerpt">
						<?php the_excerpt(); ?>
					</div>
					<div class="readmore">
						<a href="<?php the_permalink(); ?>">Read more</a>
					</div>
				</div>
				<?php
			}
		}
		?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>