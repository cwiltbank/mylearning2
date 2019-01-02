<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Learning
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="blueheader">
		<div class="blueheader-item blueheader-item1"><span class="title"><?php bloginfo( 'name' ); ?></span></div>
		<div class="blueheader-item blueheader-item2"><img class="intellogo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/intel-white-logo.png"></div>
		<div class="blueheader-item blueheader-item3"><span class="circuittitle">Circuit</span></div>
		<div class="blueheader-item blueheader-item4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/search-icon.png" style="height: 25px;"></div>
	</div>



