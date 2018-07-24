<?php get_header();  ?>

<section id="contact_hero" class="hero">
	<div class="img--background" style="background-image: url(<?php the_field('contact_hero'); ?>);">
	</div>
	<div class="hero_right box--padding">
		<p><?php the_field('contact_hero__subtitle'); ?></p>
		<h1><?php the_field('contact_hero__title'); ?></h1>
	</div>
</section>

<section id="contact_form">
	<span class="popout__border">
		<div class="popout__inset">
			<?php echo do_shortcode( '[contact-form-7 id="70" title="Contact Page Form"]' ); ?>
		</div>
	</span>
</section>

<?php get_footer(); ?>