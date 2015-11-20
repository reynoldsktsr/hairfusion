<?php
// Template Name: Hf4M Process
get_header();
while(have_posts()): the_post();
?>
	<div class="page-process full-width container">
		<div class="col-sm-2">
			<?php 
			$defaults = array(
				'menu' => 'FAQ',
				'menu_class' => 'faq-menu'
				);
			wp_nav_menu($defaults); 
			?>
		</div>
		<div class="col-sm-8">
			<h1><?php the_title();?></h1>
			<hr />
			<?php the_content();?>
		</div>
		<div class="col-sm-2">
			<div class="row">
				This could be an ad area
			</div>
			<div class="row">
				This could be an ad area
			</div>
		</div>
	</div>
<?php endwhile; get_footer(); ?>