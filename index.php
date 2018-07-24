<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

  <div class="blog-loop">
    <section id="blog_hero" class="hero">
      <div class="img--background" style="background-image: url(<?php the_field('blog_hero', get_option('page_for_posts')); ?>);">
      </div>
    <div class="hero_right">
      <p><?php the_field('blog__subtitle', get_option('page_for_posts')); ?></p>
      <h1><?php the_field('blog__title', get_option('page_for_posts')); ?></h1>
    </div>
    </section>
   <div class="container">
  		<?php get_template_part( 'loop', 'index' );	?>
  </div> <!-- /.container -->

</div> <!--/.content -->

<?php get_footer(); ?>

<script type="text/javascript">  
    jQuery(window).load(function() {
  var container = document.querySelector('#masonry_container');
  var msnry = new Masonry( container, {
    itemSelector: '.ms-item',
    columnWidth: '.ms-item',                
  });  
  
    });
</script>