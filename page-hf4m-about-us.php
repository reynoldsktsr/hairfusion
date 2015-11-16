<?php
// Template Name: Hf4M About Us
get_header(); 
while(have_posts()): the_post();
?>
	<div class="page-aboutus full-width container">
		<div class="col-sm-3">
			<?php 
			$defaults = array(
				'menu' => 'About',
				'menu_class' => 'about-menu'
				);
			wp_nav_menu($defaults); 
			?>
		</div>
		<div class="col-sm-9">
			<h1><?php the_title();?></h1>
			<hr />
			<?php the_content();?>
		</div>

	</div>
<?php endwhile; get_footer(); ?>