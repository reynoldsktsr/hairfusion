<?php
// Template Name: Hf4M Hair Loss
get_header(); ?>
	<div class="page-aboutus full-width container">
	<?php while (have_posts()): the_post();?>
		<div class="col-sm-2">
			<?php 
			$defaults = array(
				'menu' => 'MPB',
				'menu_class' => 'mpb-menu'
				);
			wp_nav_menu($defaults); 
			?>
		</div>
		<div class="col-sm-8">
			<h1><?php the_title();?></h1>
			<hr />
			<span style="text-align:justify;"><?php the_content();?></span>
		</div>
		<div class="col-sm-2">
			<div class="row">
				This could be an ad area
			</div>
			<div class="row">
				This could be an ad area
			</div>
		</div>
	<?php endwhile;?>
	</div>
<?php get_footer(); ?>