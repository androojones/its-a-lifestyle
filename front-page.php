<?php get_header();  ?>

<section id="home-hero">
	<div class="hero__image" style="background-image: url(<?php the_field('hero__image'); ?>);"></div>
</section>

<section id="home-about">
	<div class="ha__image" style="background-image: url(<?php the_field('welcome__image'); ?>);">
    </div>
    <div class="ha__text">
    	<p><?php the_field('welcome__text'); ?></p>
    	<button class="btn--green"><a href="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/about/">Let's Get Acquainted</a><i class="fas fa-chevron-right"></i></button>
    </div>
</section>

<section id="home_philosophy">
	<h2 class="subtitles--white"><?php the_field('phil__title'); ?></h2>
	<div class="box-slider__wrapper">
		<div class="box-slider__row">
		<?php if(get_field('home__cards')): $i = 0; ?>
		<?php while(has_sub_field('home__cards')): $i++; ?>
			<div class="card_wrapper card-<?php echo $i; ?>">
				<span class="popout__border popout--bground">
					<div class="popout__inset">
						<h3><?php the_sub_field('home_card__title'); ?></h3>
					</div>
				</span>
				<div class="card__text">
					<h3><?php the_sub_field('home_card__title'); ?></h3>
					<p><?php the_sub_field('home_card__desc'); ?></p>
				</div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</section>

<section id="home-testimonials" style="background-image: url(<?php the_field('testimonial__image'); ?>);">
	<h2 class="subtitles--white">#Community</h2>

<div class="slideshow_row container">
	<div class="slideshow_wrapper carousel__border">
		<div class="carousel__border-inset">
			<?php if( have_rows('testimonials') ): ?>
			<?php while( have_rows('testimonials') ): the_row(); 
				$title = get_sub_field('test__text');
				$author = get_sub_field('test__author');
			?>
			<div class="tmonial_slide fade">
				<p><?php echo $title; ?></p>
				<span><?php echo $author ?></span>
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
			<span class="dot" onclick="currentSlide(7)"></span> 
			<span class="dot" onclick="currentSlide(8)"></span> 
			<span class="dot" onclick="currentSlide(9)"></span> 
			<span class="dot" onclick="currentSlide(10)"></span>
			<span class="dot" onclick="currentSlide(11)"></span>  
		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>