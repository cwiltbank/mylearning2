<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Learning
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
Cory Start of Sidebar
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
Cory End of Sidebar
