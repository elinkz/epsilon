<?php
/**
 * The header for the theme
 *
 * @package Epsilon 2015
 * @subpackage Epsilon 2015
 * @since 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="fb:admins" content="519412264">
	<title><?php bloginfo('name'); ?><?php wp_title( '|', true, 'left' ); ?></title>
	<!--<link rel="profile" href="http://gmpg.org/xfn/11">-->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>css/style.css">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' type='text/css'>
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat' type='text/css'>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
	<body <?php body_class(); ?>>
		<div class="container">
			<header class="main_header">
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