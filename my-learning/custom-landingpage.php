<?php /* Template Name: Custom-LandingPage */ ?>

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
					$currentpage = get_the_id();
					
					foreach ($primaryNav as $navItem) {

						if ($currentpage == $navItem->object_id) {

							echo '<div class="topnav-contentitemcurrent"><a class="topnav-links" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></div>';

						} else {

							echo '<div class="topnav-contentitem"><a class="topnav-links" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></div>';

						}
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
		<?php 
			
			echo do_shortcode('[smartslider3 slider=2]');
			
		?>
	</div>
	<div class="bottomnav-container">
		<div class="bottomnav-item bottomnav-item1">
			Required Training
			<p class="bottomnav-content">Required training at Intel is very important.  Don't lose track of where you are.  Help Intel remain legal, confidential and other stuff.</p>
			<button class="button1">More</button>
		</div>
		<div class="bottomnav-item bottomnav-item2">
			Business Group Learning
			<p class="bottomnav-content">Required training at Intel is very important.  Don't lose track of where you are.  Help Intel remain legal, confidential and other stuff.</p>
			<button onclick="window.location.href = 'business-group-learning-resources';" class="button1">More</button>
		</div>
		<div class="bottomnav-item bottomnav-item3">
			Find a Class at My Site
			<p class="bottomnav-content">Required training at Intel is very important.  Don't lose track of where you are.  Help Intel remain legal, confidential and other stuff.</p>
			<button class="button1">More</button>
		</div>
		<div class="bottomnav-item bottomnav-item4">
			Career Help
			<p class="bottomnav-content">Required training at Intel is very important.  Don't lose track of where you are.  Help Intel remain legal, confidential and other stuff.</p>
			<button class="button1">More</button>
		</div>
	</div>

	

</div>

<?php


get_footer();