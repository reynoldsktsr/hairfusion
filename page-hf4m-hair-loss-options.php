<?php
// Template Name: Hf4M Hair Loss
get_header(); ?>
	<div class="page-aboutus full-width container">
	<?php while (have_posts()): the_post();?>
		<h1><?php the_title();?></h1>
		<hr />
		<?php echo the_content();?>
	<?php endwhile;?>
	</div>
<?php get_footer(); ?>