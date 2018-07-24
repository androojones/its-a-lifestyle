<footer>
	<section id="footer_top">
	  	<div class="footer footer__left">
		    <h4><?php the_field('footer_title', 'option'); ?></h4>
		    <p><?php the_field('footer_tagline', 'option'); ?></p>
		    <div class="footer__icons">
				<a href="https://www.instagram.com/hashtagitsalifestyle/" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="mailto:hello@hashtagitsalifestyle.com"><i class="far fa-envelope"></i></a>
			</div>
		</div>
		<div class="footer footer__right">
			<div class="title_wrapper">
				<div class="freebie_title">
					<img src="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/wp-content/uploads/2018/07/footer-excite-lines.png" alt="Five hand-drawn lines for emphasis" class="excite_lines">
					<p>#freebie</p>
					<img src="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/wp-content/uploads/2018/07/footer-excite-lines.png" alt="Five hand-drawn lines for emphasis" class="excite_lines">
				</div>
				<img src="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/wp-content/uploads/2018/07/hand-drawn-arrow.png" alt="Hand drawn arrow pointing down" class="footer__arrow">
			</div>
			<div class="footer__form">
				<h4><?php the_field('footer_form__title', 'option'); ?></h4>
				<p><?php the_field('footer_form__subtitle', 'option'); ?></p>
				<div class="form_wrapper">
					<?php echo do_shortcode( '[contact-form-7 id="58" title="Footer Sign Up Form"]' ); ?>
				</div>
			</div>
		</div>
	</section>
	<div class="footer_bottom">
		<a href="https://www.instagram.com/hashtagitsalifestyle/" target="_blank" class="follow_box"><span>Follow <span class="text--green">#itsalifestyle</span> on Instagram <i class="fab fa-instagram"></i></span></a>
		<?php echo do_shortcode( '[instagram-feed]' ); ?>
	</div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>