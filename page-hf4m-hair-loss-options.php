<?php
// Template Name: Hf4M Hair Loss
get_header(); ?>
	<div class="page-aboutus full-width container">
	<?php while (have_posts()): the_post();?>
		<div class="col-sm-3">
			<?php 
			$defaults = array(
				'menu' => 'MPB',
				'menu_class' => 'mpb-menu'
				);
			wp_nav_menu($defaults); 
			?>
		</div>
		<div class="col-sm-9">
			<h1><?php the_title();?></h1>
			<hr />
			<?php the_content();?>
		</div>
	<?php endwhile;?>
	</div>
<?php get_footer(); ?>