<?php
/**
 * Template Name: About Template
 */
 ?>

<?php get_header(); ?>


<div style="background:url('/wp-content/themes/ept/css/img/brillant.png');">
<h1 class="entry-title no-hero"><?php the_title(); ?></h1>
<div class="entry-content">

  <?php
  while ( have_posts() ) : the_post();

the_content();
  endwhile; // End of the loop.
  ?>
</div>
</div>


<?php get_footer(); ?>
