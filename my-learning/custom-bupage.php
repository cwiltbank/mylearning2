<?php /* Template Name: Custom-BUPage */ ?>

<?php


get_header();
?>

<div class="page-container">

	<div class="topnav-container">
		<div class="topnav-labelcontainer">
			<div><span class="topnav-label">Learning Topics</span></div> 
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.svg" style="height: 25px;"></div> 
		</div>
		<div class="topnav-content">			
		
				
				<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'my-learning' ); ?></button> -->
				
				<?php
					//wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu') );
					//wp_nav_menu();			

					$primaryNav = wp_get_nav_menu_items('3'); // Get the array of wp objects, the nav items for our queried location.

					foreach ($primaryNav as $navItem) {
						echo '<div class="topnav-contentitem"><a class="topnav-links" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></div>';

					}

										
					

				?>

			
			
			
		
		</div>
	</div>

	

	<div class="pagetitle-container">		
		<span class="pagetitle"><?php the_title(); ?></span>
		<span class="pagecontent">
		
		<?php			
		
		while ( have_posts() ) :
			the_post();
			the_content();

			//get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
		</span>
		
	</div>

	<div class="carousel-container">
	<?php echo do_shortcode("[post_grid id='48']"); ?>
	</div>


	

</div>

<?php


get_footer();