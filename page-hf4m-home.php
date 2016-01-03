<?php
// Template Name: Hf4M Home
get_header(); ?>
	<div class="page-home full-width">
			<div class="col-xs-12 main-slider-container">
				<?php get_template_part( 'content', 'slider-main' ); ?>
			</div>
			<div class="col-xs-12 tagline">
				<p>Eliminate your hair loss within 1 hour or less</p>
			</div>
		<div class="row">
			<div class="col-sm-4 col-xs-12 homebox" style="min-height:350px;">
				<?php get_template_part('content','subscribe-form'); ?>
			</div>
			<div class="col-sm-4 col-xs-12 homebox" style="min-height:350px;">
				<?php get_template_part('content','hf4m-story'); ?>
			</div>
			<div class="col-sm-4 col-xs-12 homebox" style="min-height:350px; padding-right: 30px;">
				<?php get_template_part('content','makeover-takeover'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-xs-12 homebox">
				<h2>Process</h2>
				<hr />
				<ul>
					<li>No Toupe</li>
					<li>No Hair Piece</li>
					<li>No Weave</li>
					<li>No Tattoo</li>
					<li>No Surgery</li>
					<li>No Hats</li>
					<li>And No Waiting!</li>
				</ul>
				<button onclick="window.location.href = '/process' ">Read More!</button>
			</div>
			<div class="col-sm-4 col-xs-12 homebox">
				<h2>Contact Us</h2>
				<hr />
				<p>Want to find out more or ask a question? We'll get in contact with you within <b>48 hours</b> to answer any of your inquiries!</p>
				<p>More details <b>coming soon</b>!</p>
				<button onclick="window.location.href='/contact-us'">Send us a Message</button>
			</div>
			<div class="col-sm-4 col-xs-12 homebox">
				<h2>Blog</h2>
				<hr />
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
<?php get_footer(); ?>