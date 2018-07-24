<?php get_header();  ?>

<section id="events_hero" class="hero">
	<div class="hero__img img--background" style="background-image: url(<?php the_field('events_hero'); ?>);">
	</div>
	<div class="hero_right box--padding">
		<h1><?php the_field('events__title'); ?></h1>
		<p><?php the_field('events__subtitle'); ?></p>
	</div>
</section>

<section id="events_cal">
	<?php echo do_shortcode( '[wcs-schedule id=1]' ); ?>
</section>


<?php get_footer(); ?>