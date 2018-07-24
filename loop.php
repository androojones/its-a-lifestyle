<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<div class="row" id="masonry_container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>            
    <a href="<?php the_permalink(); ?>">
        <div class="ms-item">
        <?php if (has_post_thumbnail()) : ?>
            <figure class="article-preview-image">
                <?php the_post_thumbnail('large'); ?>
            </figure>
        <?php else : ?>
        <?php endif; ?>
            <div class="excerpt_wrapper">
                <h2 class="post-title">
                	<a href="<?php the_permalink(); ?>" class="post-title-link"><?php the_title(); ?></a>
                </h2>
                <p><?php the_excerpt(); ?></p>
                <div class="meta-info">
                    <h6><?php the_date(); ?></h6>
                    <span>/</span>
                    <h6><?php comments_number( '0 Comments', '1 Comment', '% comments' ); ?></h6>
                </div>
            </div>
        </div>
    </a>
                
    <?php endwhile;
                
    else : ?>

        <?php echo do_shortcode( '[ajax_load_more container_type="div" post_type="post" posts_per_page="10" scroll="false"]' ); ?>

        <article class="no-posts">

            <h1><?php _e('No posts were found.'); ?></h1>

        </article>
    <?php endif; ?>
                    
                </div>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
