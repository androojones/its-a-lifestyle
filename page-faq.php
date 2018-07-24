<?php get_header();  ?>

<section id="faq_hero" class="hero">
	<div class="img--background" style="background-image: url(<?php the_field('faq_hero'); ?>);">
	</div>
	<div class="hero_right box--padding">
		<h1><?php the_field('faq_title'); ?></h1>
		<p><?php the_field('faq_subtitle'); ?></p>
	</div>
</section>

<section id="faq_tabs">
<!-- Tab links -->
<div class="tab__wrapper">
	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'general')"  id="defaultOpen">#General</button>
		<button class="tablinks" onclick="openCity(event, 'nutrition')">#Nutrition</button>
		<button class="tablinks" onclick="openCity(event, 'movement')">#Movement</button>
		<button class="tablinks" onclick="openCity(event, 'intl_living')">#IntentionalLiving</button>
	</div>

<!-- Tab content -->
<div id="general" class="tabcontent">
	<?php if( have_rows('faq_general') ): ?>
	<?php while( have_rows('faq_general') ): the_row(); 
	$question = get_sub_field('general_q');
	$answer = get_sub_field('general_a');
	?>
	<div class="accordion_wrapper">
		<button class="accordion"><?php echo $question; ?></button>
		<div class="panel">
		<p><?php echo $answer ?></p>
		</div>
	</div>

	<?php endwhile; ?>
	<?php endif; ?>
</div>

<div id="nutrition" class="tabcontent">
  <?php if( have_rows('faq_nutrition') ): ?>
	<?php while( have_rows('faq_nutrition') ): the_row(); 
	$question = get_sub_field('nutrition_q');
	$answer = get_sub_field('nutrition_a');
	?>
	<div class="accordion_wrapper">
		<button class="accordion"><?php echo $question; ?></button>
		<div class="panel">
		<p ><?php echo $answer ?></p>
		</div>
	</div>

	<?php endwhile; ?>
	<?php endif; ?> 
</div>

<div id="movement" class="tabcontent">
  <?php if( have_rows('faq_movement') ): ?>
	<?php while( have_rows('faq_movement') ): the_row(); 
	$question = get_sub_field('movement_q');
	$answer = get_sub_field('movement_a');
	?>
	<div class="accordion_wrapper">
		<button class="accordion"><?php echo $question; ?></button>
		<div class="panel">
		<p ><?php echo $answer ?></p>
		</div>
	</div>

	<?php endwhile; ?>
	<?php endif; ?> 
</div>

<div id="intl_living" class="tabcontent">
 <?php if( have_rows('faq_intentional') ): ?>
	<?php while( have_rows('faq_intentional') ): the_row(); 
	$question = get_sub_field('intentional_q');
	$answer = get_sub_field('intentional_a');
	?>
	<div class="accordion_wrapper">
		<button class="accordion"><?php echo $question; ?></button>
		<div class="panel">
		<p ><?php echo $answer ?></p>
		</div>
	</div>

	<?php endwhile; ?>
	<?php endif; ?> 
</div>

<div>
	
</div>
</div>
</section>

<?php get_footer(); ?>