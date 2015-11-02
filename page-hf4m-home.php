<?php
// Template Name: Hf4M Home
get_header(); ?>
	<div class="page-home full-width container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<?php echo do_shortcode('[fusionslider name="homeslider"][/fusionslider]');?>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row"></div>
		<div class="col-sm-4 col-xs-6 homebox">
			<div><?php echo do_shortcode('[fusionslider name="menofhairfusion"][/fusionslider]');?></div>
		</div>
		<div class="col-sm-4 col-xs-6 homebox">
			<div>
				<?php while ( have_posts() ) : the_post();
				echo "<iframe id='homepagevideo' width='100%' height='100%' src='" . get_the_content() . "?rel=0&amp;showinfo=0;autoplay=1' frameborder='0'></iframe>";
				endwhile; ?>
			</div>
		</div>
		<div class="col-sm-4 col-xs-6 homebox">
			<div>
				<h2>Subscribe</h2>
				<hr>
				<p>You should subscribe to recieve more information and special offers. This is temporary content and can be replaced.</p>
				<button id="redirectSubscribe">Subscribe</button>
			</div>
		</div>
		<div class="col-sm-4 col-xs-6 homebox">
			<div>
				<h2>Process</h2>
				<hr />
				<p>Check out the process that we take. Yada yada words need to be put here to give the viewers a bit of an idea on how hair fusion works.</p>
				<button id="redirectProcess">Read More</button>
			</div>
		</div>
		<div class="col-sm-4 col-xs-6 homebox">
			<div>
				<h2>Contact Us</h2>
				<hr>
				<img src="/hf4m/wp-content/uploads/2015/10/hf4m_logo_64.png">
				<p>Replace image above with whatever, and for more information click below to contact us.</p>
				<button id="redirectContactUs">Contact Us</button>
			</div>
		</div>
		<div class="col-sm-4 col-xs-6 homebox">
			<div>
				<h2>Blog</h2>
				<hr>
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
			endwhile;
			?>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	document.getElementById('redirectSubscribe').onclick = function() {
		location.href = "subscribe";
	}
	document.getElementById('redirectProcess').onclick = function() {
		location.href = "process";
	}
	document.getElementById('redirectContactUs').onclick = function() {
		location.href = "contact-us";
	}
	</script>
<?php get_footer(); ?>