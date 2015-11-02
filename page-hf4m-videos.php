<?php
// Template Name: Hf4M Video
get_header(); ?>
	<div class="page-videos full-width container">
		<h1><?php the_title();?></h1>
		<hr />
		<?php echo do_shortcode("[huge_it_videogallery id='2']"); ?>
	</div>
<?php get_footer(); ?>