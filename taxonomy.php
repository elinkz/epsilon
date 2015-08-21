<?php get_header(); ?>

<header class="header">
<!--**************************************************************** 
************************ NAVIGATION ********************************
*****************************************************************-->
	<nav class="main_nav">
		<a href="#"><i class="fa fa-search fa-3x"></i></a>
		<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/hm-logo4.svg" alt="logo" class="home_logo_img"></a>
		<a href="<?php echo get_page_link(38); ?>" ><i class="fa fa-shopping-cart fa-3x"></i></a>
	</nav>
</header>

<!--**************************************************************** 
************************ MAIN CONTENT ******************************
*****************************************************************-->
<?php	
	$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
	echo "<a href='$url' class='back_btn'><i class='fa fa-angle-left fa-4x'></i></a>"; ?>

<h2 class="category_title"><?php echo single_cat_title(); ?></h2>
<div class="sub_categories">
	<h5 class="sub_cat">SUB CATEGORY</h5>
	<h5 class="sub_cat">SUB CATEGORY</h5>
	<h5 class="sub_cat">SUB CATEGORY</h5>
	<h5 class="sub_cat">SUB CATEGORY</h5>
	<h5 class="sub_cat">SUB CATEGORY</h5>
</div>
<div id="products">
<?php
	if (have_posts()) :
	while (have_posts()) : the_post(); ?>

<!--**************************************************************** 
***************************** PRODUCTS *****************************
*****************************************************************-->
	<div class="product">
		<div class="product_featured_image">
			<?php the_post_thumbnail('small-thumbnail'); ?>
		</div>
		<a href="<?php the_permalink(); ?>" rel="lightbox[917]" class="product_title"><?php the_title(); ?></a>
		<div class="product_description">
			<div class="product_info">
				<p class="price_1"><?php the_excerpt(); ?></p>
			</div>
			<div class="readmore">
				<a href="<?php the_permalink(); ?>">Lägg i varukorg + </a>
			</div>
		</div>
	</div>
	<?php endwhile;
		else :
			echo "<p>No content found.</p>";
		endif; ?>
	</div> <!-- / PRODUCTS -->
</div> <!-- /MAIN CONTENT --> 

<?php get_footer(); ?>
