<?php
// Template Name: Hf4M Home
get_header(); ?>
	<div class="page-home full-width">
		<?php echo do_shortcode('[fusionslider name="homeslider"][/fusionslider]');?>
		<div class="row">
			<div class="col-md-4 homebox">
				<div>Gallery</div>
			</div>
			<div class="col-md-4 homebox">
				<div>Videos</div>
			</div>
			<div class="col-md-4 homebox">
				<div>Subscribe</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 homebox">
				<div>Process</div>
			</div>
			<div class="col-md-4 homebox">
				<div>Contact Us</div>
			</div>
			<div class="col-md-4 homebox">
				<div>Blog
				<?php
				$args = array(
					'cat' => 4,
					'posts_per_page' => 1
					);
				query_posts( $args );
				while (have_posts()) : the_post();
				$content = substr(get_the_content(),0,200);
				echo "<p>" . $content . "...</p>";
				echo "<a href='".get_permalink()."'>Read More</a>";
				// echo get_permalink();
				endwhile;
				?>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$( document ).ready(function() {
			var width = $(".homebox").width();

		    $(".homebox").height(width/2);
		});
	</script>
<?php get_footer(); ?>