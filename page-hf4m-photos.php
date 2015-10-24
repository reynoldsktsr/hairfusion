<?php
// Template Name: Hf4M Photos
get_header(); ?>
	<div class="page-photos full-width">
		<h1><?php the_title();?></h1>
		<hr />
		<?php echo do_shortcode("[huge_it_gallery id='2']"); ?>
	</div>
<?php get_footer(); ?>