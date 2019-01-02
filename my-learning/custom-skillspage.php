<?php /* Template Name: Custom-SkillsPage */ ?>

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

	<div class="skillsnav-container">
		<div class="skillsnav-item skillsnav-item1">
			Popular Skills
			<p class="skillsnav-content">This list of helpful resources represents the most popular skills learning resources seasrched for across Circuit and all of our learning websites.  While it doesn't change everyday, our learning professionals make sure it's current on a regular basis.</p>
			
		</div>
		<div class="skillsnav-item skillsnav-item2">
			Communication
			<p class="skillsnav-content">Tough Conversations<br>Effective Meetings<br>Presentation Skills</p>
			<button class="button1">Button</button>
		</div>
		<div class="skillsnav-item skillsnav-item3">
			Collaboration
			<p class="skillsnav-content">Influencing Others<br>Getting Alignment<br>Facilitating Discussions<br>Fostering Creativity<br>Unlocking Great Ideas</p>
			<button class="button1">Button</button>
		</div>
		<div class="skillsnav-item skillsnav-item4">
			Productivity  
			<p class="skillsnav-content">Setting priorities<br>Time Management<br>Increase My Productivity</p> 
			<button class="button1">Button</button>   
	</div>	
	<div class="section-container">
		<span class="section-title">Staff Picks</span><br>
		<span class="section-subtext">Not sure exactly what you are looking for?  Check out what our learning professionals have selected.</span>
	</div>
	

	<div class="carousel-container">
		<?php 
			
			echo do_shortcode('[smartslider3 slider=2]');
			
		?>
	</div>
	

	

</div>

<?php


get_footer();