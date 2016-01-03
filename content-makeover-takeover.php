<h2>Makeover Takeover</h2>
<hr />
<p>Checkout <b>Hair Fusion 4 Men</b> in action on real clients!</p>
<div class="makeover-takeover-slider-container">
	<div class="swiper-wrapper">
		<?php 
			$makeovertakeover = get_cat_ID('Makeover Takeover');
			$args = array(
				'cat' => $makeovertakeover
			);
			query_posts( $args );
			while ( have_posts() ) : the_post();
			echo "<div class='swiper-slide'>";
			the_post_thumbnail();
			echo "</div>";
			endwhile;
		?>
	</div>
</div>
<p>Care to see more customer galleries?</p>
<button onclick="window.location.href='/photos'">See the Galleries</button>