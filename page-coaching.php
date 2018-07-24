<?php get_header();  ?>

<section id="coach_hero" class="hero">
	<div class="coach_hero__img img--background" style="background-image: url(<?php the_field('coaching_hero'); ?>);">
	</div>
	<div class="coach_hero__text hero_right">
		<h1><?php the_field('coaching_title'); ?></h1>
		<p><?php the_field('coaching_subtitle') ?></p>
	</div>
</section>

<section id="coach_roots">
	<div class="box-slider__wrapper">
		<div class="box-slider__row">
		<?php if(get_field('coaching_roots')): $i = 0; ?>
		<?php while(has_sub_field('coaching_roots')): $i++; ?>
			<div class="card_wrapper card-<?php echo $i; ?>">
				<span class="popout__border popout--bground">
					<div class="popout__inset">
						<h3><?php the_sub_field('card_title'); ?></h3>
					</div>
				</span>
				<div class="card__text">
					<h3><?php the_sub_field('card_title'); ?></h3>
					<p><?php the_sub_field('card_desc'); ?></p>
				</div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>		
</section>

<div class="roots__tagline container">
	<h3><?php the_field('coaching_tagline'); ?></h3>
</div>

<section id="coach_offers">
	<?php if(get_field('coaching_offerings')): $i = 0; ?>
	<?php while(has_sub_field('coaching_offerings')): $i++; ?>
			<div class="offer__box card-<?php echo $i; ?>">
				<h2><?php the_sub_field('offer__title'); ?></h2>
				<p><?php the_sub_field('offer__description'); ?></p>
				<a href="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/contact" class="btn--green"><?php the_sub_field('offer__button'); ?></a>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>

<section id="coach_benefits" class="img--background" style="background-image: url(<?php the_field('coaching_benefit'); ?>)">
	<div class="slideshow_row container">
	<div class="slideshow_wrapper carousel__border">
		<div class="carousel__border-inset">
			<h2><?php the_field('benefits_carousel__title'); ?></h2>
			<?php if( have_rows('benefits_carousel') ): ?>
			<?php while( have_rows('benefits_carousel') ): the_row(); 
			$desc = get_sub_field('benefit__desc');
			?>
		<div class="benefit__slide fade">
			<p><?php echo $desc; ?></p>
		</div>

	<?php endwhile; ?>
	<?php endif; ?>

		<!-- Next and previous buttons -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		<!-- The dots/circles -->
	<div class="dots_row">
		<span class="dot" onclick="currentSlide(1)"></span> 
		<span class="dot" onclick="currentSlide(2)"></span> 
		<span class="dot" onclick="currentSlide(3)"></span>
		<span class="dot" onclick="currentSlide(4)"></span> 
		<span class="dot" onclick="currentSlide(5)"></span> 
		<span class="dot" onclick="currentSlide(6)"></span>   
	</div>
	</div>
</div>
</section>

<section id="coach_qualifier">
	<h2><?php the_field('coaching_fit_title'); ?></h2>
	<?php if( have_rows('coaching_qualifiers') ): ?>
		<?php while( have_rows('coaching_qualifiers') ): the_row(); 
			$desc = get_sub_field('coaching__qualifier');
			?>
			<div class="single_qualifier">
				<i class="fas fa-check"></i>
				<p><?php echo $desc; ?></p>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>

<section id="coach_investment">
	<h2><?php the_field('coaching_investment_title'); ?></h2>
	<div class="boxes__wrapper container">
		<?php if(get_field('coaching_prices')): $i = 0; ?>
		<?php while(has_sub_field('coaching_prices')): $i++; ?>
				<div class="card_wrapper card-<?php echo $i; ?>">
					<span class="popout__border popout--bground">
						<div class="popout__inset">
							<h3><?php the_sub_field('offering_cost_title'); ?></h3>
							<p><?php the_sub_field('offering_cost_desc'); ?></p>
						</div>
					</span>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<a href="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/contact/" class="btn--green"><?php the_field('prices__button'); ?></a>
	<span class="fine-print">*HST not included</span>
</section>

<?php get_footer(); ?>