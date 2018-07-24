<?php get_header();  ?>

<section id="about_hero" class="hero">
	<div class="img--background" style="background-image: url(<?php the_field('about_hero'); ?>);">
	</div>
	<div class="hero_right box--padding">
		<h1><?php the_field('about_hero__title'); ?></h1>
		<p><?php the_field('about_hero__subtitle'); ?></p>
	</div>
</section>

<section id="about_why">
	<div class="why_block box--padding">
		<?php the_field('why__top_block'); ?>	
	</div>
	<div class="why_block">
		<span><?php the_field('why__mid_block'); ?></span>
	</div>
	<div class="why_block box--padding">
		<?php the_field('why__btm_block'); ?>	
	</div">
</section>

<section id="about_blist">
	<h2><?php the_field('bucket__title'); ?></h2>
	<div class="slideshow_row">
		<div class="slideshow_wrapper">
				
				<?php if( have_rows('bucket_list') ): ?>

				<?php while ( have_rows('bucket_list') ) : the_row(); ?>
				<div class="blist__slide fade">
				<?php
				if( get_sub_field('completed') == true )
				{ ?>
					<p class="item--striked">
						<?php echo the_sub_field('bucketlist_item'); ?>
					</p>
				<?php } else { ?>
					<p class="no--strike">
						<?php echo the_sub_field('bucketlist_item'); ?>
					</p>
				<?php } ?>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>

			<a class="prev bucket_btn" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next bucket_btn" onclick="plusSlides(1)">&#10095;</a>

		</div>
	</div>
</section>
<!-- 
<section id="about_blist">
	<div class="slideshow_row">
		<div class="slideshow_wrapper carousel__border">
			<div class="carousel__border-inset">

				<?php if( have_rows('bucket_list') ): ?>

				<?php while ( have_rows('bucket_list') ) : the_row(); ?>

				<?php

				if( get_sub_field('completed') =='yes' )
				{
				echo '<div class="task--strike blist__slide fade""><p>'.the_sub_field('bucketlist_item').'</p></div>';
				}
				else 
				{
				echo '<div class="blist__slide fade"><p>'.the_sub_field('bucketlist_item').'</p></div>';
				}

				?>

				<?php endwhile; ?>
				<?php endif; ?>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

			</div>
		</div>
	</div>
</section>
 -->
<?php get_footer(); ?>