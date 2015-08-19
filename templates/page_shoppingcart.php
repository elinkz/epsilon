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

<div class="shopping_cart_container">
	<div class="shopping_cart_header">
		<?php	
		$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
		echo "<a href='$url' class='back_btn_2'><i class='fa fa-angle-left fa-4x'></i></a>"; ?>
		<a href="javascript:void(0);" class="varukorg cart_steps step_0">VARUKORG</a>
		<i class="fa fa-angle-right fa-2x angle_1"></i>
		<a href="javascript:void(0);" class="betalsatt cart_steps step_1">BETALSÄTT</a>
		<i class="fa fa-angle-right fa-2x angle_2"></i>
		<a href="javascript:void(0);" class="kvitto cart_steps step_2">KVITTO</a>	
	</div>
	<div class="shopping_cart_content">
		<div class="cart">
			<table class="cart_list">
				<tr>
					<th> Artikel </th>
					<th> Pris </th>
					<th> Ändra </th>
				</tr>
				<tr>
					<td>1 * Soffkudde</td>
					<td><span class="cart_price">49 SEK</span></td>
					<td><i class="fa fa-trash-o"></i><i class="fa fa-plus-square-o"></i><i class="fa fa-minus-square-o"></i></td>
				</tr>
				<tr>
					<td>1 * Matta</td>
					<td><span class="cart_price">399 SEK</span></td>
					<td><i class="fa fa-trash-o"></i><i class="fa fa-plus-square-o"></i><i class="fa fa-minus-square-o"></i></td>
				</tr>
				<tr>
					<td>1 * Ljuslykta</td>
					<td><span class="cart_price">29 SEK</span></td>
					<td><i class="fa fa-trash-o"></i><i class="fa fa-plus-square-o"></i><i class="fa fa-minus-square-o"></i></td>
				</tr>
				<tr>
					<td>1 * 2-Pack Gardiner </td>
					<td><span class="cart_price">199 SEK</span></td>
					<td><i class="fa fa-trash-o"></i><i class="fa fa-plus-square-o"></i><i class="fa fa-minus-square-o"></i></td>
				</tr>
			</table>
			<hr>
			<h3>Totalt <span class="cart_total">676 SEK</span> inkl. frakt</h3>
			<hr>
			<h2 class="next_step_btn">Gå vidare <i class="fa fa-angle-right"></i></h2>
		</div>
	</div>
</div>

<?php get_footer(); ?>
